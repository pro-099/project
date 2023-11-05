<?php require('inc/db_config.php'); 

// session_start();
// if((isset($_SESSION['admin_name']) && $_SESSION['admin_name']==true)){
//     header("Location:admin_index.php");
// }
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];

    // Hardcoded admin credentials
    $valid_admin_name = "admin";
    $valid_admin_pass = "admin123";

    if ($admin_name === $valid_admin_name && $admin_pass === $valid_admin_pass) {
        // Successful login
        $_SESSION['admin_name'] = $admin_name;
        header("Location:admin_index.php");
        exit();
    }
    else 
    {
        // Login failed
        echo "Invalid username or password. <a href='admin_log.php'>Try again</a>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login panel</title>
    <?php require('inc/link.php'); ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-white">

<div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="post">
        <h4 class="bg-dark text-white py-3">admin login panel</h4>
        <div class="p-4">
        <div class="mb-3">
            <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="admin name" >
        </div>
        <div class="mb-4">
            <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="password" >
        </div>
        <button name="login" type="submit" class="btn text-dark custom-bg shadow-none">login</button>
        </div>
    </form>
</div>
    


<?php require('inc/scripts.php') ?>


</body>
</html>