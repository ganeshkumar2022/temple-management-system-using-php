<?php
include("../db.php");
$sql="delete from district where did=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_districts.php');</script>";
}
else
{
    echo "<script>alert('Error to delete districts');window.location.replace('manage_districts.php');</script>";
}
?>