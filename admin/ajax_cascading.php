<?php
include("../db.php");
$sql6="select * from district where state_id=".$_GET["id"];
$result6=mysqli_query($con,$sql6);
if(mysqli_num_rows($result6)>0)
{
    while($row5=mysqli_fetch_assoc($result6))
    {
?>
<option value="<?=$row5['did']?>"><?=$row5["district_name"]?></option>
<?php
    }
}
else
{
?>
<option value="">None</option>
<?php
}
?>