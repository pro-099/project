<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "ename"=>"","eage"=>"","ephone"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('ename'=>"Employee name",'eage'=>"Employee age",'ephone'=>"employee pnumber");

$rules=array(
    "ename"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "eage"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
    "ephone"=>array("required"=>true,"minlength"=>10,"maxlength"=>10,"integeronly"=>true)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	

$data=array(

       
        'ename'=>$_POST['ename'],
        'eage'=>$_POST['eage'],
        'ephone'=>$_POST['ephone']

        
         
    );

    print_r($data);
  
    if($dao->insert($data,"employee"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}




?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Employee name:

<?= $form->textBox('ename',array('class'=>'form-control')); ?>
<?= $validator->error('ename'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Employee Age:

<?= $form->textBox('eage',array('class'=>'form-control')); ?>
<?= $validator->error('eage'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Employee pnumber:

<?= $form->textBox('ephone',array('class'=>'form-control')); ?>
<?= $validator->error('ephone'); ?>

</div>
</div>


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


