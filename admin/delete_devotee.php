<?php
include("../db.php");
$sql="delete from devotee where devotee_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_devotee.php');</script>";
}
else
{
    echo "<script>alert('Error to delete devotee');window.location.replace('manage_devotee.php');</script>";
}
?>