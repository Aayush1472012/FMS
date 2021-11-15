<?php
define('TITLE', 'Add New User');
define('PAGE', 'Users');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='UserLogin.php'; </script>";
 }
if(isset($_REQUEST['usersubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['u_name'] == "") || ($_REQUEST['u_email'] == "") || ($_REQUEST['u_password'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning ml-5 mt-2" role="alert"> Fill all the fields !!! </div>';
 } else {
   // Assigning User Values to Variable
   $uname = $_REQUEST['u_name'];
   $uEmail = $_REQUEST['u_email'];
   $uPassword = $_REQUEST['u_password'];
   $sql = "INSERT INTO userlogin_tb (u_name, u_email, u_password) VALUES ('$uname', '$uEmail', '$uPassword')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success ml-5 mt-2" role="alert"> User Added Successfully !!! </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger ml-5 mt-2" role="alert"> Unable to Add User !!! </div>';
   }
 }
 }
?>
<div class="col-sm-6 mt-4  px-4 py-2" style="background-color: #F5F5F5; margin-bottom: 80px; margin-left:2px;">
  <h3 class="text-center">Add New User</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="u_name">Name</label>
      <input type="text" class="form-control" id="u_name" name="u_name">
    </div>
    <div class="form-group">
      <label for="u_email">Email</label>
      <input type="email" class="form-control" id="u_email" name="u_email">
    </div>
    <div class="form-group">
      <label for="u_password">Password</label>
      <input type="password" class="form-control" id="u_password" name="u_password">
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-success" id="usersubmit" name="usersubmit">Submit</button>
      <a href="Users.php" class="btn btn-secondary mx-2 ">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

<?php
include('includes/footer.php'); 
?>