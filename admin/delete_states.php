<?php
include("../db.php");
$sql="delete from state where sid=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.replace('manage_states.php');</script>";
}
else
{
    echo "<script>alert('Error to delete state');window.location.replace('manage_states.php');</script>";
}
?>