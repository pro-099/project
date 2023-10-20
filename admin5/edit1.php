
<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','category','category_id='.$_GET['id']);

$elements=array(
        "cname"=>$info[0]['cname']);


$file=new FileUpload();


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('cname'=>"cname");

$rules=array(
   
    "cname"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphaonly"=>true)
   
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


    $data=array(

        'cname'=>$_POST['cname'],
        
    );
  $condition='cid='.$_GET['id'];

    if($dao->update($data,'category',$condition))
    {
        $msg="Successfullly Updated";

    }
    else
        {$msg="Failed";} ?>

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

category name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>