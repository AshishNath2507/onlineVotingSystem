<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="vstyle.css">
</head>

<body>

    <?php
    include("nav.php");
    ?>

    <div class="wrapper">
        <div class="logo"> <img src="icons8-sign-up-64.png" alt=""> </div>
        <div class="text-center mt-4 name"> <h2>User Panel</h2> </div>
        <form class="p-3 mt-3" action="vlogin1.php" method="POST" >

            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="email" name="email"  placeholder="Email"> </div>

            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" i placeholder="Password"> </div>
            
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="vsignup.php">Sign up</a> </div>
    </div>


</body>

</html>