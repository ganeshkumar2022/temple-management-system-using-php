<?php
include("../db.php");
$sql="delete from taluka where tid=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_taluka.php');</script>";
}
else
{
    echo "<script>alert('Error to delete taluka');window.location.replace('manage_taluka.php');</script>";
}
?>