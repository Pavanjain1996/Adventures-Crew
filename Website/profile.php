<?php
include('header.php');
include('navbar.php');
include('dbconnection.php');
if(isset($_SESSION['username'])){
$query='select * from users where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<div class="container-fluid" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
<br/><br/><br/>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row" style="border:2px solid #8F45E7;">
<div class="col-md-6" style="padding:30px;">
<img src="Profiles/<?php echo $arr['profile']; ?>" width="100%" style="border-radius:50%";><br/><br/>
<a href="deleteProfile.php" class="btn btn-primary" style="width:100%;">Delete your profile</a>
</div>
<div class="col-md-6" style="background-color:#8F45E7;padding:30px;text-align:center;">
<div style="font-size:20px;color:white;">
<hr style="height:3px;background-color:white;">
Name : <?php echo $arr['name']; ?>
<hr style="height:3px;background-color:white;">
Age : <?php echo $arr['age']; ?>
<hr style="height:3px;background-color:white;">
Gender : <?php echo $arr['gender']; ?>
<hr style="height:3px;background-color:white;">
Mobile : <?php echo $arr['mobile']; ?>
<hr style="height:3px;background-color:white;">
Email : <?php echo $arr['email']; ?>
<hr style="height:3px;background-color:white;">
Username : <?php echo $arr['username']; ?>
<hr style="height:3px;background-color:white;">
<form method="post" action="changeContact.php">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" style="width:100%;">Change Contact Details</button>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white;background-color:#8F45E7;">
        <h5 class="modal-title" id="exampleModalLongTitle1">Change Contact Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">M</span>
  </div>
  <input type="number" class="form-control" placeholder="Mobile Number" name="mobile" min="6000000000" max="9999999999" value="<?php echo $arr['mobile']; ?>" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">E</span>
  </div>
  <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $arr['email']; ?>" required/>
</div>
      </div>
      <div class="modal-footer" style="color:white;background-color:#8F45E7;">
        <button type="submit" class="btn btn-primary">Edit Details</button>
      </div>
    </div>
  </div>
</div>
</form>
<form method="post" action="changePassword.php">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2" style="width:100%;">Change Password</button>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white;background-color:#8F45E7;">
        <h5 class="modal-title" id="exampleModalLongTitle2">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="color:#8F45E7;"></i></span>
  </div>
  <input type="password" class="form-control" placeholder="Enter new password" name="password" required/>
</div>
      </div>
      <div class="modal-footer" style="color:white;background-color:#8F45E7;">
        <button type="submit" class="btn btn-primary">Change</button>
      </div>
    </div>
  </div>
</div>
</form>
<form method="post" action="changeProfile.php" enctype="multipart/form-data">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3" style="width:100%;">Change Profile Picture</button>
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white;background-color:#8F45E7;">
        <h5 class="modal-title" id="exampleModalLongTitle3">Change Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">Profile</span>
  </div>
  <input type="file" class="form-control" name="profile" required/>
</div>
      </div>
      <div class="modal-footer" style="color:white;background-color:#8F45E7;">
        <button type="submit" class="btn btn-primary">Change Picture</button>
      </div>
    </div>
  </div>
</div>
</form>
<hr style="height:3px;background-color:white;">

</div>
</div>
</div>
</div>
<div class="col-md-2"></div>
</div>
<br/><br/><br/>
</div>
<?php
include('footer.php');
}
else{
    header('location:login.php');
}
?>