<?php
include("../db.php");
$id=$_GET["id"];
$sql="delete from staff where id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_staff.php');</script>";
}
else
{
    echo "<script>alert('Error to delete staff');window.location.replace('manage_staff.php');</script>";
}
?>