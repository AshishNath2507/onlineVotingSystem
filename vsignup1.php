<?php
    session_start();

    include ("connect.php");
    
    if(isset($_POST['register_btn']))
    {
        $name=$_POST["name"];
        $password=$_POST["password"];
        $confirm_password=$_POST["confirmpassword"];
        $address=$_POST["address"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];

        if ($password == $confirm_password) 
        {
            $query= "INSERT INTO voter VALUES (null, '$name', '$password', '$address', '$phone', '$email')";
            $query_run= mysqli_query($con, $query);

            if ($query_run)
            {
                $_SESSION['status'] = "Registered Successfully";
                header("Location:vdash.php");
            } 
            else 
            {
                $_SESSION['status'] = "Registration Failed";
                header("Location:vdash.php");
            }
            
        } 
        else 
        {
            $_SESSION['status'] = "Password Mismatched";
            header("Location:vsignup.php");
            
        }
    }




    
