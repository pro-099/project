<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
       "category_name"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('f_name'=>"f_name",'l_name'=>"l_name",'address'=>"address",'p_no'=>"p_no");

$rules=array(
   
    "f_name"=>array("required"=>true,"minlength"=>5,"maxlength"=>15,"alphaonly"=>true),
    "l_name"=>array("required"=>true,"minlength"=>5,"maxlength"=>15,"alphaonly"=>true),
    "address"=>array("required"=>true,"minlength"=>15,"maxlength"=>15,"alphaonly"=>true),
    "p_no"=>array("required"=>true,"minlength"=>10,"maxlength"=>15,"integeronly"=>true)
   
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        
        'f_name'=>$_POST['f_name'],
        'l_name'=>$_POST['l_name'],
        'address'=>$_POST['address'],
        'p_no'=>$_POST['p_no']
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"registraction"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
     ?>

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

f_name:

<?= $form->textBox('f_name',array('class'=>'form-control')); ?>
<?= $validator->error('f_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-6">

l_name:

<?= $form->textBox('l_name',array('class'=>'form-control')); ?>
<?= $validator->error('l_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-6">

address:

<?= $form->textBox('address',array('class'=>'form-control')); ?>
<?= $validator->error('address'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-6">

p_no:

<?= $form->textBox('p_no',array('class'=>'form-control')); ?>
<?= $validator->error('p_no'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>



