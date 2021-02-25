<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
?>
<div class="container-fluid" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10"> 
<div class="row">
<div class="col">
<div style="font-family:'Monoton';font-size:50px;text-align:center;font-weight:bold;">ADVENTURES</div>
<div style="font-size:20px;letter-spacing:3px;text-align:center;font-weight:bold;">Delight's you the most</div>
</div>
</div>
<br/><br/>
<div class="row">
<?php
$query='select id,name,image,place from activity';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n/2;$i++){
    $arr=mysqli_fetch_array($res);
?>
<div class="col-md-5">
<div class="row" style="box-shadow:0px 0px 10px grey;border-radius:10px;background-color:#EBE9E9;">
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
<div class="row" style="box-shadow:0px 0px 10px grey;border-radius:10px;background-color:#EBE9E9;">
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
</div>
<?php
include('footer.php');
?>