<?php
session_start();
include('dbconnection.php');
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$profile=$_FILES['profile'];
move_uploaded_file($profile['tmp_name'],"Profiles/".$profile['name']);
$query='insert into users (name,age,gender,mobile,email,profile,username,password) values ("'.$name.'",'.$age.',"'.$gender.'","'.$mobile.'","'.$email.'","'.$profile['name'].'","'.$username.'","'.$password.'")';
mysqli_query($con,$query);
$_SESSION['username']=$username;
header('location:index.php');
?>