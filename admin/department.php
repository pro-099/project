<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "department_name"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('department_name'=>"department name");

$rules=array(
    "department_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'dname'=>$_POST['department_name'],
        

        
         
    );

    print_r($data);
  
    if($dao->insert($data,"department"))
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
department name:

<?= $form->textBox('department_name',array('class'=>'form-control')); ?>
<?= $validator->error('department_name'); ?>

                    </div>
</div>


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


