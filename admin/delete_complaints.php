<?php
include("../db.php");
$sql="delete from complaint where complaint_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_complaints.php');</script>";
}
else
{
    echo "<script>alert('Error to delete complaints');window.location.replace('manage_complaints.php');</script>";
}
?>