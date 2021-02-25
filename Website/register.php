<?php
include('header.php');
include('navbar.php');
?>
<div class="container-fluid" style="padding:30px;background-image:url('Images/background1.jpg');background-size:cover;">
<br/><br/><br/><br/><br/>
<form method="post" action="registration.php" onsubmit="return Validation()" enctype="multipart/form-data" style="text-align:center;">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row" style="border:2px solid #8F45E7;">
<div class="col-md-6" style="padding:30px;">
<div style="font-size:35px;text-align:center;font-weight:bold;color:#8F45E7;">Register Here</div><br/>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">N</span>
  </div>
  <input type="text" class="form-control" placeholder="Full Name" name="name" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">A</span>
  </div>
  <input type="number" class="form-control" placeholder="Age" name="age" min="12" max="80" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">G</span>
  </div>
  <select class="form-control" name="gender" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">M</span>
  </div>
  <input type="number" class="form-control" placeholder="Mobile Number" name="mobile" min="6000000000" max="9999999999" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">E</span>
  </div>
  <input type="email" class="form-control" placeholder="Email" name="email" required/>
</div>
</div>
<div class="col-md-6" style="background-color:#8F45E7;padding:30px;text-align:center;">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight:bold;color:#8F45E7;">Profile</span>
  </div>
  <input type="file" class="form-control" name="profile" required/>
</div>
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
  <input type="password" class="form-control" id="pass" placeholder="Password" name="password" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="color:#8F45E7;"></i></span>
  </div>
  <input type="password" class="form-control" id="cpass" placeholder="Confirm Password" name="cpassword" required/>
</div>
<input type="checkbox" id="passes">&nbsp;&nbsp;&nbsp;<label for="passes" style="font-weight:bold;"> Show Passwords</label><br/><br/>
<input type="checkbox" id="tnc">&nbsp;&nbsp;&nbsp;<label for="tnc" style="font-weight:bold;"> I agree to all terms and conditions.</label><br/><br/>
<button type="button" id="subbtn" class="btn btn-secondary" style="background-color:black;opacity:0.4;">Register</button>
</div>
</div>
</div>
<div class="col-md-2"></div>
</div>
<br/><br/><br/><br/><br/>
</form>
</div>
<script>
function Validation(){
  val1=document.getElementById('pass').value;
  val2=document.getElementById('cpass').value;
  if(val1==val2)
    return true;
  alert('Passwords do not match');
  return false;
}
$(document).ready(function(){
  $('#tnc').change(function(){
    if(this.checked){
      $('#subbtn').css('opacity','1.0');
      $('#subbtn').attr('type','submit');
    }
    else{
      $('#subbtn').css('opacity','0.4');
      $('#subbtn').attr('type','button');
    }
  });
  $('#passes').change(function(){
    if(this.checked){
      $('#pass').attr('type','text');
      $('#cpass').attr('type','text');
    }
    else{
      $('#pass').attr('type','password');
      $('#cpass').attr('type','password');
    }
  });
  
});
</script>
<?php
include('footer.php');
?>