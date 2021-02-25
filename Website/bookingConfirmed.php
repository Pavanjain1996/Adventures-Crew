<?php
include('dbconnection.php');
include('header.php');
include('navbar.php');
if(isset($_SESSION['username'])){
?>
<div class="container-fluid" style="padding:40px;background-image:url('Images/background1.jpg');background-size:cover;text-align:center;">
<div class="row">
<div class="col">
<div><img src="Images/congrats.jpg" width="100%"/></div><br/>
<div style="font-size:25px;font-family:'Courgette';">Congratulations <i class="fa fa-smile-o" style="font-weight:bold;"></i>, Your booking has been confirmed by our dealer. You will recieve your pass via mail.<br/><br/>Happy Adventure to you and Best wishes for your adventure.<br/><br/>For more details visit our website and look for the details.</div>
</div>
</div>
</div>
<?php
include('footer.php');
}
else{
    header('location:login.php');
}
?>