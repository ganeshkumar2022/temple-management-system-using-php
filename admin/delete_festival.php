<?php
include("../db.php");
$sql="delete from festival where festival_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_festival_schedule.php');</script>";
}
else
{
    echo "<script>alert('Error to delete festival');window.location.replace('manage_festival_schedule.php');</script>";
}
?>