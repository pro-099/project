<?php require('../config/autoload.php'); ?>
<?php include('header.php'); ?>   
<?php
$dao=new DataAccess();
$rules=array(
    'rname'=>array("required"=>true),
    'rdate'=>array("required"=>true),
    'post'=>array("required"=>true),
    'salary'=>array("required"=>true),
    'jdate'=>array("required"=>true),
    'vacancy'=>array("required"=>true),
	
);
$labels=array('rname'=>"RECRUITMENT NAME",'rdate'=>"RECRUITMENT DATE",'post'=>"POST",'salary'=>"SALARY",'jdate'=>" JOINING DATE",'vacancy'=>"VACANCY");
$validator=new FormValidator($rules);
$elements=array(
    
    'rname' =>'',
	'rdate'=>'',
	'post' =>'',
    'salary' =>'',
	'jdate'=>'',
	'vacancy' =>''
    

   
    
	);
$form = new FormAssist($elements,$_POST);

if(isset($_POST['signup']))
{
	
	if($validator->validate($_POST))
	{
	$data=array(
        'rname'=>$_POST['rname'],
        'rdate'=>$_POST['rdate'],
        'post'=>$_POST['post'],
        'salary'=>$_POST['salary'],
        'jdate'=>$_POST['jdate'],
        'vacancy'=>$_POST['vacancy']
  
		);
		$table='jobrecruit';
		if($dao->insert($data,$table))
        {
        	//$msg="Registered successfully";
		echo "<script> alert('New record created successfully');</script> ";
		
		}
		
		else
			echo "<script> alert('Something went wrong');</script> ";
		//$msg="error";
		header('location:index.php');	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOB RECRUITMENT </title>

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
                        <h2 class="form-title">RECRUITMENT DETAILS</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                               <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>--><h5>RECRUITMENT NAME:<?php echo $form->textBox('rname'); ?> </h5>
			<?php echo $validator->error('rname') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<h5>RECRUITMENT DATE</h5>
			<td><input type="date" name="rdate" /></td>
			<td> <?php echo $validator->error('rdate'); ?> </td>
                            </div>

                            <div class="form-group">
                               <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>--><h5>POST:<?php echo $form->textBox('post'); ?></h4>
			<?php echo $validator->error('post') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>--><h5>SALARY:<?php echo $form->textBox('salary'); ?> </h5>
			<?php echo $validator->error('salary') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<h5>JOIN DATE</h5>
			<td><input type="date" name="jdate" /></td>
			<td> <?php echo $validator->error('jdate'); ?> </td>
                            </div>
                            <div class="form-group">
                               <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>--><h5>VACANCY:<?php echo $form->textBox('vacancy'); ?> </h5>
			<?php echo $validator->error('vacancy') ?>
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
			<td><h4>NAME:<?php echo $form->textBox('rname'); ?> </h4><br/></td>
			<td><?php echo $validator->error('rname') ?></td>
			</tr>
			<tr>
			<td><h4>USER NAME:<?php echo $form->textBox('rdate'); ?> </h4><br/></td>
			<td><?php echo $validator->error('rdate') ?></td>
			</tr>
			<tr>
			
			<td><h4>PASSWORD:<?php echo $form->passwordBox ('post'); ?></h4> <br/></td>
			<td><?php echo $validator->error('post') ?></td>
			</tr>
			<tr>
			<td><h4>USER NAME:<?php echo $form->textBox('salary'); ?> </h4><br/></td>
			<td><?php echo $validator->error('salary') ?></td>
			</tr>
            <tr>
			<td><h4>USER NAME:<?php echo $form->textBox('jdate'); ?> </h4><br/></td>
			<td><?php echo $validator->error('jdate') ?></td>
			</tr>
            <tr>
			<td><h4>USER NAME:<?php echo $form->textBox('vacancy'); ?> </h4><br/></td>
			<td><?php echo $validator->error('vacancy') ?></td>
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