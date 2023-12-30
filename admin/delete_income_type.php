<?php
include("../db.php");
$id=$_GET["id"];
$sql="delete from income_type where income_type_id=$id";
if(mysqli_query($con,$sql))
{
   echo "<script>window.location.replace('manage_income_type.php');</script>";
}
else
{
    echo "<script>alert('Error to delete income type');window.location.replace('manage_income_type.php');</script>"; 
}
?>