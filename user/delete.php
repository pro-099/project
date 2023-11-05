

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "delete from booking where bid=".$bid;
$sql3 = "SELECT emp_id FROM booking WHERE bid=".$bid;
$r3 = $conn->query($sql3);
$rr=$r3->fetch_assoc();
$id=$rr['emp_id'];
$sql2=" UPDATE empreg SET status=1 WHERE status=2 and id='$id'";
$conn->query($sql2);
$conn->query($sql);

 header('location:viewbooking111.php');



?>

