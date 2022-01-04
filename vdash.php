<?php
session_start();
if (!$_SESSION['email']) {
    header("LOCATION: vlogin.php");
}
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
        <nav class="navbar navbar-default  navbar-inverse" role="navigation">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand headerFont text-lg"><strong>Online Voting System</strong></a>
                </div>

                <div class="collapse navbar-collapse" id="example-nav-collapse">
                    
                    <button type="submit" onclick="location.href='vlogout.php';" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Logout</strong></span></button>

                </div>

            </div>
            <!-- end of container -->
        </nav>
</div>
    <center><h1>Hello <?php echo ("$email"); ?></h1></center>   
    <center><a href="vault.html" class="btn btn-primary btn-md specialHead"> 
        <span class="glyphicon glyphicon-tag"></span> Cast Your Vote</a>
    </center>

</body>
</html>