<?php
$id=$_GET["id"];
include("db.php");
$sql="select * from schedule inner join seva on schedule.seva_id=seva.seva_id inner join devotee
 on schedule.devotee_id=devotee.devotee_id where schedule.seva_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo $row["charge"].",".$row["devotee_name"];
?>