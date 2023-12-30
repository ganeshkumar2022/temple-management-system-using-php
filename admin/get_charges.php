<?php
$id=$_GET["id"];
include("../db.php");
$sql="select * from seva where seva_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo $row["charge"];
?>