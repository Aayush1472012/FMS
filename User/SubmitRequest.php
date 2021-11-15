<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $uEmail = $_SESSION['uEmail'];
} else {
    echo "<script> location.href='UserLogin.php'; </script>";
}

if (isset($_REQUEST['submitrequest'])) {
    // Checking for Empty Fields
    if (($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['useradd1'] == "") || ($_REQUEST['useradd2'] == "") || ($_REQUEST['usercity'] == "") || ($_REQUEST['userstate'] == "") || ($_REQUEST['userzip'] == "") || ($_REQUEST['useremail'] == "") || ($_REQUEST['usermobile'] == "") || ($_REQUEST['requestdate'] == "")) {
        // msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
        // Assigning User Values to Variable
        $uinfo = $_REQUEST['requestinfo'];
        $udesc = $_REQUEST['requestdesc'];
        $uname = $_REQUEST['username'];
        $uadd1 = $_REQUEST['useradd1'];
        $uadd2 = $_REQUEST['useradd2'];
        $ucity = $_REQUEST['usercity'];
        $ustate = $_REQUEST['userstate'];
        $uzip = $_REQUEST['userzip'];
        $uemail = $_REQUEST['useremail'];
        $umobile = $_REQUEST['usermobile'];
        $udate = $_REQUEST['requestdate'];
        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, user_name, user_add1, user_add2, user_city, user_state, user_pincode, user_email, user_mobile, request_date) VALUES ('$uinfo','$udesc', '$uname', '$uadd1', '$uadd2', '$ucity', '$ustate', '$uzip', '$uemail', '$umobile', '$udate')";
        if ($conn->query($sql) == TRUE) {
            // below msg display on form submit success
            $genid = mysqli_insert_id($conn);
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Request Submitted Successfully & Your request id is' . $genid . '. </div>';
            session_start();
            $_SESSION['myid'] = $genid;
            echo "<script> location.href='SubmitRequestSuccess.php'; </script>";
            // include('submitrequestsuccess.php');
        } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request !!! </div>';
        }
    }
}
?>


<div class="col-sm-9 col-md-10 mt-5">
    <form class="mx-5" action="" method="POST">
        <div class="form-group">
            <label for="inputRequestInfo">Request Information</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Ex. mic is not working" name="requestinfo">
        </div>
        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write description of request." name="requestdesc">
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="John" name="username">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputAddress">House No./Apartment No.</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Ex. House No. 12" name="useradd1">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Area</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Ex. Near Bus Station" name="useradd2">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="usercity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" name="userstate">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">PIN Code</label>
                <input type="text" class="form-control" id="inputZip" name="userzip" onkeypress="isInputNumber(event)">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="useremail" value="<?php echo $uEmail; ?>" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="usermobile" onkeypress="isInputNumber(event)">
            </div>
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requestdate">
            </div>
        </div>

        <button type="submit" class="btn btn-success my-3" name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary mx-3 my-3">Reset</button>
    </form>
    <!-- below msg display if required fill missing or form submitted success or failed -->
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
</div>
</div>
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