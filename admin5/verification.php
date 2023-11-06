
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
                        <th>Email</th>
                        <th>Employee name</th>
                        <th>Designation</th>
                        <th>Verify Employee</th>
                      
                    </tr>
<?php
    
    $actions=array(
    'verify'=>array('label'=>'Verify','link'=>'update.php','params'=>array('id'=>'id'),'attributes'=>array('class'=>'btn btn-success')),
    
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('id'),
        
        
    );
    
    $condition=" status=0";
    $join=array(
       
    ); 
     $fields=array('id','emp_id','ename','designation');

    $users=$dao->selectAsTable($fields,'empreg as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
