<?php 

 require('../config/autoload.php'); 
include("oghead.php");

$file=new FileUpload();
$elements=array(
        "ename"=>"","eage"=>"","job"=>"","address"=>"","ephone"=>"","certificate"=>"","profilep"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('ename'=>"Employee name",'eage'=>"Employee age",'job'=>"Job",'address'=>"address",'ephone'=>"Employee phone",'certificate'=>"upload certificate",'profilep'=>"upload photo");

$rules=array(
    "ename"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "eage"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
    "job"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphsonly"=>true),
    "address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),

    "eimage"=>array("filerequired"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['eimage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))	
    {

$data=array(

       
        'ename'=>$_POST['ename'],
        'eage'=>$_POST['eage'],
        'job'=>$_POST['job'],
        'eage'=>$_POST['eage'],
        'eimage'=>$fileName
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"employee"))
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
Bimage:

<?= $form->fileField('eimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('eimage'); ?></span>

</div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


