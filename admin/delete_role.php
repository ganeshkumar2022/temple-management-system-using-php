<?php
include("../db.php");
$sql="delete from role where role_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_role.php');</script>";
}
else
{
    echo "<script>alert('Error to delete role');window.location.replace('manage_role.php');</script>";
}
?>