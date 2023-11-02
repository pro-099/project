<?php //$_SESSION['uname'] ?>
<?php
require('../config/autoload.php');
//include("header2.php");
$dao = new DataAccess();

if (isset($_POST['btn_insert'])) {
    // Check if 'apdate' is set in the POST data
    if (isset($_POST['apdate'])) {
        // Sanitize and validate the 'apdate' if necessary
        $apdate = $_POST['apdate'];

        // Define the data to be inserted
        $data = array(
            'apdate' => $apdate,
             'status'=>1,
             'uname'=>$_SESSION['uname'],
             //'emp_id'=>$_GET['emp_id']

        );

        // Define the table name
        $table = 'booking';

        // Insert the data into the 'booking' table
        if ($dao->insert($data, $table)) {
            echo "<script> alert('Booking successfully');</script>";
        } else {
            echo "<script> alert('Something went wrong');</script>";
        }
    } else {
        echo "<script> alert('Invalid data');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">

    <script>
        function showtotal() {
            /* alert(str);
            var price = document.getElementById("price").value;
            var qty = document.getElementById("qty").value;
            var total = price * qty;
            //alert(total);
            document.getElementById("total").value = total;*/
        }
    </script>

</head>

<body>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="upper">
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="orderdate">Appointment Date:</label><br>
                <input id="apdate" name="apdate" type="date" style="margin-top: 8px;"><br>
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
            <button class="buttons" name="btn_insert" id="btn-1">Booking</button>
        </div>
    </div>
</form>
</body>

</html>
