<?php
include("session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online temple management system</title>
    <meta name="description" content="we provide a best online temple management services in chennai,osure,mysore,delhi,mumbai and coimbatore">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <script src="../assets/bootstrap/jquery.slim.min.js"></script>
    <script src="../assets/bootstrap/popper.min.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>



    <!-- jquery -->
    <script src="../assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
<style>
.card:hover .overlay
{
opacity:1;
}
.card
{
    position:relative;
}
.overlay
{
    position:absolute;
    opacity:0;
    transition:.8s ease;
}
</style>
</head>
<body class="dashboard-page">
<div>

<!-- left bar start -->
<?php
include("includes/leftbar.php");
?>
<!-- left bar end -->

<div style="width:80%;height:100vh;" class="float-right main-content">
<!-- header start -->
<?php
include("includes/header.php");
?>
<!-- header end -->
<?php
include("../db.php");
$sql="select count(*) as total from devotee";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$sql2="select count(*) as total from complaint";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_assoc($result2);

$sql3="select sum(charge) as total from income";
$result3=mysqli_query($con,$sql3);
$row3=mysqli_fetch_assoc($result3);

$sql4="select sum(amount) as total from expense";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_assoc($result4);

?>
<!-- main content start --><!-- rgb(60,162,32) rgb(179,41,174) rgb(38,205,227) rgb(219,207,36) -->
<div class="container p-3">
<div class="row">
<div class="col-md-6 col-sm-6 mt-2">
    <div class="card">
    <div class="overlay bg-info"><h4 class="text-white text-center" style="margin-top:35px;">Devotees</h4></div>
        <div class="card-body">
    <table>
        <tr>
            <td>
            <i class="fa-solid fa-landmark-dome dash-icon dash-icon1" style="color: #3ca220;"></i>
            </td>
            <td>
            <p>Total Devotees<br><b><?=$row["total"]?></b></p>
            </td>
        </tr>
</table>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 mt-2">
<div class="card">
<div class="overlay bg-warning"><h4 class="text-white text-center" style="margin-top:35px;">Donation</h4></div>
        <div class="card-body">
<table> 
    <tr>
        <td>
            <i class="fa-solid fa-hand-holding-dollar dash-icon dash-icon2" style="color: #26cde3;"></i>
            </td>
            <td>
                <p>Total Dontaion<br><b><?=$row3["total"]?></b></p>
            </td>
        </tr>
</table>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 mt-4">
<div class="card">
<div class="overlay bg-success"><h4 class="text-white text-center" style="margin-top:35px;">Expense</h4></div>
        <div class="card-body">  
<table>
        <tr>
            <td>
            <i class="fa-solid fa-money-bill-1-wave dash-icon dash-icon3" style="color: #b329ae;"></i>
            </td>
            <td>
            <p>Total Expenses<br><b><?=$row4["total"]?></b></p>
            </td>
        </tr>
</table>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 mt-4">
<div class="card">
<div class="overlay bg-danger"><h4 class="text-white text-center" style="margin-top:35px;">Complaints</h4></div>
    
        <div class="card-body">  
<table>
        <tr>
            <td>
            <i class="fa-solid fa-triangle-exclamation dash-icon dash-icon4" style="color: #dbcf24;"></i>
            </td>
            <td>
               <p>Total Complaints<br><b><?=$row2["total"]?></b></p>
            </td>
        </tr>
    </table>
</div>
</div>
</div>
</div>
<!-- main content end -->


</div>
</div>

<script>
    $(document).ready(function(){
        var height=$(".card").height();
        var width=$(".card").width();
        $(".overlay").css("height",height);
        $(".overlay").css("width",width);
    });
</script>

</body>
</html>