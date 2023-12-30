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

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery -->
    <script src="../assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
<style>
.button-color
{
    background-color:rgb(74,89,109);
    border-radius:20px;
}
.state-bor
{
    border-radius:40px;
}
#select-state,#select-district,#select-taluka
{
    border-radius:40px;
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

<!-- main content start --><!-- rgb(60,162,32) rgb(179,41,174) rgb(38,205,227) rgb(219,207,36) -->
<div class="container p-3">
<div class="card">
    <div class="card-body">
<?php
include("admin_db.php");
$obj=new state();
$states=$obj->get_state();
?>
<form action="" method="post" autocomplete="off">
<h4><a class="text-decoration-none text-dark">Devotee reports</a></h4>
<div class="row">
    <div class="col">
      <label for="country">From date</label>
      <input type="date" class="form-control state-bor" id="email" name="from_date" required>
    </div>
    <div class="col">
      <label for="country">To Date</label>
      <input type="date" class="form-control state-bor" id="email" name="to_date" required>
    </div>
</div>



  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="devotee_reports">Search</button>
  <p class="text-danger text-center" id="err-state"></p>
</div>
</form>

<!-- table content -->
<div class="container">
<div style="height:200px;">
<?php
if(isset($_POST["devotee_reports"]))
{
    $from_date=$_POST["from_date"];
    $to_date=$_POST["to_date"];
    include("../db.php");
    $sql="select * from devotee where bdate between '$from_date' and '$to_date'";
    $result=mysqli_query($con,$sql);
    ?>
    <table class="table table-bordered table-sm">
        <tr>
            <th>S.no</th>
            <th>Devotee name</th>
            <th>Date</th>
        </tr>
    <?php
    if(mysqli_num_rows($result)>0)
    {
        $i=1;
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row["devotee_name"]?></td>
                <td><?=$row["bdate"]?></td>
            </tr>
            <?php
            $i++;
        }
    }
    else
    {
        echo "<tr><td colspan='3'>No records found</td></tr>";
    }
    echo "</table>";

}
?>
</div>
</div>
<!-- table content -->
</div>
</div>
<!-- main content end -->

<script>
$(document).ready(function(){
$("#select-state").change(function(){
var a=$(this).val();
$("#select-district").load("ajax_cascading.php?id="+a);
});
$("#select-district").change(function(){
var a=$(this).val();
var b=$("#select-state").val();
$("#select-taluka").load("ajax_cascading2.php?did="+a+"&&sid="+b);
});
});
</script>
</div>
</div>


</body>
</html>