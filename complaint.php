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
    height:55vh;
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
    <h3 class="text-center myhead">Complaint raise</h3>
  <form action="" method="post" id="regform" autocomplete="off" enctype="multipart/form-data">
    <div class="row mt05">
    <div class="col">
      <label>Full name</label>
      <input type="text" class="form-control" name="name" id="name">
    <span class="va_name"></span>
    </div>
    <div class="col">
      <label>Email</label>
      <input type="text" class="form-control" name="email" id="email">
    <span class="va_email"></span>
    </div>
  </div>
  <div class="row mt05">
    <div class="col">
      <label>Complaint Subject</label>
      <input type="text" class="form-control" name="subject" id="subject">
    <span class="va_subject"></span>
    </div>
    <div class="col">
      <label>Date</label>
      <input type="date" class="form-control" name="date" id="date">
    <span class="va_date"></span>
    </div>
  </div>
  <div class="row mt05">
    <div class="col">
      <label>Mobile no</label>
      <input type="text" class="form-control" name="mobile" id="mobile">
    <span class="va_mobile"></span>
    </div>
    <div class="col">
      <label>Document</label>
      <input type="file" class="form-control" name="myimage" id="myimage">
    <span class="va_myimage"></span>
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
<script>
  $(document).ready(function(){
    $("#regform").submit(function(e){
      e.preventDefault();
      var name=$("#name").val();
      var email=$("#email").val();
      var subject=$("#subject").val();
      var date=$("#date").val();
      var mobile=$("#mobile").val();
      var myimage=$("#myimage").val();

      var valid=true;
      //name

      var namepattern=/^[A-Za-z][A-Za-z0-9_]*$/;
      if(name.length==0)
      {
        $(".va_name").text("please fill name field");
        valid=false;
      }
      else if(name.length<5)
      {
        $(".va_name").text("please fill atleast 5 character");
        valid=false;
      }
      else if(!namepattern.test(name))
      {
        $(".va_name").text("name contain alphaphets,numbers and underscore only");
        valid=false;
      }
      else
      {
         $(".va_name").text("");
      }

      //subject

      var subjectpattern=/^[A-Za-z][A-Za-z ]*$/;
      if(subject.length==0)
      {
        $(".va_subject").text("please fill subject field");
        valid=false;
      }
      else if(subject.length<10)
      {
        $(".va_subject").text("please fill atleast 10 character");
        valid=false;
      }
      else if(!subjectpattern.test(subject))
      {
        $(".va_subject").text("subject contain alphaphets and whitespace only");
        valid=false;
      }
      else
      {
         $(".va_subject").text("");
      }

      //email

      var emailpattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if(email.length==0)
      {
        $(".va_email").text("please fill email field");
        valid=false;
      }
      else if(!emailpattern.test(email))
      {
        $(".va_email").text("Please enter a valid email");
        valid=false;
      }
      else
      {
         $(".va_email").text("");
      }

      //myimage
      if(myimage.length==0)
      {
        $(".va_myimage").text("please fill myimage field");
        valid=false;
      }
      else
      {
         $(".va_myimage").text("");
      }

     //mobile

     var mobilepattern=/^[6-9]\d{9}$/;
      if(mobile.length==0)
      {
        $(".va_mobile").text("please fill mobile number field");
        valid=false;
      }
      else if(!mobilepattern.test(mobile))
      {
        $(".va_mobile").text("Please enter a valid mobile no");
        valid=false;
      }
      else
      {
         $(".va_mobile").text("");
      }

      //date

      if(date.length==0)
      {
        $(".va_date").text("please fill date field");
        valid=false;
      }
      else
      {
         $(".va_date").text("");
      }

      if(valid)
      {
        $(this).unbind("submit").submit();
      }


    });
  });

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
  $name=strip_tags($_POST["name"]);
  $email=strip_tags($_POST["email"]);
  $subject=strip_tags($_POST["subject"]);
  $date=strip_tags($_POST["date"]);
  $mobile=strip_tags($_POST["mobile"]);
  

  include("db.php");
  $upload_dir="uploads/";
  $upload_file=$upload_dir.basename($_FILES["myimage"]["name"]);
  if(move_uploaded_file($_FILES["myimage"]["tmp_name"],$upload_file))
  {
    $sql="insert into complaint (name,email,subject,cdate,mobile,myimage) values ('$name','$email','$subject',
    '$date','$mobile','$upload_file')";
    if(mysqli_query($con,$sql))
    {
      //echo "<script>alert('complaint sended successfully');</script>";
      ?>
      <script>
Toast.fire({
  icon: "success",
  title: "complaint sended successfully"
});
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
  title: "error to send a complaint"
});
      </script>
      <?php
    }
  }
  else
  {
    //echo "<script>alert('Error to upload a image');</script>";
         ?>
      <script>
Toast.fire({
  icon: "error",
  title: "error to upload a image"
});
      </script>
      <?php
  }
  
}
?>

<!-- footer content start -->
<?php
include("includes/footer.php");
?>
<!-- footer content end -->
</body>
</html>