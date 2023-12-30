<?php
include("session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include("admin_db.php");
$incom=new income();
$income=$incom->get_income_byId($_GET["id"]);
?>
<div class="row mt-4">
<table width="100%">
    <tr>
        <td style="width:45%;">
        <img src="../assets/images/main_logo.png" class="float-left" style="height:80px;">
        </td>
        <td>
        <h3 class="font-weight-bold my-4">Receipt</h3>
        </td>
    </tr>
</table>
</div>
<br>
<br>
<p><?=$income["receipt_no"]?><br>Date :<?=$income["rdate"]?></p>
<table class="table table-bordered table-sm">
    <tr>
        <th>Name</th>
        <th>Seva name</th>
        <th>Transaction type</th>
        <th>Rs</th>
    </tr>
    <tr>
        <td><?=$income["devotee_name"]?></td>
        <td><?=$income["seva_name"]?></td>
        <td><?=$income["payment_type"]?></td>
        <td><?=$income["charge"]?>&#8377;</td>
    </tr>
    <tr>
        <th colspan="3">Total:</th>
        <td><?=$income["charge"]?>&#8377;</td>
    </tr>
</table>
<div>
    <button  onclick="print_preview(this)" class="ml-2 btn btn-success">Print</button>
</div>

<script>
    function print_preview(a)
    {
        a.style.display="none";
        window.print();
        window.location.replace(window.location.href);
    }
</script>

</body>
</html>