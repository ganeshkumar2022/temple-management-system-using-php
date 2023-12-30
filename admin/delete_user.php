<?php
include("../db.php");
$sql="delete from user where user_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_user.php');</script>";
}
else
{
    echo "<script>alert('Error to delete user');window.location.replace('manage_user.php');</script>";
}
?>