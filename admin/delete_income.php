<?php
include("../db.php");
$id=$_GET["id"];
$sql="delete from income where in_id=$id";
if(mysqli_query($con,$sql))
{
   echo "<script>window.location.replace('manage_income.php');</script>";
}
else
{
    echo "<script>alert('Error to delete income');window.location.replace('manage_income.php');</script>"; 
}
?>