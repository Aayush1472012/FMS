<?php
if (session_id() == '') {
    session_start();
}
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}
if (isset($_REQUEST['view'])) {
    $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

//  Assign work Order Request Data going to submit and save on db assignwork_tb table
if (isset($_REQUEST['assign'])) {
    // Checking for Empty Fields
    if (($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['address1'] == "") || ($_REQUEST['address2'] == "") || ($_REQUEST['usercity'] == "") || ($_REQUEST['userstate'] == "") || ($_REQUEST['userzip'] == "") || ($_REQUEST['useremail'] == "") || ($_REQUEST['usermobile'] == "") || ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == "")) {
        // msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill all the fileds !!! </div>';
    } else {
        // Assigning User Values to Variable
        $rid = $_REQUEST['request_id'];
        $uinfo = $_REQUEST['request_info'];
        $udesc = $_REQUEST['requestdesc'];
        $uname = $_REQUEST['username'];
        $uadd1 = $_REQUEST['address1'];
        $uadd2 = $_REQUEST['address2'];
        $ucity = $_REQUEST['usercity'];
        $ustate = $_REQUEST['userstate'];
        $uzip = $_REQUEST['userzip'];
        $uemail = $_REQUEST['useremail'];
        $umobile = $_REQUEST['usermobile'];
        $uassigntech = $_REQUEST['assigntech'];
        $udate = $_REQUEST['inputdate'];
        $sql = "INSERT INTO assignwork_tb (request_id, request_info, request_desc, user_name, user_add1, user_add2, user_city, user_state, user_pincode, user_email, user_mobile, assign_tech, assign_date) VALUES ('$rid', '$uinfo','$udesc', '$uname', '$uadd1', '$uadd2', '$ucity', '$ustate', '$uzip', '$uemail', '$umobile', '$uassigntech', '$udate')";
        if ($conn->query($sql) == TRUE) {
            // below msg display on form submit success
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
            $sql = "DELETE FROM submitrequest_tb WHERE request_id = $rid";
            $conn->query($sql);
            echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
        } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
        }
    }
}
// Assign work Order Request Data going to submit and save on db assignwork_tb table [END]
?>
<div class="col-sm-5 mt-4 py-2 px-3" style="background-color: #F5F5F5; margin-bottom: 80px;">
    <!-- Main Content area Start Last -->
    <form action="" method="POST">
        <h5 class="text-center">Assign Work Order Request</h5>
        <div class="form-group">
            <label for="request_id">Request ID</label>
            <input type="text" class="form-control" id="request_id" name="request_id" value="<?php if (isset($row['request_id'])) {
                                                                                                    echo $row['request_id'];
                                                                                                } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="request_info">Request Info</label>
            <input type="text" class="form-control" id="request_info" name="request_info" value="<?php if (isset($row['request_info'])) {
                                                                                                        echo $row['request_info'];
                                                                                                    } ?>">
        </div>
        <div class="form-group">
            <label for="requestdesc">Description</label>
            <input type="text" class="form-control" id="requestdesc" name="requestdesc" value="<?php if (isset($row['request_desc'])) {
                                                                                                    echo $row['request_desc'];
                                                                                                } ?>">
        </div>
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($row['user_name'])) {
                                                                                                        echo $row['user_name'];
                                                                                                    } ?>">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="address1">Address Line 1</label>
                <input type="text" class="form-control" id="address1" name="address1" value="<?php if (isset($row['user_add1'])) {
                                                                                                    echo $row['user_add1'];
                                                                                                } ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address Line 2</label>
                <input type="text" class="form-control" id="address2" name="address2" value="<?php if (isset($row['user_add2'])) {
                                                                                                    echo $row['user_add2'];
                                                                                                } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="usercity">City</label>
                <input type="text" class="form-control" id="usercity" name="usercity" value="<?php if (isset($row['user_city'])) {
                                                                                                            echo $row['user_city'];
                                                                                                        } ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="userstate">State</label>
                <input type="text" class="form-control" id="userstate" name="userstate" value="<?php if (isset($row['user_state'])) {
                                                                                                                echo $row['user_state'];
                                                                                                            } ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="userzip">Zip</label>
                <input type="text" class="form-control" id="userzip" name="userzip" value="<?php if (isset($row['user_pincode'])) {
                                                                                                            echo $row['user_pincode'];
                                                                                                        } ?>" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="useremail">Email</label>
                <input type="email" class="form-control" id="useremail" name="useremail" value="<?php if (isset($row['user_email'])) {
                                                                                                                echo $row['user_email'];
                                                                                                            } ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="usermobile">Mobile</label>
                <input type="text" class="form-control" id="usermobile" name="usermobile" value="<?php if (isset($row['user_mobile'])) {
                                                                                                                echo $row['user_mobile'];
                                                                                                            } ?>" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="assigntech">Assign to Technician</label>
                <input type="text" class="form-control" id="assigntech" name="assigntech">
            </div>
            <div class="form-group col-md-6">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="inputdate">
            </div>
        </div>
        <div class="float-right mt-3">
            <button type="submit" class="btn btn-success" name="assign">Assign</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
    <!-- below msg display if required fill missing or form submitted success or failed -->
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
</div> <!-- Main Content area End Last -->
</div> <!-- End Row -->
</div> <!-- End Container -->
<!-- Only Number for input fields -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>