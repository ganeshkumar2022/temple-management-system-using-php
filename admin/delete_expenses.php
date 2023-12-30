<?php
$id=$_GET["id"];
include("../db.php");
$sql="delete from expense where ex_id=$id";
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_expenses.php');</script>";
}
else
{
    echo "<script>alert('Error to delete');window.location.replace('manage_expenses.php');</script>";  
}
?>