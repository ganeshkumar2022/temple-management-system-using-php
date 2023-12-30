<?php
include("session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online temple management system</title>
    <meta name="description" content="we provide a best online temple management services in chennai,osure,mysore,delhi,mumbai and coimbatore">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <script src="../assets/bootstrap/jquery.slim.min.js"></script>
    <script src="../assets/bootstrap/popper.min.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>

     <!-- data table cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" type="text/css">
     <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
   
   

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="css/style.css" type="text/css">
<style>
.button-color
{
    background-color:rgb(74,89,109);
    border-radius:20px;
}
#ed-icon
{
    background-color:red;padding:8px 15px;color:white;border-radius:30px;
}
#del-icon
{
    background-color:rgb(132, 0, 255);padding:8px 15px;color:white;border-radius:30px;
}
</style>
</head>
<body class="dashboard-page">
<div>

<!-- left bar start -->
<?php
include("includes/leftbar.php");
?>
<!-- left bar end -->

<div style="width:80%;height:110vh;" class="float-right main-content">
<!-- header start -->
<?php
include("includes/header.php");
?>
<!-- header end -->

<!-- main content start --><!-- rgb(60,162,32) rgb(179,41,174) rgb(38,205,227) rgb(219,207,36) -->
<div class="container p-3">
<div class="card">
<div class="card-body">
<a href="add_festival_schedule.php" class="btn button-color text-white px-4 py-2">Add</a>
<div class="row mt-3">
    <div class="col-md-12">
       <!-- table start -->

       <table id="example" class="example3 table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Festival name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php
include("admin_db.php");
$obj=new festival();
$states=$obj->get_festival();
$i=1;
foreach($states as $state)
{
?>
<tr>
    <td><?=$i?></td>
    <td><?=$state["festival_name"]?></td>
    <td><?=$state["festival_date"]?></td>
    <td>
    <a href="edit_festival.php?id=<?=$state['festival_id']?>" id="ed-icon"><i class="fa-solid fa-pen-to-square"></i></a>
    <a href="delete_festival.php?id=<?=$state['festival_id']?>" id="del-icon"><i class="fa-solid fa-trash"></i></a>
    </td>
</tr>
<?php
$i++;
}
?>
        </tbody>
    </table>

       <!-- table end -->
    </div>
</div>
</div>
</div>
</div>
<!-- main content end -->


</div>
</div>
<script>
    //datatable call
    $(document).ready(function(){
        $('.example3').DataTable();
    });
</script>
</body>
</html>