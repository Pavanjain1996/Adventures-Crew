<?php
session_start();
include('dbconnection.php');
$query='select nbooking from users where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$nbooking=$arr['nbooking']+1;
$query='update users set nbooking=nbooking+1 where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
$date=$_POST['date'];
$nperson=$_POST['totalperson'];
$query='insert into booking (aid,username,nbooking,date,nperson) values ('.$_SESSION['aid'].',"'.$_SESSION['username'].'",'.$nbooking.',"'.$date.'",'.$nperson.')';
mysqli_query($con,$query);
$query='select bid from booking where username="'.$_SESSION['username'].'" and nbooking='.$nbooking;
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$bid=$arr['bid'];
for($i=1;$i<=$nperson;$i++){
    $name=$_POST['person'.$i];
    $query='insert into booking_detail (bid,name) values ('.$bid.',"'.$name.'")';
    mysqli_query($con,$query);
}
header('location:bookingConfirmed.php');
?>