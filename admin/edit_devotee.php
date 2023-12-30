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
#select-state,#select-district,#select-taluka,#select-ds
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

$obj5=new devotee();
$dev=$obj5->getDevoteebyId($_GET["id"]);
?>
<form action="" method="post" autocomplete="off">
<h3><a href="manage_devotee.php" class="text-decoration-none text-dark">Devotees</a></h3>
<div class="row">
    <div class="col">
      <label for="country">Devotees Name</label>
      <input type="text" class="form-control state-bor" id="email" value="<?=$dev['devotee_name']?>" name="devotee_name" required>
    </div>
    <div class="col">
      <label for="country">Date</label>
      <input type="date" class="form-control state-bor" id="email" value="<?=$dev['bdate']?>" name="bdate" required>
    </div>
</div>
<div class="row mt-4">
    <div class="col">
      <label for="country">Phone no</label>
      <input type="text" class="form-control state-bor" id="email" maxlength="10" value="<?=$dev['phone']?>" name="phone" required>
    </div>
    <div class="col">
      <label for="country">Religion</label>
      <select class="form-control state-bor" name="religion" required>
        <option value="">Select Religion</option>
        <option value="Hindu" <?php if($dev["religion"]=="Hindu") { echo "selected"; } ?> >Hinduism</option>
        <option value="Christian" <?php if($dev["religion"]=="Christian") { echo "selected"; } ?>>Christianity</option>
        <option value="Muslim" <?php if($dev["religion"]=="Muslim") { echo "selected"; } ?>>Islam</option>
      </select>
    </div>
</div>
<div class="row mt-4">
    <div class="col">
      <label for="country">Country Name</label>
      <input type="text" class="form-control state-bor" id="email" value="India" readonly name="email">
    </div>
    <div class="col">
    <label for="sel1">State:</label>
    <select class="form-control" id="select-state" name="state_id" required>

        <option value="">None</option>
<?php
foreach($states as $state)
{
    ?>
    <option value="<?=$state['sid']?>" <?php if($dev["state_id"]==$state["sid"]) { echo "selected"; } ?> ><?=$state['state_name']?></option>
    <?php
}
?>
    </select>
    </div>
  </div>
  <div class="row mt-4">
  <div class="col">
  <label for="sel1">District:</label>
    <select class="form-control" id="select-district" name="district_id" required>
    <option value="<?=$dev['did']?>"><?=$dev['district_name']?></option>
    </select>
    </div>
    <div class="col">
       <label for="state">Taluka</label>
       <select class="form-control" id="select-taluka"  name="taluka_id" required>
        <option value="<?=$dev['tid']?>"><?=$dev['taluka_name']?></option>
    </select>
    </div>
   </div>

   <div class="row mt-4">
  <div class="col">
  <label for="sel1">Status:</label>
    <select class="form-control" id="select-ds" name="status" required>
        <option value="active" <?php if($dev["status"]=="active") { echo "selected"; } ?>>Active</option>
        <option value="inactive" <?php if($dev["status"]=="inactive") { echo "selected"; } ?>>Inactive</option>
    </select>
    </div>
    <div class="col">
       
    </div>
   </div>

  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="edit_devotee">Submit</button>
  <p class="text-danger text-center" id="err-state"></p>
</div>
</form>
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