<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>
    function showtotal() 
        {
            alert(str);
	           var price=document.getElementById("price").value;  
	           var qty=document.getElementById("qty").value; 
	           var total=price*qty; 
	           //alert(total);
	               document.getElementById("total").value = total;
        }   
    </script>
  
</head>

<body>

<?php

require('../config/autoload.php'); 
//include("header.php");	
include("dbcon.php");

?>

<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
  $_SESSION['email']="abc";
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['email']))
   {
	   header('location:login.php');
  }
  else
  { 
    $_SESSION['email']="abc";
    $uemail=$_SESSION['email'];
    $iid = $_GET['id'];
    $q="select * from category where cid=".$iid ;
    $info1=$dao->query($q);
    $iname=$info1[0]["cname"];
    $price=$info1[0]["rate"];
 
   // $_SESSION['amount']=$totalprice;

    $bdate=date('Y-m-d',time());
    $orderdate=$_POST["orderdate"];
    
   
    $status=1;
    $sql = "INSERT INTO booking(username,cid,cname,rate,apdate,cdate,status) 
    VALUES ('$uemail','$iid','$iname','$price','$orderdate','$bdate','$status')";
                                   
    $conn->query($sql);
    //echo $sql;
 echo"<script >location.href = 'viewbooking.php'</script>";

}

}

?>


<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 
	 $q="select * from empreg where emp_id=".$iid ;
    $info=$dao->query($q);
  
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?>
            <h3>Product Details</h3>
            <img style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[0]["img"]; ?> alt=" " class="img-responsive" />
        
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name">Category Name:</label><br>
                <input id="iname" name="iname" type="text" value="<?php echo $info[0]["ename"];?>"  readonly style="margin-top: 8px;"><br>

                <!-- <label for="Total">Rate</label><br> -->
                <!-- <input id="price" name="price" type="text" value="<?php// echo $info[0]["rate"];?>"  readonly style="margin-top: 8px;"><br> -->
            
                
                <label for="">Appointment Date</label><br>
                <input id="orderdate" name="orderdate" type="date"   style="margin-top: 8px;"><br>
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">booking</button>
                      
        </div>
    </div>
    </form>
</body>

</html>