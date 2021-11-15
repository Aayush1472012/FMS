<?php
define('TITLE', 'Add New Technician');
define('PAGE', 'Technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='UserLogin.php'; </script>";
 }
if(isset($_REQUEST['empsubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['empName'] == "") || ($_REQUEST['empCity'] == "") || ($_REQUEST['empMobile'] == "") || ($_REQUEST['empEmail'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning ml-5 mt-2" role="alert"> Fill all the fileds !!! </div>';
 } else {
   // Assigning User Values to Variable
   $eName = $_REQUEST['empName'];
   $eCity = $_REQUEST['empCity'];
   $eMobile = $_REQUEST['empMobile'];
   $eEmail = $_REQUEST['empEmail'];
   $sql = "INSERT INTO technician_tb (empName, empCity, empMobile, empEmail) VALUES ('$eName', '$eCity','$eMobile', '$eEmail')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success ml-5 mt-2" role="alert"> Technician Added Successfully !!! </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger ml-5 mt-2" role="alert"> Unable to Add Technician !!! </div>';
   }
 }
 }
?>
<div class="col-sm-6 mt-4  px-4 py-2" style="background-color: #F5F5F5; margin-bottom: 80px; margin-left:2px;">
  <h3 class="text-center">Add New Technician</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="empName">Name</label>
      <input type="text" class="form-control" id="empName" name="empName">
    </div>
    <div class="form-group">
      <label for="empCity">City</label>
      <input type="text" class="form-control" id="empCity" name="empCity">
    </div>
    <div class="form-group">
      <label for="empMobile">Mobile</label>
      <input type="text" class="form-control" id="empMobile" name="empMobile" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="empEmail">Email</label>
      <input type="email" class="form-control" id="empEmail" name="empEmail">
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-success" id="empsubmit" name="empsubmit">Submit</button>
      <a href="technician.php" class="btn btn-secondary mx-2">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
?>