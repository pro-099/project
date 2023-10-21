<?php include("header2.php");	?>
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   $name=$_SESSION['email'] ;
   if(isset($_POST["payment"]))
   {
        echo "hai";
        echo"<script >location.href = 'payment.php'</script>";
   }
      if(isset($_POST["purchase"]))
   {
        header('location:displayservice.php');
   }
   if(!isset($_SESSION['email']))
      {
          header('location:login.php');
          }
          else
          { 
          $sql = "select sum(rate)as t from booking where status=1 and  username='$name'";
   $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          $total=$row["t"];
          
          $_SESSION['amount']=$total; 
          
 
	    ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> CART DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                    <th>Service No</th>
                     
                      
                        <th>Category Name</th>
                        <th>Rate</th>
                       
                       
                      
                        <th>Current Date</th>
                        <th>Appointment Date</th>
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    'delete'=>array('label'=>'Delete','link'=>'delete.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid')
        
        
    );

   $condition="username='".$name."' and status=1";
   
   $join=array(
       
    );  
    $fields=array('bid','cname','rate','cdate','apdate');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


            <div class="row">
 <div class="col-md-3">
TOTAL AMOUNT:
<input type="text" class="form-control" value="<?php echo $total; ?>" readonly name="total"/>

</div>
<form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="purchase" >New Service</button>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="payment" >Payment</button>

</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>