<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
       "category_name"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('category_name'=>"category_name");

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
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"category"))
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

category name:

<?= $form->textBox('category_name',array('class'=>'form-control')); ?>
<?= $validator->error('category_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>



