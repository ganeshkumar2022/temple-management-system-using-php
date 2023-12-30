<?php
include("../db.php");
$sql="delete from seva where seva_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_seva.php');</script>";
}
else
{
    echo "<script>alert('Error to delete seva');window.location.replace('manage_seva.php');</script>";
}
?>