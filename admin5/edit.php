<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','category','category_id='.$_GET['id']);

$elements=array(
        "category_name"=>$info[0]['category_name']);

<<<<<<< HEAD

$file=new FileUpload();


=======
$file=new FileUpload();



>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

<<<<<<< HEAD
$labels=array('category_name'=>"category_name");

$rules=array(
   
    "category_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphaonly"=>true)
   
=======
$labels=array('category_name'=>"category name");

$rules=array(
    "category_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphaonly"=>true)

>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	

<<<<<<< HEAD

    $data=array(

        'category_name'=>$_POST['category_name'],
        
=======
    $data=array(

        'category_name'=>$_POST['category_name']
        
          //'simage'=>$_POST['simage'],
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
    );
  $condition='category_id='.$_GET['id'];

    if($dao->update($data,'category',$condition))
    {
        $msg="Successfullly Updated";
<<<<<<< HEAD

=======
header('location:viewstudents.php');
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
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
<<<<<<< HEAD

category name:
=======
category name :
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c

<?= $form->textBox('category_name',array('class'=>'form-control')); ?>
<?= $validator->error('category_name'); ?>

</div>
</div>

<<<<<<< HEAD
<div class="row">
                    <div class="col-md-6">

=======
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


<<<<<<< HEAD

=======
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
