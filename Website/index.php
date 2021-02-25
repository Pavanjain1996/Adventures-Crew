<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/carousel1.jpg">
    <div class="carousel-caption">
    <h5 style="font-weight:bold;color:black;font-size:25px;">Sky Diving</h5>
    <p style="font-weight:bold;color:black;">Skydiving is parachuting from an airplane for fun</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="Images/carousel2.jpg">
    <div class="carousel-caption">
    <h5 style="font-weight:bold;font-size:25px;">Bungee Jumping</h5>
    <p style="font-weight:bold;">Bungee jumping is an activity that involves jumping from a tall structure</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="Images/carousel3.jpg">
    <div class="carousel-caption">
    <h5 style="font-weight:bold;font-size:25px;">Parasailing</h5>
    <p style="font-weight:bold;">Parasailing is a recreational kiting activity where a person is towed behind a vehicle</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="Images/carousel4.jpg">
    <div class="carousel-caption">
    <h5 style="font-weight:bold;font-size:25px;">Mountaineering</h5>
    <p style="font-weight:bold;">Mountaineering or alpinism is the set of activities that involves traversing mountainous terrain</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="Images/carousel5.jpg">
    <div class="carousel-caption">
    <h5 style="font-weight:bold;font-size:25px;color:black;">River Rafting</h5>
    <p style="font-weight:bold;color:black;">Rafting gis an outdoor activity which use an inflatable raft to navigate body of water</p>
  </div>
  </div>    
  </div>
</div>
<div class="container-fluid">
<div class="row" style="background-color:#8F45E7;">
<div class="col" style="padding:10px;color:black;font-weight:bold;font-size:35px;"><i class="fa fa-buysellads" aria-hidden="true"></i> Adventures</div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<?php
$query='select id,name,image,place from activity limit 4';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n/2;$i++){
    $arr=mysqli_fetch_array($res);
?>
<div class="col-md-5">
<div class="row" style="box-shadow:0px 0px 10px grey;border-radius:10px;">
<div class="col-md-5">
<img src="Images/<?php echo $arr['image']; ?>" width="100%"/>
</div>
<div class="col-md-7" style="text-align:center;">
<div><a href="viewActivity.php?aid=<?php echo $arr['id']; ?>" class="btn btn-link" onmouseover="this.style.textDecoration='none';" style="font-size:25px;"><?php echo $arr['name']; ?></a></div>
<div style="font-weight:bold;font-size:18px;"><?php echo $arr['place'];  ?></div>
</div>
</div>
<br/><br/>
</div>
<div class="col-md-2"></div>
<?php
$arr=mysqli_fetch_array($res);
?>
<div class="col-md-5">
<div class="row" style="box-shadow:0px 0px 10px grey;border-radius:10px;">
<div class="col-md-5">
<img src="Images/<?php echo $arr['image']; ?>" width="100%"/>
</div>
<div class="col-md-7" style="text-align:center;">
<div><a href="viewActivity.php?aid=<?php echo $arr['id']; ?>" class="btn btn-link" onmouseover="this.style.textDecoration='none';" style="font-size:25px;"><?php echo $arr['name']; ?></a></div>
<div style="font-weight:bold;font-size:18px;"><?php echo $arr['place'];  ?></div>
</div>
</div>
<br/><br/>
</div>
<?php
}
?>
</div>
</div>
<div class="col-md-1"></div>
</div>
<br/>
<div class="row" style="background-color:#8F45E7;">
<div class="col" style="text-align:right;padding:10px;">
<a href="activity.php" onmouseover="this.style.textDecoration='none';" style="color:black;font-weight:bold;font-size:20px;">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
<?php
include('footer.php');
?>