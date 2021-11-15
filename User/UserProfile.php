<?php
define('TITLE', 'User Profile');
define('PAGE', 'UserProfile');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $uEmail = $_SESSION['uEmail'];
} else {
    echo "<script> location.href='UserLogin.php'; </script>";
}


$sql = "SELECT * FROM userlogin_tb WHERE u_email='$uEmail'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $uName = $row["u_name"];
}

if (isset($_REQUEST['nameupdate'])) {
    if (($_REQUEST['uName'] == "")) {
        // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Enter your name !!! </div>';
    } else {
        $rName = $_REQUEST["uName"];
        $sql = "UPDATE userlogin_tb SET u_name = '$uName' WHERE u_email = '$uEmail'";
        if ($conn->query($sql) == TRUE) {
            // below msg display on form submit success
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Name Updated Successfully !!! </div>';
        } else {
            // below msg display on form submit failed
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update Your Name !!! </div>';
        }
    }
}
?>


<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value=" <?php echo $uEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="uName" value=" <?php echo $uName ?>">
        </div>
        <button type="submit" class="btn btn-success mt-4" name="nameupdate">Update</button>
        <?php if (isset($passmsg)) {
            echo $passmsg;
        } ?>
    </form>
</div>


<?php
include('includes/footer.php');
?>