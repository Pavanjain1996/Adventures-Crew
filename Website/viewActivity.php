<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
$aid=$_GET['aid'];
$_SESSION['aid']=$aid;
$query='select * from activity where id='.$aid;
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<div class="container-fluid" style="padding:40px;background-image:url('Images/background1.jpg');background-size:cover;font-family:'Courgette';letter-spacing:1px;">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="Images/<?php echo $arr['image']; ?>" width="100%"/>
</div>
<div class="col-md-5">
<div style="font-size:25px;color:red;"><?php echo $arr['name']; ?></div><br/>
<div style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['about']; ?></div>
</div>
<div class="col-md-1"></div>
</div>
<br/>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">
<span style="font-size:25px;color:red;">Dealer : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['dealer']; ?></span><br/>
<span style="font-size:25px;color:red;">Price : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;">Rs. <?php echo $arr['price']; ?>/- Per Person</span><br/>
<span style="font-size:25px;color:red;">Place : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['place']; ?></span><br/>
</div>
<div class="col-md-4">
<span style="font-size:25px;color:red;">Address : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['address']; ?></span><br/>
<span style="font-size:25px;color:red;">Contact No. : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['mobile']; ?></span><br/>
<span style="font-size:25px;color:red;">Email Id : </span>
<span style="font-size:18px;text-align:justify;font-weight:bold;"><?php echo $arr['email']; ?></span><br/>
</div>
<div class="col-md-2"></div>
</div>
<br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="bookAdventure.php" class="btn btn-success" style="width:100%;">Book your Adventure</a>
</div>
<div class="col-md-1"></div>
</div>
</div>
<?php
include('footer.php');
?>