<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-white py-3">
        <h4>
        <i class="fa-solid fa-bars-staggered mybar23" style="color: #3518c3;"></i>
        <i class="fa-solid fa-bars-staggered mybar24" style="color: #3518c3;"></i>
        <span class="ml-4 ">Dashboard</span>

        <div class="dropdown mydropdown float-right">
  <button type="button" class="mybutton btn bg-white" data-toggle="dropdown">
  <?php
  if(isset($_SESSION["aid"]))
  {
    echo "Admin";
  }
  if(isset($_SESSION["uid"]))
  {
    include("../db.php");
    $sql66="select * from user where user_id=".$_SESSION["uid"];
    $result66=mysqli_query($con,$sql66);
    $row66=mysqli_fetch_assoc($result66);
    echo $row66["first_name"]." ".$row66["last_name"];

  }
  ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="change_password.php">Change password</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>
        </h4>
        </div>
    </div>
</div>