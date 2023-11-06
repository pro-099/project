

<?php	
include("dbcon.php");
$id = $_GET['id'];
$sql = "update empreg set status=1 where id=".$id;

$conn->query($sql);
if($conn)
{

    echo "<script> alert('Verification success');</script>";
    header('location:index.php');
}
else{
    echo "<script> alert('Verification Not success');</script>";

}



?>

