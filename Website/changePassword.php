<?php
session_start();
include('dbconnection.php');
$password=$_POST['password'];
$query='update users set password="'.$password.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:logout.php');
?>