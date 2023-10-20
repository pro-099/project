<?php require('../config/autoload.php'); ?>
<?php  //include('header.php'); ?>   
<?php
$dao=new DataAccess();
$rules=array(
    'uname'=>array("required"=>true),
    'address'=>array("required"=>true),
    'password'=>array("required"=>true),
    'phone_no'=>array("required"=>true),
	
);
$labels=array('uname'=>"NAME",'address'=>"ADDRESS",'password'=>"PASSWORD",'phone_no'=>"PHONE NO");
$validator=new FormValidator($rules);
$elements=array(
    
	'uname'=>'',
	'address' =>'',
	'password'=>'',
    'phone_no'=>''
    

   
    
	);
$form = new FormAssist($elements,$_POST);

if(isset($_POST['signup']))
{
	if($validator->validate($_POST))
	{
	$data=array(
        'uname'=>$_POST['uname'],
        'address'=>$_POST['address'],
        'password'=>$_POST['password'],
        'phone_no'=>$_POST['phone_no']
  
		);
		$table='userreg';
		if($dao->insert($data,$table))
        {
        	//$msg="Registered successfully";
		echo "<script> alert('Registered successfully');</script> ";
		
		}
		
		else
			echo "<script> alert('Something went wrong');</script> ";
		//$msg="error";
	//	header('location:index.php');	
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
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>--><h5>USER NAME</h5>
			<td><input type="text" name="uname" /></td>
			<td> <?php echo $validator->error('uname'); ?> </td>
                            </div>

                            <div class="form-group">
                               <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>--><h5>ADDRESS:<?php echo $form->textBox('address'); ?></h4>
			<?php echo $validator->error('address') ?>
                            </div>

                            
                            <div class="form-group">
                               <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>--><h5>PHONE NO:<?php echo $form->textBox('phone_no'); ?></h4>
			<?php echo $validator->error('phone_no') ?>
                            </div>
                    
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<h5>PASSWORD</h5>
			<td><input type="text" name="password" /></td>
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