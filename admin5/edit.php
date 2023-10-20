<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','category','category_id='.$_GET['id']);

$elements=array(
        "category_name"=>$info[0]['category_name']);

$file=new FileUpload();



$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('category_name'=>"category name");

$rules=array(
    "category_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphaonly"=>true)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	

    $data=array(

        'category_name'=>$_POST['category_name']
        
          //'simage'=>$_POST['simage'],
    );
  $condition='category_id='.$_GET['id'];

    if($dao->update($data,'category',$condition))
    {
        $msg="Successfullly Updated";
header('location:viewstudents.php');
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
category name :

<?= $form->textBox('category_name',array('class'=>'form-control')); ?>
<?= $validator->error('category_name'); ?>

</div>
</div>


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


