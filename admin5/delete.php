

<?php	
include("dbcon.php");
$bid = $_GET['category_id'];
$sql = "update category set status=2 where category_id=".$bid;

$conn->query($sql);

 header('location:viewemployee.php');



?>

