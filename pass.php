<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online temple management system</title>
    <meta name="description" content="we provide a best online temple management services in chennai,osure,mysore,delhi,mumbai and coimbatore">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/jquery.slim.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <!-- jquery -->
    <script src="assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style2.css">
<style>
.about-image
{
    background-image:url("assets/images/temple7.jpg");
    background-repeat:no-repeat;
    background-size:100% 100%;
    height:1px;
    width:100%;
}
.myhead
{
    color:#061f59;
}
.p-style
{
    font-size:18px;

}
.sevice-img2
{
    height:150px;
}
a
{
    text-decoration:none;
}
label
{
    color:gray;
}
span
{
  color:red;
}
</style>
</head>
<body class="home-page">

<!-- header content start -->
<?php
include("includes/header.php");
?>
<!-- header content end -->

<!-- about page start -->
<div class="about-image mb-5">

</div>


<div class="container">
    <h3 class="text-center myhead">Pass</h3>
  <form action="" method="post" id="regform" autocomplete="off" enctype="multipart/form-data">
    <div class="row mt05">
    <div class="col">
      <label>Seva name</label>
      <select name="seva_id" onchange="fun(this.value)" class="form-control" required>
      <option value="">Choose seva name</option>

<?php
include("db.php");
$sql2="select * from seva";
$result2=mysqli_query($con,$sql2);
if(mysqli_num_rows($result2)>0)
{
while($row2=mysqli_fetch_assoc($result2))
{
?>
<option value="<?=$row2['seva_id']?>"><?=$row2["seva_name"]?></option>
<?php
}
}
?>
      </select>
    <span class="va_name"></span>
    </div>
    <div class="col">
      <label>Charge of seva</label>
      <input type="number" class="form-control" name="charge" id="charge" required readonly>
    <span class="va_email"></span>
    </div>
  </div>
  <div class="row mt05">
    <div class="col">
      <label>Enter mobile no</label>
      <input type="number" class="form-control" name="mobile" id="date" required>
    <span class="va_date"></span>
    </div>
    <div class="col">
      <label>Devotees name</label>
      <input type="text" class="form-control" name="devotee_name" required id="devotee_name" readonly>
    <span class="va_mobile"></span>
    </div>
  </div>

    <div class="row mt05">
    <div class="col">
      <label>Age</label>
      <input type="number" class="form-control" name="age" id="age" required>
    <span class="va_date"></span>
    </div>
    <div class="col">
      <label>Gender</label>
      <select name="gender" class="form-control" required>
        <option value="">Choose gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
      </select>
    <span class="va_mobile"></span>
    </div>
  </div>

    <div class="row mt05">
    <div class="col">
      <label>proof type</label>
     <select name="proof_type" class="form-control" required>
        <option value="">select proof type</option>
        <option value="Aadhar card">Aadhar card</option>
        <option value="Pan card">Pan card</option>
        <option value="Driving License">Driving License</option>
      </select>
    <span class="va_date"></span>
    </div>
    <div class="col">
      <label>proof no</label>
      <input type="text" class="form-control" name="proof_no" id="mobile" required>
    <span class="va_mobile"></span>
    </div>
  </div>
  <div class="row">
  <div class="col">
      <label>Name</label>
      <input type="text" class="form-control" name="name" id="nname" required>
    </div>
    <div class="col">
      <label>Email</label>
      <input type="text" class="form-control" name="email" id="nemail" required>
    </div>
  </div>

  <div class="row">
  <div class="col">
      <label>No of persons</label>
      <input type="number" class="form-control" name="no_of_persons" id="no_of_persons" required>
    </div>
    <div class="col">
    </div>
  </div>
  
  <div class="row mt-3">
    <div class="col-md-6">
        <button type="submit" name="submit" class="btn btn-primary px-4 py-2">Submit</button>
    </div>
  </div>

</div>
</form>
<!-- about page end -->




<!-- footer content start -->
<?php
include("includes/footer.php");
?>
<!-- footer content end -->

<script>
function fun(a)
{
var xhttp=new XMLHttpRequest();
xhttp.onload=function()
{
var res=this.responseText;
const re=res.split(",");
document.getElementById("charge").value=re[0];
document.getElementById("devotee_name").value=re[1];

}
xhttp.open("GET","ajax.php?id="+a,true);
xhttp.send();
}

const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
</script>

<?php
if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $no_of_persons=$_POST["no_of_persons"];

  $seva_id=$_POST["seva_id"];
  $charge=$_POST["charge"];
  $mobile=$_POST["mobile"];
  $devotee_name=$_POST["devotee_name"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $proof_type=$_POST["proof_type"];
  $proof_no=$_POST["proof_no"];

  $_SESSION["name"]=$name;
  $_SESSION["email"]=$email;
  $_SESSION["price"]=$charge*$no_of_persons;

  include("db.php");
  $sql="insert into pass (name,email,seva_id,charge,mobile,devotee_name,age,gender,proof_type,proof_no,no_of_persons) values ('$name','$email',$seva_id,$charge,'$mobile','$devotee_name',$age,'$gender','$proof_type','$proof_no',$no_of_persons)";
  if(mysqli_query($con,$sql))
    {
      $_SESSION["pass_id"]=mysqli_insert_id($con);
      //echo "<script>alert('complaint sended successfully');</script>";
      ?>
      <script>
/*Toast.fire({
  icon: "success",
  title: "pass booked successfully"
});
*/
window.location.replace('payment/index.php');
      </script>
      <?php
    }
    else
    {
      //echo "<script>alert('Error to send a complaint');</script>";
      ?>
      <script>
Toast.fire({
  icon: "error",
  title: "error to book a pass"
});
      </script>
      <?php
    }
}
?>

</body>
</html>