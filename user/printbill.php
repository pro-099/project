
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
require('../config/autoload.php');
$dao=new DataAccess();
?>
<div class="row">
 <div class="col-md-12">
 <div class="table-responsive">
                                <table border="1"  id="printTable" style="width:100%" >
                                    <thead>
                          <center> GLAM </center>
                           <center> SALON </center>
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
$name=$_SESSION['email'] ;

 

$sql = "SELECT * FROM booking WHERE status=1 and username='$name'";
$result = $conn->query($sql);


	
	
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td> "  . $row["cname"]. "</td> <td>"  . $row["rate"]. "</td> <td>" . $row["rate"]. "</td>   </tr>";
	  
	    
}
}


 ?>

 <?php
 $sql123 = "select sum(rate) as t from booking where status=1 and  username='$name'";
$result123 = $conn->query($sql123);
	   $row = $result123->fetch_assoc();
	   $total=$row["t"];
	    echo "<tr> <td colspan='3'  style='text-align:right'>Total:</td><td> ", $total, "</td></tr>";
	   ?>
       




</table>



<?php

$sql11 =" UPDATE booking SET status=2 WHERE status=1 and username='$name'" ;

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




