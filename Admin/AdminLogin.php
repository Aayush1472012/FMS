<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_adminlogin'])){
  if(isset($_REQUEST['aEmail'])){
    $aEmail = mysqli_real_escape_string($conn,trim($_REQUEST['aEmail']));
    $aPassword = mysqli_real_escape_string($conn,trim($_REQUEST['aPassword']));
    $sql = "SELECT a_email, a_password FROM adminlogin_tb WHERE a_email='".$aEmail."' AND a_password='".$aPassword."' limit 1";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
      $_SESSION['is_adminlogin'] = true;
      $_SESSION['aEmail'] = $aEmail;
      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='Dashboard.php'; </script>";
      exit;
    } else {
      $msg = '<div class="alert alert-warning mt-2" role="alert"> Invalid Email/Password </div>';
    }
  }
} else {
  echo "<script> location.href='Dashboard.php'; </script>";
}
// session_destroy();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../CSS/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../CSS/customStyle.css">

    <style>
        .custom-margin {
            margin-top: 8vh;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <!-- Start of Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="../index.php" style="font-weight:700; font-size:30px;">AJS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-10">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item"><a href="../Admin/AdminLogin.php" class="nav-link active">Admin Login</a></li>
                    <li class="nav-item"><a href="../User/UserLogin.php" class="nav-link">User Login</a></li>
                    <li class="nav-item"><a href="../contact.php" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Login Heading -->
    <div class="mb-3 text-center mt-5" style="font-size: 30px;">
        <i style="font-size:28px" class="fa">&#xf085;</i>
        <span>AJ Services</span>
    </div>
    <p class="text-center text-success" style="font-size: 20px;"> <i style="font-size:20px" class="fa">&#xf13e;</i>
        <span>Admin
            Login Panel</span>
    </p>
    <!-- Start of Login Block -->
    <div class="container-fluid mb-5">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4" method="POST"
                    style="border: 1px solid transparent; border-radius:5px;">
                    <div class="form-group">&nbsp;
                        <i class="fas fa-user"></i>&nbsp;<label for="email"
                            class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control"
                            placeholder="Ex. abc@gmail.com" name="aEmail">
                        <!--Add text-white below if want text color white-->
                        &nbsp;<small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">&nbsp;
                        <i class="fas fa-key"></i>&nbsp;<label for="pass"
                            class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control"
                            placeholder="********" name="aPassword">
                    </div>
                    <button type="submit"
                        class="btn btn-outline-warning mt-3 btn-block shadow-sm font-weight-bold">Login</button>
                    <?php if(isset($msg)) {echo $msg; } ?>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Login Block -->

    <!-- Start of Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 bg-dark"
        style="border-top: 3px solid #DC3545; bottom:0; position:absolute; width:100%;">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="text-muted">Designed by AJS &copy; 2021</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="pr-2" style="color:white;">Follow Us: </span>
            <li class="ms-3"><a class="text-muted" target="_blank" href="https://twitter.com/i/flow/login"><i
                        class="fab fa-twitter fi-color"></i></a></li>
            <li class="ms-3"><a class="text-muted" target="_blank" href="https://www.youtube.com/"><i
                        class="fab fa-youtube fi-color"></i></a></li>
            <li class="ms-3"><a class="text-muted" target="_blank" href="https://www.facebook.com/"><i
                        class="fab fa-facebook fi-color"></i></a></li>
            <li class="mx-3"><a class="text-muted" target="_blank" href="https://www.linkedin.com/"><i
                        class="fab fa-linkedin fi-color"></i></a></li>
        </ul>
    </footer>
    <!-- End of Footer -->


    <!-- Boostrap JavaScript -->
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../Javascript/popper.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    <script src="../Javascript/all.min.js"></script>
</body>

</html>