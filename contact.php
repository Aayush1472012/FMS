<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="CSS/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="CSS/all.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="CSS/customStyle.css">

<title>AJS</title>
</head>
<body>
<!-- Start of Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="index.php" style="font-weight:700; font-size:30px;">AJS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-10">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item"><a href="Admin/AdminLogin.php" class="nav-link">Admin Login</a></li>
                    <li class="nav-item"><a href="User/UserLogin.php" class="nav-link">User Login</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link active">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

      <!--Start Contact Us-->
  <div class="container pt-4 px-5" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <div class="col-md-8">
        <!--Start Contact Us 1st Column-->
        <form action="" method="post">
          <input type="text" class="form-control" name="name" placeholder="Name"><br>
          <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
          <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
          <textarea class="form-control" name="message" placeholder="How can we help you?"
            style="height:150px;"></textarea><br>
          <input class="btn btn-primary" type="submit" value="Submit" name="submit"><br><br>
        </form>
      </div> <!-- End Contact Us 1st Column-->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Location:</strong> <br>
        AJS Pvt Ltd, <br>
        Abc Complex, <br>
        XYZ - 363040 <br>
        Phone: +919999999999 <br>
        <a href="#" target="_blank">www.ajs.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

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
  <script src="Javascript/jquery.min.js"></script>
  <script src="Javascript/popper.min.js"></script>
  <script src="Javascript/bootstrap.min.js"></script>
  <script src="Javascript/all.min.js"></script>
</body>
</html>