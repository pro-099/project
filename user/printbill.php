
<script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

<?php  
 //session_start();
include("dbcon.php");
//require('../config/autoload.php');
include("header2.php");
$dao=new DataAccess();
?>
<div class="row">
 <div class="col-md-12">
 <div class="table-responsive">
                                <table border="1"  id="printTable" style="width:100%" >
                                    <thead>
                          <center> WORKERS</center>
                           <center> WORLD </center>
                            <tr>
                             <th style="text-align:left">BillNo.1</th>
                               <th colspan="2" style="text-align:left"></th>
                              <th style="text-align:left" >Date:<?php echo  date("Y/m/d"); ?></th>
                            </tr>
                           <tr>
                        <th>Category name</th>
                     
                        <th>Rate</th> 
			
<th>Total</th>
</tr>
                      
                                    </thead>
                                    <tbody>
                                   
 <?php
$uname=$_SESSION['uname'] ;

 

$sql = "SELECT * FROM booking WHERE bstatus=1 and uname='$uname'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$sql = "SELECT designation FROM empreg WHERE id=".$r["emp_id"];
$r2 = $conn->query($sql);
$rr=$r2->fetch_assoc();
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td> "  . $rr["designation"]. "</td> <td>"  . $row["amount"]. "</td> <td>" . $row["amount"]. "</td>   </tr>";
	  
	    
}
}


 ?>

 <?php
 $sql123 = "select sum(amount) as t from booking where bstatus=1 and  uname='$uname'";
$result123 = $conn->query($sql123);
	   $row = $result123->fetch_assoc();
	   $total=$row["t"];
	    echo "<tr> <td colspan='3'  style='text-align:right'>Total:</td><td> ", $total, "</td></tr>";
	   ?>
       




</table>



<?php

$sql11 =" UPDATE booking SET bstatus=2 WHERE status=1 and uname='$uname'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessfully');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="displayservice.php">HOME</a>
</div>
</div>
</div>

</form>




