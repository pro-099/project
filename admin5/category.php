<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
       "category_name"=>"","img"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('category_name'=>"category_name",'img'=>"img");

$rules=array(
   
    "category_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>15,"alphaonly"=>true),
    "img"=>array("filerequired"=>true)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['img'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))	
    {

$data=array(

       
        'category_name'=>$_POST['category_name'],
        'img'=>$fileName
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"category"))
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

<<<<<<< HEAD
 <form action="" method="POST" enctype="multipart/form-data">
=======
 <form  method="POST" >
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c

<div class="row">
                    <div class="col-md-6">

category name:

<?= $form->textBox('category_name',array('class'=>'form-control')); ?>
<?= $validator->error('category_name'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">

category image:

<?= $form->fileField('img',array('class'=>'form-control')); ?>
<?= $validator->error('img'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>



