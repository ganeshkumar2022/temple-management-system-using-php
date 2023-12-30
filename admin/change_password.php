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
<h4><a class="text-decoration-none text-dark">Change password</a></h4>
  <div class="row">
  <div class="col">
      <label for="state">New password</label>
      <input type="password" class="form-control state-bor" maxlength="25"  name="password" required id="state">
    </div>
    <div class="col"></div>
   </div>
  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="updatep">Submit</button>
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
<?php
if(isset($_POST["updatep"]))
{
include("../db.php");
$password=$_POST["password"];
if(isset($_SESSION["aid"]))
{
$password=password_hash($password,PASSWORD_DEFAULT);
$sql="update admin set password='$password' where aid=".$_SESSION["aid"];
}
if(isset($_SESSION["uid"]))
{
$sql="update user set password='$password' where user_id=".$_SESSION["uid"];
}
if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "password updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Password"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}
?>
</body>
</html>