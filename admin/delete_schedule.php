<?php
include("../db.php");
$sql="delete from schedule where schedule_id=".$_GET["id"];
if(mysqli_query($con,$sql))
{
    echo "<script>alert('delete schedule successfully');
    window.location.replace('manage_schedule.php');</script>";
}
else
{

    echo "<script>alert('Error to delete schedule');
    window.location.replace('manage_schedule.php');</script>";
}

?>