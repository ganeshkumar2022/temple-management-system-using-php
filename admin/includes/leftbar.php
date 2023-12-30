<?php
if(isset($_SESSION["aid"]))
{
?>
<div style="width:20%;height:100vh;" class="myleftbar float-left">
    <ul class="nav flex-column admin-left-bar">
    <li class="nav-item bg-white">
        <a class="nav-link" href="dashboard.php">
            <img src="../assets/images/main_logo.png" class="img-fluid">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="dashboard.php"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
    </li>
    <li class="nav-item devot">
        <a class="nav-link" href="#"><i class="fa-solid fa-gopuram"></i>&nbsp;&nbsp;&nbsp;Devotee <i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
    <!-- devotee dropdown start-->
    <div class="dev-drop">
       <li class="nav-item">
          <a class="nav-link" href="add_devotee.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="manage_devotee.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
       </li>
    </div>
    <!-- devotee dropdown end-->
    <li class="nav-item sevat">
        <a class="nav-link" href="#"><i class="fa-solid fa-hands-praying"></i>&nbsp;&nbsp;&nbsp;Seva<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>

    <!-- seva dropdown start-->
        <div class="dev-seva">
       <li class="nav-item">
          <a class="nav-link" href="add_seva.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
       </li>
       
       <li class="nav-item">
          <a class="nav-link" href="manage_schedule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schedule</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="manage_seva.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
       </li>
    </div>
    <!-- seva dropdown end-->

    <li class="nav-item show-income">
        <a class="nav-link" href="#"><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp;&nbsp;Income<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- income dropdown start -->
<div class="drop-income">
    <li class="nav-item">
            <a class="nav-link" href="add_income.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="manage_income.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>

<!-- income dropdown end -->

    <li class="nav-item show-drop">
        <a class="nav-link" href="#"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;&nbsp;Manage Master<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- dropdown start -->
<div class="drop-head">
<li class="nav-item">
        <a class="nav-link" href="manage_income_type.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Income type</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_expenses.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expenses</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_staff.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details of staff</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_salary.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_festival_schedule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Festival Schedule</a>
</li>
<li class="nav-item ">
        <a class="nav-link" href="manage_states.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</a>
</li>
<li class="nav-item ">
        <a class="nav-link" href="manage_districts.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_taluka.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taluka</a>
</li>
</div>
<!-- dropdown end -->
    <li class="nav-item show-pass">
        <a class="nav-link" href="#"><i class="fa-solid fa-file-lines"></i>&nbsp;&nbsp;&nbsp;Pass<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- drop  pass -->
    <div class="drop-pass">
    <li class="nav-item">
            <a class="nav-link" href="manage_pass.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>



<li class="nav-item show-complaints">
        <a class="nav-link" href="#"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;&nbsp;&nbsp;Complaints<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- drop  complaints -->
<div class="drop-complaints">
    <li class="nav-item">
            <a class="nav-link" href="manage_complaints.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>

<!-- reports dropdown start -->
<li class="nav-item show-report">
        <a class="nav-link" href="#"><i class="fa-solid fa-paste"></i>&nbsp;&nbsp;&nbsp;Reports<i class="fa-solid fa-angle-right float-right"></i></a>
</li>

<div class="drop-report">
    <li class="nav-item">
            <a class="nav-link" href="devotee_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Devotees</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="income_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Income</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="expense_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expenses</a>
    </li>
</div>

<!-- user management dropdown start -->

<li class="nav-item show-user">
        <a class="nav-link" href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;User Management<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>


<div class="drop-user">
    <li class="nav-item">
            <a class="nav-link" href="manage_role.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Role</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="manage_user.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View User</a>
    </li>
</div>


    </ul>
</div>
<?php
}


