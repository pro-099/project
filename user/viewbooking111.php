
<?php //require('../config/autoload.php'); ?>
<?php include('header2.php'); ?>

<?php
$dao=new DataAccess();

$uname=$_SESSION['uname'];

?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <h1><center> BOOKING VIEW</center></h1>
                        
                        <th>BID</th>
                        <th>BOOKING DATE</th>
                        <th>AMOUNT</th>
                        <th>EMPID</th>
                        <th>OPITIONS</th>

                    </tr>
<?php
    
    $actions=array(
        'cancel'=>array('label'=>'cancel','link'=>'booking.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),
        'payment'=>array('label'=>'payment','link'=>'payment.php','params'=>array('id'=>'amount','bid'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),

    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uname='".$uname."' and bstatus=1";
    $join=array(
       
    ); 
     $fields=array('bid','apdate','amount','emp_id');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
