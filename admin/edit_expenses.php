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

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery -->
    <script src="../assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
<style>
.button-color
{
    background-color:rgb(74,89,109);
    border-radius:20px;
}
.state-bor
{
    border-radius:40px;
}
#select-state,#select-district,#select-taluka
{
    border-radius:40px;
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

<div style="width:80%;height:100vh;" class="float-right main-content">
<!-- header start -->
<?php
include("includes/header.php");
?>
<!-- header end -->

<!-- main content start --><!-- rgb(60,162,32) rgb(179,41,174) rgb(38,205,227) rgb(219,207,36) -->
<div class="container p-3">
<div class="card">
    <div class="card-body">
<?php
include("admin_db.php");
$obj=new expense();
$expense=$obj->getId($_GET["id"]);
?>
<form action="" method="post" autocomplete="off">
<h4><a href="manage_expenses.php" class="text-decoration-none text-dark">Expense</a></h4>
<div class="row">
    <div class="col">
      <label for="country">Expense type name</label>
      <input type="text" class="form-control state-bor" id="email" value="<?=$expense['expense_type_name']?>" name="expense_type_name" required>
    </div>
    <div class="col">
      <label for="country">Date</label>
      <input type="date" class="form-control state-bor" id="email" value="<?=$expense['edate']?>" name="edate" required>
    </div>
</div>



<div class="row mt-4"> 
    <div class="col">
      <label for="country">Transaction type</label>
      <select class="form-control state-bor" name="transaction_type" required>
        <option value="">Choose payment type</option>
        <option value="Cash" <?php if($expense['transaction_type']=="Cash") { echo "selected"; } ?>>Cash</option>
        <option value="Googlepay" <?php if($expense['transaction_type']=="Googlepay") { echo "selected"; } ?>>Googlepay</option>
        <option value="Phonepe" <?php if($expense['transaction_type']=="Phonepe") { echo "selected"; } ?>>Phonepe</option>
        <option value="Bank" <?php if($expense['transaction_type']=="Bank") { echo "selected"; } ?>>Bank</option>
      </select>
    </div>
    <div class="col">
      <label for="country">Amount</label>
      <input type="text" class="form-control state-bor" value="<?=$expense['amount']?>" id="email" maxlength="10" name="amount" required>
    </div> 
   
</div>

  <button type="submit" class="btn button-color mt-3 text-white px-4 py-2" name="edit_expense">Submit</button>
  <p class="text-danger text-center" id="err-state"></p>
</div>
</form>
</div>
</div>
<!-- main content end -->

<script>
$(document).ready(function(){
$("#select-state").change(function(){
var a=$(this).val();
$("#select-district").load("ajax_cascading.php?id="+a);
});
$("#select-district").change(function(){
var a=$(this).val();
var b=$("#select-state").val();
$("#select-taluka").load("ajax_cascading2.php?did="+a+"&&sid="+b);
});
});
</script>
</div>
</div>

<script>
  function getSevaCharges(d)
  {
    const xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
      result=xhttp.responseText;
      document.getElementById("charge").value=result;
    }
    xhttp.open("GET","get_charges.php?id="+d,true);
    xhttp.send();
  }
</script>
</body>
</html>