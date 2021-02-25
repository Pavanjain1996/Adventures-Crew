<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
?>
<div class="container-fluid" style="padding:30px;background-color:#37393A;">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:justify;font:18px Courgette;color:white;"><span style="font-size:40px;">A</span>n adventure is an exciting experience that is typically a bold, sometimes risky, undertaking. Adventures may be activities with some potential for physical danger such as traveling, exploring, skydiving, mountain climbing, scuba diving, river rafting or participating in extreme sports. Adventures are often undertaken to create psychological arousal or in order to achieve a greater goal such as the pursuit of knowledge that can only be obtained in a risky manner.</div>
<div class="col-md-1"></div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-3" style="padding:20px;">
<div style="padding:10px;text-align:center;font-size:20px;font-weight:bold;box-shadow:0px 0px 10px white;color:white;">
<?php
$query='select count(name) from activity';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo 'Adventurous Spots<br/>'.$arr['count(name)'];
?>
</div>
</div>
<div class="col-md-3" style="padding:20px;">
<div style="padding:10px;text-align:center;font-size:20px;font-weight:bold;box-shadow:0px 0px 10px white;color:white;">
<?php
$query='select count(name) from users';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo 'Users Here<br/>'.$arr['count(name)'];
?>
</div>
</div>
<div class="col-md-3" style="padding:20px;">
<div style="padding:10px;text-align:center;font-size:20px;font-weight:bold;box-shadow:0px 0px 10px white;color:white;">
<?php
$query='select count(bid) from booking';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo 'Total Bookings<br/>'.$arr['count(bid)'];
?>
</div>
</div>
<div class="col-md-3" style="padding:20px;">
<div style="padding:10px;text-align:center;font-size:20px;font-weight:bold;box-shadow:0px 0px 10px white;color:white;">
<?php
$query='select count(did) from booking_detail';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo 'Persons Enjoyed Adventure<br/>'.$arr['count(did)'];
?>
</div>
</div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-12" style="text-decoration:underline;padding:10px;text-align:center;font:30px Courgette;color:white;font-weight:bold;">What we serve</div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-4"><div style="padding:10px;text-align:justify;font:18px Courgette;color:white;font-weight:bold;box-shadow:0px 0px 10px white;">We provide you the best adventures from all around India and gives you direct contact and also the more details of adventure so you can analyse the adventure more clearly.</div></div>
<div class="col-md-4"><div style="padding:10px;text-align:justify;font:18px Courgette;color:white;font-weight:bold;box-shadow:0px 0px 10px white;">We provide you the adventure at the minimal expenditure after discussing with many dealers and find the suitable dealer for you at least price.</div></div>
<div class="col-md-4"><div style="padding:10px;text-align:justify;font:18px Courgette;color:white;font-weight:bold;box-shadow:0px 0px 10px white;">We serve you the best quality images from the various loations and different shots so that you can clearly view the location and choose your adventure properly.</div></div>
</div>
</div>
<?php
include('footer.php');
?>