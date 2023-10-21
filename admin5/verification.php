
<<<<<<< HEAD
=======

>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Id</th>
<<<<<<< HEAD
                        <th>category name</th>                        
                        <th>EDIT/DELETE</th>
                     
=======
                        <th>Employee name</th>
                        <th>Employee age</th>
                        <th>EDIT/DELETE</th>
                        <th>Verify Employee</th>
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'edit.php','params'=>array('id'=>'category_id'),'attributes'=>array('class'=>'btn btn-success')),
    
<<<<<<< HEAD
    'delete'=>array('label'=>'Delete','link'=>'editing.php','params'=>array('id'=>'category_id'),'attributes'=>array('class'=>'btn btn-success'))
=======
    'delete'=>array('label'=>'Delete','link'=>'edit.php','params'=>array('id'=>'category_id'),'attributes'=>array('class'=>'btn btn-success'))
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
    
    );

    $config=array(
        'srno'=>true,
<<<<<<< HEAD
        'hiddenfields'=>array('category_id'),
=======
        'hiddenfields'=>array('eid'),
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
        
        
    );

   
   $join=array(
        
    );
<<<<<<< HEAD
     $fields=array('category_id','category_name');

    $users=$dao->selectAsTable($fields,'category',"status=1",$join,$actions,$config);
=======
     $fields=array('eid','ename');

    $users=$dao->selectAsTable($fields,'employee',1,$join,$actions,$config);
>>>>>>> d495063f46927161c055ca3616f5cecaecaba11c
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
