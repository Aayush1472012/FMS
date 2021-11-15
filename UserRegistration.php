<?php
  include('dbConnection.php');

  if(isset($_REQUEST['uSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['uName'] == "") || ($_REQUEST['uEmail'] == "") || ($_REQUEST['uPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required to filled !!! </div>';
    } else {
      $sql = "SELECT u_email FROM userlogin_tb WHERE u_email='".$_REQUEST['uEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID is Already Registered !!! </div>';
      } else {
        // Assigning User Values to Variable
        $uName = $_REQUEST['uName'];
        $uEmail = $_REQUEST['uEmail'];
        $uPassword = $_REQUEST['uPassword'];
        // Insert data into DB
        $sql = "INSERT INTO userlogin_tb(u_name, u_email, u_password) VALUES ('$uName','$uEmail', '$uPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account is Successfully Created !!! </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account !!! </div>';
        }
      }
    }
  }
?>


<div class="container pt-5 mt-1 mb-5" id="registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
      <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4" method="POST">
          <div class="form-group">&nbsp;
            <i class="fas fa-user"></i>&nbsp;<label for="name" class="pl-2 font-weight-bold">Name</label><input type="text"
              class="form-control" placeholder="Ex. John" name="uName">
          </div>
          <div class="form-group mt-3">&nbsp;
            <i class="fas fa-envelope"></i>&nbsp;<label for="email" class="pl-2 font-weight-bold">Email</label><input
              type="email" class="form-control" placeholder="Ex. john123@gmail.com" name="uEmail">
            <!--Add text-white below if want text color white-->
            &nbsp;<small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group mt-3">&nbsp;
            <i class="fas fa-key"></i>&nbsp;<label for="pass" class="pl-2 font-weight-bold">New
              Password</label><input type="password" class="form-control" placeholder="********" name="uPassword">
          </div>
          <button type="submit" class="btn btn-outline-danger mt-4 btn-block shadow-sm font-weight-bold"
            name="uSignup">Sign
            Up</button>
          <br>
          <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie
            Policy.</em>
            <?php if(isset($regmsg)) {echo $regmsg; } ?>
        </form>
      </div>
    </div>
</div>