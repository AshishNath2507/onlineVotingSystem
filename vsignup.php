<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >   -->
    <link rel="stylesheet" href="vstyle.css">
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <?php
        if (isset($_SESSION['status'])) 
        {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
        }

    ?>
    <div class="wrapper">
        <div class="logo"> <img src="icons8-sign-up-64.png" alt=""> </div>
        <div class="text-center mt-4 name">
            <h2>User Panel</h2>
        </div>
        <form class="p-3 mt-3" action="vsignup1.php" method="POST">

            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="name" placeholder="Username" required> </div>

            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="password" name="password" placeholder="Password" required> </div>

            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="password" name="confirmpassword" placeholder="Confirm Password" required> </div>



            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="text" name="address" placeholder="Address" required> </div>

            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="text" name="phone" placeholder="Phone" required> </div>

            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="text" name="email" placeholder="Email" required> </div>

            <button name="register_btn" class="btn mt-3">Create Account</button>
        </form>
        <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="vlogin.php">Login</a> </div>
    </div>

</body>

</html>
id="pwd"