<?php
define('TITLE', 'Add New Service');
define('PAGE', 'Services');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}
if (isset($_REQUEST['ssubmit'])) {
    // Checking for Empty Fields
    if (($_REQUEST['sname'] == "") || ($_REQUEST['smincost'] == "") || ($_REQUEST['smaxcost'] == "")) {
        // msg displayed if required field missing
        $msg = '<div class="alert alert-warning ml-5 mt-2" role="alert"> Fill All Fileds !!! </div>';
    } else {
        // Assigning User Values to Variable
        $sname = $_REQUEST['sname'];
        $smincost = $_REQUEST['smincost'];
        $smaxcost = $_REQUEST['smaxcost'];
        $sql = "INSERT INTO services_tb (sname, smincost, smaxcost) VALUES ('$sname', '$smincost','$smaxcost')";
        if ($conn->query($sql) == TRUE) {
            // below msg display on form submit success
            $msg = '<div class="alert alert-success ml-5 mt-2" role="alert"> Added Successfully </div>';
        } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger ml-5 mt-2" role="alert"> Unable to Add </div>';
        }
    }
}
?>
<div class="col-sm-6 mt-4  px-4 py-2" style="background-color: #F5F5F5; margin-bottom: 80px; margin-left:2px;">
    <h3 class="text-center">Add New Service</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pname">Service Name</label>
            <input type="text" class="form-control" id="sname" name="sname">
        </div>
        <div class="form-group">
            <label for="smincost">Minimum Cost of Service</label>
            <input type="text" class="form-control" id="smincost" name="smincost" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
            <label for="smaxcost">Maximum Cost of Service</label>
            <input type="text" class="form-control" id="smaxcost" name="smaxcost" onkeypress="isInputNumber(event)">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success" id="ssubmit" name="ssubmit">Submit</button>
            <a href="Services.php" class="btn btn-danger mx-2">Close</a>
        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
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