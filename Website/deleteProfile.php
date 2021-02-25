<?php
session_start();
include('dbconnection.php');
$query='select bid from booking where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n>0){
    $bids='(';
    $arr=mysqli_fetch_array($res);
    $bids=$bids.$arr['bid'];
    for($i=1;$i<=$n-1;$i++){
        $bids=$bids.',';
        $arr=mysqli_fetch_array($res);
        $bids=$bids.$arr['bid'];
    }
    $bids=$bids.')';
    echo $bids;
    $query='delete from booking_detail where bid in '.$bids;
    mysqli_query($con,$query);
    $query='delete from booking where username="'.$_SESSION['username'].'"';
    mysqli_query($con,$query);
}
$query='select profile from users where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$profile='Profiles/'.$arr['profile'];
unlink($profile);
$query='delete from users where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:logout.php');
?>