<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel | Online temple management system</title>
    <meta name="description" content="we provide a best online temple management services in chennai,osure,mysore,delhi,mumbai and coimbatore">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/jquery.slim.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>



    <!-- jquery -->
    <script src="assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style2.css">
<style>
.myhead
{
    color:#061f59;
}
.p-style
{
    font-size:18px;
}
.admin-page
{
    background-color:lightgray;
    height:100vh;
}
.admin-page input
{
    border-radius:20px;
}
.input-group-text
{
    border-top-right-radius:20px !important;
    border-bottom-right-radius:20px !important;
    border-left:none;
    background-color:white;
    cursor:pointer;
}
.input-group input[type="password"]
{
    border-right:none;
}
.main_logo
{
    height:70px;
    margin:0 auto;
    display:block;
}
.admin-card
{
    background-color:#24128f;
}
.admin-card label
{
    color:white;
    font-weight:bold;
}
.admin-card h4
{
    color:white
}
.form-control
{
    border-radius:20px;
}
input[type=submit]
{
    color:black;
    font-weight:bold;
}
</style>
</head>
<body class="admin-page">

<!-- admin login form start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card admin-card mt-5">
                <div class="card-body">
                    <div>
                        <img src="assets/images/main_logo.png" class="main_logo img-fluid">
                    </div>
                <h4 class="text-center myhead mt-3">Login</h4>
                <form action="" method="post" autocomplete="off">
                    <div class="form-group">
                    <label for="sel1">Admin/User:</label>
                    <select class="form-control" name="access" id="sel1">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
                    </div>
                    <label for="pwd">Password:</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control pwd" name="password" placeholder="Enter password" required>
                        <div class="input-group-append">
                        <span class="input-group-text password-check"><i class="fa-solid fa-eye-slash myeye"></i></span>
                        </div>
                    </div>
                    <input type="submit" class="btn bg-light btn-block my-4" value="Login" name="admin_login">
                    </form>
                    <br>
                </div>
            </div>
            <p class="text-center text-danger message font-weight-bold"></p>
        </div>
    </div>
</div>
<!-- admin login form end -->


<script>
$(document).ready(function(){
$(".password-check").click(function(){
if($(".pwd").attr("type")=="password")
{
$(".pwd").attr("type","text");
$(".myeye").removeClass("fa-eye-slash");
$(".myeye").addClass("fa-eye");
}
else
{
$(".pwd").attr("type","password");
$(".myeye").removeClass("fa-eye");
$(".myeye").addClass("fa-eye-slash");
}
});
});
</script>

<?php
if(isset($_POST["admin_login"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $access=$_POST["access"];
    include("db.php");
    
    if($access=="admin")
    {
        $sql="select * from admin where email='$email'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            $verify=password_verify($password,$row["password"]);
            if($verify)
            {
                $_SESSION["aid"]=$row["aid"];
                echo "<script>window.location.replace('admin/dashboard.php');</script>";
            }
            else
            {
                echo "<script>$('.message').text('Email or Password incorrect...');</script>";
            }
        }
        else
        {
            echo "<script>$('.message').text('Email or Password incorrect...');</script>";
        }
    }
    if($access=="user")
    {
        $sql="select * from user where email='$email' and password='$password'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            $_SESSION["uid"]=$row["user_id"];
            echo "<script>window.location.replace('admin/dashboard.php');</script>";
        }
        else
        {
            echo "<script>$('.message').text('Email or Password incorrect...');</script>";
        }
    }
    

}
?>
</body>
</html>