<?php
include("../db.php");
$sql="delete from pass where pass_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_pass.php');</script>";
}
else
{
    echo "<script>alert('Error to delete pass');window.location.replace('manage_pass.php');</script>";
}
?>