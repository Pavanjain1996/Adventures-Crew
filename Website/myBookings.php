<?php
include('header.php');
include('navbar.php');
include('dbconnection.php');
if(isset($_SESSION['username'])){
$date=date('Y-m-d');
$query='select * from booking where username="'.$_SESSION['username'].'" and date<"'.$date.'" order by date';
$res1=mysqli_query($con,$query);
$query='select * from booking where username="'.$_SESSION['username'].'" and date>="'.$date.'" order by date';
$res2=mysqli_query($con,$query);
$n1=mysqli_num_rows($res1);
$n2=mysqli_num_rows($res2);
?>
<style>
#box{
    background-image:url('Images/background1.jpg');
    background-size:cover;
}
</style>
<div id="box">
<div class="container" style="padding:30px;">
<br/><br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-2" id="past" onclick="changeBack()" style="font-size:20px;font-weight:bold;font-family:'Courgette';border-bottom:3px solid #8F45E7;text-align:center;padding:5px;">Past Bookings</div>
<div class="col-md-2" id="upcoming" onclick="change()" style="font-size:20px;font-weight:bold;font-family:'Courgette';text-align:center;padding:5px;">Upcoming Bookings</div>
<div class="col-md-4"></div>
</div>
<hr style="height:3px;background-color:white;"/>
<br/>
<div class="row" id="pastbooking">
<?php
if($n1>0){
?>
<div class="col">
<?php
for($i=1;$i<=$n1;$i++){
$arr=mysqli_fetch_array($res1);
?>
<div class="row" style="text-align:center;font-size:20px;font-weight:bold;">
<div class="col-md-4">
<?php
$query='select image,name,place from activity where id='.$arr['aid'];
$res3=mysqli_query($con,$query);
$arr1=mysqli_fetch_array($res3);
?>
<img src="Images/<?php echo $arr1['image']; ?>" width="100%"><br/><br/>
</div>
<div class="col-md-4">
Adventure : <a href="viewActivity.php?aid=<?php echo $arr['aid']; ?>" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';"><?php echo $arr1['name']; ?></a><br/>
Place : <?php echo $arr1['place']; ?><br/>
Username : <?php echo $arr['username']; ?><br/>
Date of Journey : <?php echo $arr['date']; ?><br/>
Your Booking Number : <?php echo $arr['nbooking']; ?><br/>
Number of persons : <?php echo $arr['nperson']; ?><br/>
</div>
<div class="col-md-4" style="text-align:left;">
<?php
$query='select name from booking_detail where bid='.$arr['bid'];
$res4=mysqli_query($con,$query);
for($j=1;$j<=$arr['nperson'];$j++){
    $arr2=mysqli_fetch_array($res4);
?>
Person<?php echo $j; ?> : <?php echo $arr2['name']; ?><br/>
<?php
}
?>
</div>
</div>
<hr style="background-color:white;height:2px;"/>
<?php
}
?>
</div>
<?php
}
else{
?>
<div class="col">
<div style="font-size:100px;text-align:center;color:#8F45E7;"><i class="fa fa-suitcase" aria-hidden="true"></i></div><br/>
<div style="font-size:30px;text-align:center;color:#8F45E7;font-weight:bold;">There are no previous adventures booking by you.</div>
</div>
<?php
}
?>
</div>
<div class="row" id="upcomingbooking" style="display:none;">
<?php
if($n2>0){
?>
<div class="col">
<?php
for($i=1;$i<=$n2;$i++){
$arr=mysqli_fetch_array($res2);
?>
<div class="row" style="text-align:center;font-size:20px;font-weight:bold;">
<div class="col-md-4">
<?php
$query='select image,name,place from activity where id='.$arr['aid'];
$res3=mysqli_query($con,$query);
$arr1=mysqli_fetch_array($res3);
?>
<img src="Images/<?php echo $arr1['image']; ?>" width="100%"><br/><br/>
</div>
<div class="col-md-4">
Adventure : <a href="viewActivity.php?aid=<?php echo $arr['aid']; ?>" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';"><?php echo $arr1['name']; ?></a><br/>
Place : <?php echo $arr1['place']; ?><br/>
Username : <?php echo $arr['username']; ?><br/>
Date of Journey : <?php echo $arr['date']; ?><br/>
Your Booking Number : <?php echo $arr['nbooking']; ?><br/>
Number of persons : <?php echo $arr['nperson']; ?><br/>
</div>
<div class="col-md-4" style="text-align:left;">
<?php
$query='select name from booking_detail where bid='.$arr['bid'];
$res4=mysqli_query($con,$query);
for($j=1;$j<=$arr['nperson'];$j++){
    $arr2=mysqli_fetch_array($res4);
?>
Person<?php echo $j; ?> : <?php echo $arr2['name']; ?><br/>
<?php
}
?>
</div>
</div>
<hr style="background-color:white;height:2px;"/>
<?php
}
?>
</div>
<?php
}
else{
?>
<div class="col">
<div style="font-size:100px;text-align:center;color:#8F45E7;"><i class="fa fa-suitcase" aria-hidden="true"></i></div><br/>
<div style="font-size:30px;text-align:center;color:#8F45E7;font-weight:bold;">There are no upcoming adventures booking by you.</div>
</div>
<?php
}
?>
</div>
<br/><br/>
</div>
</div>
<script>
function change(){
    a=document.getElementById('past');
    b=document.getElementById('upcoming');
    a.style.border='none';
    b.style.borderBottom='3px solid #8F45E7';
    a=document.getElementById('pastbooking');
    b=document.getElementById('upcomingbooking');
    a.style.display='none';
    b.style.display='block';
}
function changeBack(){
    a=document.getElementById('past');
    b=document.getElementById('upcoming');
    b.style.border='none';
    a.style.borderBottom='3px solid #8F45E7';
    a=document.getElementById('pastbooking');
    b=document.getElementById('upcomingbooking');
    a.style.display='block';
    b.style.display='none';
}
</script>
<?php
include('footer.php');
}
else{
    header('location:login.php');
}
?>