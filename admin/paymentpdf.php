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
$incom=new pass();
$income=$incom->get_pass_byId($_GET["id"]);

?>
<div class="container-fluid">
<div class="row mt-4">
<table width="100%">
    <tr>
        <td style="width:40%;">
        <img src="../assets/images/main_logo.png" class="float-left" style="height:80px;">
        </td>
        <td>
        <h3 class="font-weight-bold my-4">kali Temple pass</h3>
        </td>
    </tr>
</table>
</div>
<br>

<img src="qr.jpg">
<div class="row">
    <div class="col-md-12">
        <table width="100%;">
            <tr>
                <td style="width:45%;">
                <p>
Transaction Id :- <?=$income["payment_id"]?><br>
Seva name :- <?=$income["seva_name"]?><br>
Date :- <?=$income["paid_time"]?><br>
Devotees name :- <?=$income["devotee_name"]?><br>
Proof type :- <?=$income["proof_type"]?><br>
Proof no :- <?=$income["proof_no"]?><br>
</p>
                </td>
                <td>
    <p>
        <b>Mahakali temple</b><br>
        <b>Rajendar sangalkinatha street</b><br>
        <b>templekikali@gmail.com</b><br>
        <b>+91 789788112345</b><br>
    </p>
                </td>
            </tr>
        </table>



    </div>
</div>

<table class="table table-bordered table-sm">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>ID type</th>
        <th>Id no</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td><?=$income["name"]?></td>
        <td><?=$income["age"]?></td>
        <td><?=$income["proof_type"]?></td>
        <td><?=$income["proof_no"]?>&#8377;</td>
        <td><?=$income["price"]?>&#8377;</td>
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
</div>
</body>
</html>