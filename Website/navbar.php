<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#8F45E7;">
    <a class="navbar-brand" href="index.php">
        <div style="font-size:35px;font-family: 'Bree Serif', serif;" id="link1">Adventures Crew</div>
        <div style="font-size:15px;font-weight:bold;display:none;" id="link1display">Adventures Crew</div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <div style="font-size:25px;font-family:'Bree Serif';" id="link2">Home</div>
                    <div style="font-size:15px;font-weight:bold;display:none;" id="link2display">Home</div>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
<?php
if(isset($_SESSION['username'])){
?>
<li class="nav-item dropdown">
<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">
<div style="font-size:25px;font-family:'Bree Serif';" id="link3"><?php echo $_SESSION['username']; ?></div>
<div style="font-size:15px;font-weight:bold;display:none;" id="link3display"><?php echo $_SESSION['username']; ?></div> 
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="myBookings.php"><i class="fa fa-suitcase" aria-hidden="true"></i> My Bookings</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
</li>
<?php
}
else{
?>
<li class="nav-item active">
<a class="nav-link" href="login.php">
<div style="font-size:25px;font-family:'Bree Serif';" id="link4">Login</div>
<div style="font-size:15px;font-weight:bold;display:none;" id="link4display">Login</div>
<span class="sr-only">(current)</span></a>
</li>
<?php
}
?>
<li class="nav-item active">
<a class="nav-link" href="about.php">
<div style="font-size:25px;font-family:'Bree Serif';" id="link5">About</div>
<div style="font-size:15px;font-weight:bold;display:none;" id="link5display">About</div>
<span class="sr-only">(current)</span></a>
</li>
</ul>
</div>
</nav>
<script>
$(document).ready(function(){
    $('#link1').mouseover(function(){
        $('#link1display').css('display','block');
    });
    $('#link1').mouseout(function(){
        $('#link1display').css('display','none');
    });
    $('#link2').mouseover(function(){
        $('#link2display').css('display','block');
    });
    $('#link2').mouseout(function(){
        $('#link2display').css('display','none');
    });
    $('#link3').mouseover(function(){
        $('#link3display').css('display','block');
    });
    $('#link3').mouseout(function(){
        $('#link3display').css('display','none');
    });
    $('#link4').mouseover(function(){
        $('#link4display').css('display','block');
    });
    $('#link4').mouseout(function(){
        $('#link4display').css('display','none');
    });
    $('#link5').mouseover(function(){
        $('#link5display').css('display','block');
    });
    $('#link5').mouseout(function(){
        $('#link5display').css('display','none');
    });
});
</script>