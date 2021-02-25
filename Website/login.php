<?php
include('header.php');
include('navbar.php');
?>
<div class="container-fluid" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
<br/><br/><br/><br/><br/>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row" style="border:2px solid #8F45E7;">
<div class="col-md-6" style="padding:30px;">
<form method="post" action="checkLogin.php" style="text-align:center;">
<div style="font-size:35px;text-align:center;font-weight:bold;color:#8F45E7;">Login Here</div><br/>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" style="color:#8F45E7;"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" name="username" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="color:#8F45E7;"></i></span>
  </div>
  <input type="password" class="form-control" placeholder="Password" name="password" required/>
</div>
<button type="submit" class="btn btn-primary" style="background-color:#8F45E7;border:none;">Login</button> 
</form>
</div>
<div class="col-md-6" style="background-color:#8F45E7;padding:30px;text-align:center;">
<div style="font-size:35px;text-align:center;font-weight:bold;">Register Here</div><br/>
<div style="font-size:25px;text-align:center;font-weight:bold;">New User ?</div><br/>
<div style="font-size:25px;text-align:center;font-weight:bold;">Yet to Register !</div><br/>
<a href="register.php" class="btn btn-link" style="font-sixe:20px;color:white;font-size:20px;" onmouseover="this.style.textDecoration='none';">Click here</a>
</div>
</div>
</div>
<div class="col-md-2"></div>
</div>
<br/><br/><br/><br/><br/>
</div>
<?php
include('footer.php');
?>