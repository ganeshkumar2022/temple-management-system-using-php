<?php
include("../db.php");
$sql="delete from salary where salary_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_salary.php');</script>";
}
else
{
    echo "<script>alert('Error to delete salary');window.location.replace('manage_salary.php');</script>";
}
?>