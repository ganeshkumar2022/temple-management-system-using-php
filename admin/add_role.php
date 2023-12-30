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
<h4><a class="text-decoration-none text-dark">Add role</a></h4>
<div class="row">
    <div class="col">
      <label for="country">Name</label>
      <input type="text" class="form-control state-bor" id="email" name="role_name" required>
    </div>
    <div class="col">
    <label for="sel1">Description:</label>
    <input type="text" class="form-control state-bor" id="email2" name="role_description" required>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <h5><u>Permissions</u></h5>
            <p class="text-danger font-weight-bold">( While Selecting any roles like seva,manage master,complaints you must require to
                select main roles named with Manage name )
            </p>
    </div>
    <div class="col">

    </div>
  </div>
  <div class="row">
    <div class="col">
        <ul class="list-unstyled">
            <li><input type="checkbox" value="Devotee" name="role_permissions[]"> Devotee</li>
            <li><input type="checkbox" value="Seva" name="role_permissions[]"> Seva</li>
            <li><input type="checkbox" value="Income" name="role_permissions[]"> Income</li>
            <li><input type="checkbox" value="Manage master" name="role_permissions[]"> Manage master</li>
        </ul>
    </div>
    <div class="col">
        <ul class="list-unstyled">
            <li><input type="checkbox" value="Pass" name="role_permissions[]"> Pass</li>
            <li><input type="checkbox" value="Complaints" name="role_permissions[]"> Complaints</li>
            <li><input type="checkbox" value="Reports" name="role_permissions[]"> Reports</li>
        </ul>
    </div>
  </div>


  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="add_role">Submit</button>
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