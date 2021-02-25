<?php
session_start();
include('dbconnection.php');
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query='update users set mobile="'.$mobile.'", email="'.$email.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:profile.php');
?>