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
#select-state
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
<h3><a href="manage_districts.php" class="text-decoration-none text-dark">Districts</a></h3>
<div class="row">
    <div class="col">
      <label for="country">Country Name</label>
      <input type="text" class="form-control state-bor" id="email" value="India" readonly name="email">
    </div>
    <div class="col">
    <label for="sel1">State:</label>
    <select class="form-control" id="select-state" name="state_id" required>

        <option value="">None</option>
<?php
include("admin_db.php");
$obj=new state();
$states=$obj->get_state();
foreach($states as $state)
{
    ?>
    <option value="<?=$state['sid']?>"><?=$state['state_name']?></option>
    <?php
}
?>
    </select>
    </div>
  </div>
  <div class="row">
  <div class="col">
      <label for="state">District</label>
      <input type="text" class="form-control state-bor" maxlength="25"  name="district" required id="state">
    </div>
    <div class="col"></div>
   </div>
  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="add_district">Submit</button>
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