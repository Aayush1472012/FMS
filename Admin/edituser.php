<?php
define('TITLE', 'Users');
define('PAGE', 'Users');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_adminlogin']) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}

// update
if(isset($_REQUEST['userupdate'])){
// Checking for Empty Fields
if(($_REQUEST['u_login_id'] == "") || ($_REQUEST['u_name'] == "") || ($_REQUEST['u_email'] == "")){
// msg displayed if required field missing
$msg = '<div class="alert alert-warning ml-5 mt-2" role="alert"> Fill all the fileds !!! </div>';
} else {
// Assigning User Values to Variable
$uid = $_REQUEST['u_login_id'];
$uname = $_REQUEST['u_name'];
$uemail = $_REQUEST['u_email'];

$sql = "UPDATE userlogin_tb SET u_login_id = '$uid', u_name = '$uname', u_email = '$uemail' WHERE u_login_id = '$uid'";
if($conn->query($sql) == TRUE){
// below msg display on form submit success
$msg = '<div class="alert alert-success ml-5 mt-2" role="alert"> User Data Updated Successfully !!! </div>';
} else {
// below msg display on form submit failed
$msg = '<div class="alert alert-danger ml-5 mt-2" role="alert"> Unable to Update User Data !!! </div>';
}
}
}
?>
<div class="col-sm-6 mt-4  px-4 py-2" style="background-color: #F5F5F5; margin-bottom: 80px; margin-left:2px;">
    <h3 class="text-center">Update User Details</h3>
    <?php
    if (isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM userlogin_tb WHERE u_login_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="u_login_id">User ID</label>
            <input type="text" class="form-control" id="u_login_id" name="u_login_id" value="<?php if (isset($row['u_login_id'])) {
                                                                                                    echo $row['u_login_id'];
                                                                                                } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="u_name">Name</label>
            <input type="text" class="form-control" id="u_name" name="u_name" value="<?php if (isset($row['u_name'])) {
                                                                                            echo $row['u_name'];
                                                                                        } ?>">
        </div>
        <div class="form-group">
            <label for="u_email">Email</label>
            <input type="text" class="form-control" id="u_email" name="u_email" value="<?php if (isset($row['u_email'])) {
                                                                                            echo $row['u_email'];
                                                                                        } ?>">
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success" id="userupdate" name="userupdate">Update</button>
            <a href="Users.php" class="btn btn-secondary mx-2">Close</a>
        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</div>

<?php
include('includes/footer.php');
?>