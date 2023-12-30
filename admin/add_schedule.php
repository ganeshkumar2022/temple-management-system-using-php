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
.state-bor,#sel1,#sel2
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
<form action="" method="post" autocomplete="off">
<h3><a href="manage_schedule.php" class="text-decoration-none text-dark">Schedule of Seva</a></h3>
<div class="row">
    <div class="col">
      <label for="country">Devotee Name</label>
      <select class="form-control" id="sel1" name="devotee_name" required>
        <option value="">Choose Devotee name</option>
<?php
include("../db.php");
$sql3="select * from devotee";
$result3=mysqli_query($con,$sql3);
if(mysqli_num_rows($result3)>0)
{
  while($row3=mysqli_fetch_assoc($result3))
  {
    ?>
    <option value="<?=$row3['devotee_id']?>"><?=$row3["devotee_name"]?></option>
    <?php
  }
}
?>
      </select>
    </div>
    <div class="col">
      <label for="state">Seva Name</label>
      <select class="form-control" id="sel2" name="seva_name" required>
        <option value="">Choose Seva name</option>
<?php
include("../db.php");
$sql4="select * from seva";
$result4=mysqli_query($con,$sql4);
if(mysqli_num_rows($result4)>0)
{
  while($row4=mysqli_fetch_assoc($result4))
  {
    ?>
    <option value="<?=$row4['seva_id']?>"><?=$row4["seva_name"]?></option>
    <?php
  }
}
?>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="country">Date</label>
      <input type="date" class="form-control state-bor" id="email" required name="rdate">
    </div>
    <div class="col">
    </div>
  </div>
  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="add_schedule">Submit</button>
  <p class="text-danger text-center" id="err-state"></p>
</div>
</form>
</div>
</div>
<!-- main content end -->


</div>
</div>

<?php
//controller file
include("admin_db.php");
?>
</body>
</html>