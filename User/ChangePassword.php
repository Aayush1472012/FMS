<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $uEmail = $_SESSION['uEmail'];
} else {
    echo "<script> location.href='UserLogin.php'; </script>";
}

$uEmail = $_SESSION['uEmail'];
if (isset($_REQUEST['passupdate'])) {
    if (($_REQUEST['uPassword'] == "")) {
        // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-9 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
        $sql = "SELECT * FROM userlogin_tb WHERE u_email='$uEmail'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $uPass = $_REQUEST['uPassword'];
            $sql = "UPDATE userlogin_tb SET u_password = '$uPass' WHERE u_email = '$uEmail'";
            if ($conn->query($sql) == TRUE) {
                // below msg display on form submit success
                $passmsg = '<div class="alert alert-success col-sm-9 ml-5 mt-2" role="alert"> Updated Successfully </div>';
            } else {
                // below msg display on form submit failed
                $passmsg = '<div class="alert alert-danger col-sm-9 ml-5 mt-2" role="alert"> Unable to Update </div>';
            }
        }
    }
}

?>

<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5" method="POST">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value=" <?php echo $uEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="uPassword">
                </div>
                <button type="submit" class="btn btn-success mr-4 mt-4" name="passupdate">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if (isset($passmsg)) {
                    echo $passmsg;
                } ?>
            </form>
        </div>

    </div>
</div>
</div>
</div>


<?php
include('includes/footer.php');
?>