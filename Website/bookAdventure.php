<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
if(isset($_SESSION['username'])){
$query='select name,image,place from activity where id='.$_SESSION['aid'];
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<script>
function addFields(){
    var n=Number(document.getElementById('totalperson').value);
    if(n>10){
        alert('Can not add more than 10 person');
        n=10;
        document.getElementById('totalperson').value=10;
    }
    if(n<1){
        alert('Number of persons can not be less than one');
        n=1;
        document.getElementById('totalperson').value=1;
    }
    var str="";
    var i;
    for(i=1;i<=n;i++){
        str=str+'<div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1" style="color:#8F45E7;font-weight:bold;">P'+i+'</span></div><input type="text" class="form-control" placeholder="Name" name="person'+i+'" required/></div>';
    }
    document.getElementById('putFields').innerHTML=str;
}
</script>
<div class="container-fluid" style="padding:40px;background-image:url('Images/background1.jpg');background-size:cover;font-family:'Courgette';letter-spacing:1px;">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5" style="text-align:center;">
<div style="font-size:25px;color:red;"><?php echo $arr['name']; ?></div><br/>
<img src="Images/<?php echo $arr['image']; ?>" width="100%"/><br/><br/>
<div style="font-size:25px;font-weight:bold;"><?php echo $arr['place']; ?></div>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<form method="post" action="booking.php">
<div style="font-size:35px;text-align:center;font-weight:bold;color:#8F45E7;">Enter Your Booking Details</div><br/>
<label>Date of adventure</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="color:#8F45E7;font-weight:bold;"><i class="fa fa-calendar"></i></span>
  </div>
  <input type="date" class="form-control" name="date" required/>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="color:#8F45E7;font-weight:bold;">N</span>
  </div>
  <input type="number" class="form-control" placeholder="Number of person's" name="totalperson" min="1" max="10" onchange="addFields()" id="totalperson" required/>
</div>
<div id="putFields">
  
</div>
<button type="submit" class="btn btn-primary" style="background-color:#8F45E7;border:none;">Book Tickets</button>
</form>
</div>
<div class="col-md-1"></div>
</div>
</div>
<?php
include('footer.php');
}
else{
    header('location:login.php');
}
?>