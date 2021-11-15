<?php
define('TITLE', 'Update Service');
define('PAGE', 'Services');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}
// update
if (isset($_REQUEST['supdate'])) {
    // Checking for Empty Fields
    if (($_REQUEST['sname'] == "") || ($_REQUEST['smincost'] == "") || ($_REQUEST['smaxcost'] == "")) {
        // msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill all the fileds !!! </div>';
    } else {
        // Assigning User Values to Variable
        $sid = $_REQUEST['sid'];
        $sname = $_REQUEST['sname'];
        $smincost = $_REQUEST['smincost'];
        $smaxcost = $_REQUEST['smaxcost'];
        $sql = "UPDATE services_tb SET sname = '$sname', smincost = '$smincost', smaxcost = '$smaxcost' WHERE sid = '$sid'";
        if ($conn->query($sql) == TRUE) {
            // below msg display on form submit success
            $msg = '<div class="alert alert-success ml-5 mt-2" role="alert"> Updated Successfully </div>';
        } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger ml-5 mt-2" role="alert"> Unable to Update !!! </div>';
        }
    }
}
?>
<div class="col-sm-6 mt-4  px-4 py-2" style="background-color: #F5F5F5; margin-bottom: 80px; margin-left:2px;">
    <h3 class="text-center">Update Service Details</h3>
    <?php
    if (isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM services_tb WHERE sid = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pid">Service ID</label>
            <input type="text" class="form-control" id="sid" name="sid" value="<?php if (isset($row['sid'])) {
                                                                                    echo $row['sid'];
                                                                                } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="pname">Service Name</label>
            <input type="text" class="form-control" id="sname" name="sname" value="<?php if (isset($row['sname'])) {
                                                                                        echo $row['sname'];
                                                                                    } ?>">
        </div>
        <div class="form-group">
            <label for="smincost">Minimum Cost of Service</label>
            <input type="text" class="form-control" id="smincost" name="smincost" onkeypress="isInputNumber(event)" value="<?php if (isset($row['smincost'])) {
                                                                                                                                echo $row['smincost'];
                                                                                                                            } ?>">
        </div>
        <div class="form-group">
            <label for="smaxcost">Maximum Cost of Service</label>
            <input type="text" class="form-control" id="smaxcost" name="smaxcost" onkeypress="isInputNumber(event)" value="<?php if (isset($row['smaxcost'])) {
                                                                                                                                echo $row['smaxcost'];
                                                                                                                            } ?>">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success" id="supdate" name="supdate">Update</button>
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