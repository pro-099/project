<?php require('../config/autoload.php'); ?>
<?php  //include('header.php'); ?>   
<?php
$file=new FileUpload();
$dao=new DataAccess();
$rules=array(
    'emp_id'=>array("required"=>true),
    'ename'=>array("required"=>true),
    'ephone'=>array("required"=>true),
    'designation'=>array("required"=>true),
    'password'=>array("required"=>true),
    'img'=>array("filerequired"=>true)

);
$labels=array('emp_id'=>"EMAIL",'ename'=>"NAME",'ephone'=>"PHONE",'designation'=>"DESIGNATION",'password'=>"PAASWORD",'img'=>"IMAGE");

$elements=array(
    
    'emp_id' =>'',
	'ename'=>'',
	'ephone' =>'',
    'designation' =>'',
	'password'=>'',
    'img'=>''
    

   
    
	);
$validator = new FormValidator($rules);
$form=new FormAssist($elements,$_POST);
if(isset($_POST["signup"]))
{
  
if($validator->validate($_POST))
{ 
    if($fileName=$file->doUploadRandom($_FILES['img'],array('.jpg','.png','.jpeg','.avif'),100000,1,'../uploads'))	
    {

$data=array(

    'emp_id'=>$_POST['emp_id'],
    'ename'=>$_POST['ename'],
    'ephone'=>$_POST['ephone'],
    'designation'=>$_POST['designation'],
    'password'=>$_POST['password'],
    'img'=>$fileName,
     'status'=>1   
         
    );

    //print_r($data);
  
    if($dao->insert($data,"empreg"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="Registration failed";} ?>


<?php
    
}
else
echo $file->errors();
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRATION</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registration/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">DETAILS</h2>
                        <form method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
                            <div class="form-group">
                               <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>--><h5>EMPLOYEE ID:<?php echo $form->textBox('emp_id'); ?> </h5>
			<?php echo $validator->error('emp_id') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<h5>EMPLOYEE NAME</h5>
			<td><input type="text" name="ename" /></td>
			<td> <?php echo $validator->error('ename'); ?> </td>
                            </div>

                            <div class="form-group">
                               <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>--><h5>EPHONE:<?php echo $form->textBox('ephone'); ?></h4>
			<?php echo $validator->error('ephone') ?>
                            </div>
                         

                                                        <div class="form-group">
                                                
                           <h5> Department:</h5>

                            <?php
                                $options = $dao->createOptions('category_name','category_name',"category");
                                echo $form->dropDownList('designation',array('class'=>'form-control'),$options); ?>
                            <?= $validator->error('designation'); ?>

                            </div>
                            <div class="row">
                    <div class="col-md-6">

                category image:

             <?= $form->fileField('img',array('class'=>'form-control')); ?>
             <?= $validator->error('img'); ?>

            </div>
             </div> 


                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<h5>PASSWORD</h5>
			<td><input type="password" name="password" /></td>
			<td> <?php echo $validator->error('password'); ?> </td>
                            </div>
                           <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>-->
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" /> 
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                <?php if(isset($msg))echo "<script>alert(msg);</script> "; ?>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="registration/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a><a href="index.php" class="signup-image-link">Back to Home</a>
                    </div>
                </div>

            </div>
        </section>
        </div>

    <!-- JS -->
    <script src="registration/vendor/jquery/jquery.min.js"></script>
    <script src="registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!--<html>

            		<head>
<style>
	body{background-image:url("user.png");  
		background-position: top;
    
  		background-repeat: no-repeat;
  		background-size: cover;
		}
</style>
	</head>
	<body>
<form method="POST">
				<center>
			<table  style="margin-top:100px;">
           
			<tr><h1>REGISTER DETAILS</h1></tr>
                	<tr>
			<td><h4>NAME:<?php echo $form->textBox('emp_id'); ?> </h4><br/></td>
			<td><?php echo $validator->error('emp_id') ?></td>
			</tr>
			<tr>
			<td><h4>USER NAME:<?php echo $form->textBox('ename'); ?> </h4><br/></td>
			<td><?php echo $validator->error('ename') ?></td>
			</tr>
			<tr>
			
			<td><h4>PASSWORD:<?php echo $form->passwordBox ('ephone'); ?></h4> <br/></td>
			<td><?php echo $validator->error('ephone') ?></td>
			</tr>
			<tr>
			<td><h4>USER NAME:<?php echo $form->textBox('designation'); ?> </h4><br/></td>
			<td><?php echo $validator->error('designation') ?></td>
			</tr>
            <tr>
			<td><h4>USER NAME:<?php echo $form->textBox('password'); ?> </h4><br/></td>
			<td><?php echo $validator->error('password') ?></td>
			</tr>
			<tr>
			<td></td>
                <td><h4><input type="submit" name="submit" value="REGISTER"/></h4></td>
			<td> <?php if(isset($msg))echo $msg; 
	?></td>
			</tr>
		</table>
				</center>
		<div style="color:green;"></div>	
		</form>
    </body>
</html>-->
 <?php //include('footer.php'); ?>



 