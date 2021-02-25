<?php
session_start();
include('dbconnection.php');
$query='select profile from users where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$profile='Profiles/'.$arr['profile'];
unlink($profile);
$profile=$_FILES['profile'];
move_uploaded_file($profile['tmp_name'],"Profiles/".$profile['name']);
$query='update users set profile="'.$profile['name'].'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:profile.php');
?>