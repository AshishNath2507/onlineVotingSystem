<?php
session_start();

include("connect.php");

if (isset($_POST['save_data'])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $branch = $_POST["branch"];
    $apply = $_POST["apply"];


    $query = "INSERT INTO candidates VALUES (null, '$name', '$address', '$phone', '$branch', '$apply')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Registered Successfully";
        header("Location:cpanel.php");
    } else {
        $_SESSION['status'] = "Registration Failed";
        header("Location:candidates.php");
    }
}