if(isset($_SESSION["uid"]))
{
include("../db.php");
$sql56="select * from user where user_id=".$_SESSION["uid"];
$result56=mysqli_query($con,$sql56);
$row56=mysqli_fetch_assoc($result56);
$role=$row56["role"];
$sql57="select * from role where role_name='$role'";
$result57=mysqli_query($con,$sql57);
$row57=mysqli_fetch_assoc($result57);

$r=$row57["role_permissions"];
$r=explode(",",$r);
?>
<div style="width:20%;height:100vh;" class="myleftbar float-left">
    <ul class="nav flex-column admin-left-bar">
    <li class="nav-item bg-white">
        <a class="nav-link" href="dashboard.php">
            <img src="../assets/images/main_logo.png" class="img-fluid">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="dashboard.php"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
    </li>
<?php
if(in_array("Devotee",$r))
{
    ?>
       <li class="nav-item devot">
        <a class="nav-link" href="#"><i class="fa-solid fa-gopuram"></i>&nbsp;&nbsp;&nbsp;Devotee <i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
    <!-- devotee dropdown start-->
    <div class="dev-drop">
       <li class="nav-item">
          <a class="nav-link" href="add_devotee.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="manage_devotee.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
       </li>
    </div>
    <!-- devotee dropdown end-->
    <?php
}
if(in_array("Seva",$r))
{
    ?>
     <li class="nav-item sevat">
        <a class="nav-link" href="#"><i class="fa-solid fa-hands-praying"></i>&nbsp;&nbsp;&nbsp;Seva<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>

    <!-- seva dropdown start-->
        <div class="dev-seva">
       <li class="nav-item">
          <a class="nav-link" href="add_seva.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
       </li>
       
       <li class="nav-item">
          <a class="nav-link" href="manage_schedule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schedule</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="manage_seva.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
       </li>
    </div>
    <!-- seva dropdown end-->
    <?php
}
if(in_array("Income",$r))
{
    ?>
    
    <li class="nav-item show-income">
        <a class="nav-link" href="#"><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp;&nbsp;Income<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- income dropdown start -->
<div class="drop-income">
    <li class="nav-item">
            <a class="nav-link" href="add_income.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="manage_income.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>

    <?php
}
if(in_array("Manage master",$r))
{
    ?>
        <li class="nav-item show-drop">
        <a class="nav-link" href="#"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;&nbsp;Manage Master<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- dropdown start -->
<div class="drop-head">
<li class="nav-item">
        <a class="nav-link" href="manage_income_type.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Income type</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_expenses.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expenses</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_staff.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details of staff</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_salary.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_festival_schedule.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Festival Schedule</a>
</li>
<li class="nav-item ">
        <a class="nav-link" href="manage_states.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</a>
</li>
<li class="nav-item ">
        <a class="nav-link" href="manage_districts.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="manage_taluka.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taluka</a>
</li>
</div>
<!-- dropdown end -->
    <?php
}
if(in_array("Pass",$r))
{
    ?>
    <li class="nav-item show-pass">
        <a class="nav-link" href="#"><i class="fa-solid fa-file-lines"></i>&nbsp;&nbsp;&nbsp;Pass<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- drop  pass -->
    <div class="drop-pass">
    <li class="nav-item">
            <a class="nav-link" href="manage_pass.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>
    <?php
}
if(in_array("Complaints",$r))
{
    ?>
    <li class="nav-item show-complaints">
        <a class="nav-link" href="#"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;&nbsp;&nbsp;Complaints<i class="fa-solid fa-angle-right float-right"></i></a>
    </li>
<!-- drop  complaints -->
<div class="drop-complaints">
    <li class="nav-item">
            <a class="nav-link" href="manage_complaints.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage</a>
    </li>
</div>

    <?php
}
if(in_array("Reports",$r))
{
    ?>
    <!-- reports dropdown start -->
<li class="nav-item show-report">
        <a class="nav-link" href="#"><i class="fa-solid fa-paste"></i>&nbsp;&nbsp;&nbsp;Reports<i class="fa-solid fa-angle-right float-right"></i></a>
</li>

<div class="drop-report">
    <li class="nav-item">
            <a class="nav-link" href="devotee_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Devotees</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="income_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Income</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="expense_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expenses</a>
    </li>
    
</div>
    <?php
}
?>
 
  





    </ul>
</div>
<?php
}
?>

<script>
    $(document).ready(function(){
        $(".mybar24,.dev-drop,.dev-seva,.drop-income,.drop-report,.drop-user,.drop-pass,.drop-complaints").hide();
        $(".nav-item3").click(function(){
            $(this).css({"background-color":"pink","border-right":"3px solid red"});
            $(".nav-item").not(this).css({"background-color":"white","border-right":"3px solid white"});
        });
        $(".mybar23").click(function(){
            $(".main-content").css("width","100%");
            $(".myleftbar").css("width","-20%");
            $(this).hide();
            $(".mybar24").show();
        });
        $(".mybar24").click(function(){
            $(".main-content").css("width","80%");
            $(".myleftbar").css("width","20%");
            $(this).hide();
            $(".mybar23").show();
        });
        $(".show-drop").click(function(){
            $(".drop-head").toggle(1000);
        });
        
        $(".show-pass").click(function(){
            $(".drop-pass").toggle(1000);
        });
        $(".show-complaints").click(function(){
            $(".drop-complaints").toggle(1000);
        });
        $(".show-report").click(function(){
            $(".drop-report").toggle(1000);
        });
        $(".show-user").click(function(){
            $(".drop-user").toggle(1000);
        });
        $(".devot").click(function(){
            $(".dev-drop").toggle(1000);
        });
        $(".show-income").click(function(){
            $(".drop-income").toggle(1000);
        });

        
        $(".sevat").click(function(){
            $(".dev-seva").toggle(1000);
        });

        $(".nav-item").click(function(){
            $(this).find("i.fa-angle-right").toggleClass("fa-angle-down");
        });
    });
</script>