<?php
session_start();

if(isset($_SESSION["aid"]) || isset($_SESSION["uid"]))
{

}
else
{
    echo "<script>window.location.replace('../admin.php');</script>";
}
?>