<?php
    include ("connect.php");
    session_start();


    $email=$_POST["email"];
    $password=$_POST["password"];

    $result=mysqli_query($con,"select * from voter where vemail = '$email'");
	$row=mysqli_fetch_array($result);

	//    table column name        
	if($row['password']==$password)
	{
		$_SESSION['email']=$email; //[email]= user submit email
 		header("Location:vdash.php");
 	}
 	else
 	{
 		header("location:vlogin.php?err=1");
 	}

?>