<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
          <li class="nav-item"><a href="#About" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
          <li class="nav-item"><a href="Admin/AdminLogin.php" class="nav-link">Admin Login</a></li>
          <li class="nav-item"><a href="User/UserLogin.php" class="nav-link">User Login</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Home Page Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/home1.jpg" class="d-block w-100" alt="image1">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to AJS</h2>
          <p class="font-italic">Customer's Happiness is our Aim</p>
          <a href="User/UserLogin.php" class="btn btn-success mx-2 mt-1 mb-2">Login</a>
          <a href="#registration" class="btn btn-danger mx-2 mt-1 mb-2">Sign Up</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/home2.jpg" class="d-block w-100" alt="image2">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to AJS</h2>
          <p class="font-italic">Customer's Happiness is our Aim</p>
          <a href="User/UserLogin.php" class="btn btn-success mx-2 mt-1 mb-2">Login</a>
          <a href="#registration" class="btn btn-danger mx-2 mt-1 mb-2">Sign Up</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/home3.jpg" class="d-block w-100" alt="image3">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to AJS</h2>
          <p class="font-italic">Customer's Happiness is our Aim</p>
          <a href="User/UserLogin.php" class="btn btn-success mx-2 mt-1 mb-2">Login</a>
          <a href="#registration" class="btn btn-danger mx-2 mt-1 mb-2">Sign Up</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container my-5 p-5" id="About" style="background:#DCDCDC;">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center pb-2"><i style="font-size:26px;" class="fa">&#xf085;</i> AJ Services</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi architecto aliquid
        explicabo harum! Quo quod, harum, fugiat blanditiis deserunt aperiam repellat sunt
        neque laborum aut, at facere iure saepe excepturi vero exercitationem unde voluptate
        corrupti aliquid. Autem sit id, fuga magni quod labore sunt tempora consequuntur ipsam
        nesciunt enim necessitatibus, minus iure provident, ratione aperiam voluptatum alias
        dolor? Voluptatum nisi ex veniam aspernatur incidunt nesciunt, qui, blanditiis id
        corporis quidem tempora error hic non dolor magnam voluptas sapiente natus dolorum.
      </p>
    </div>
  </div>
  <!--Introduction Section End-->

  <!-- Start Services -->
  <div class="container text-center border-bottom p-5" id="Services" style="background:#DCDCDC;">
    <h2><i class="fa">&#xf2b5;</i> Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <img src="Images/service1.jpg" width="180" height="140" alt="service image">
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <img src="Images/service2.jpg" width="180" height="140" alt="service image">
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <img src="Images/service3.jpg" width="180" height="140" alt="service image">
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('UserRegistration.php') ?>
  <!-- End Registration  -->


  <!-- Start of Customer Carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="jumbotron" id="Customer" style="background:#DCDCDC;">
          <!-- Start Customer Jumbotron -->
          <div class="container pb-4">
            <!-- Start Customer Container -->
            <h2 class="text-center"><i class="fa">&#xf0c0;</i> Our Customers</h2>
            <div class="row mt-5">
              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 1st Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/male1.png" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Avadh Patel</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 1st Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 2nd Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/male2.png" class="img-fluid" style="border-radius: 120px;">
                    <h4 class="card-title">Ravi Kumar</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 2nd Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 3rd Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/male3.jpg" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Dipak Shah</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 3rd Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 4th Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/female2.png" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Rani Sharma</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 4th Column-->
            </div> <!-- End Customer Row-->
          </div> <!-- End Customer Container -->
        </div>
      </div>
      <div class="carousel-item">
        <div class="jumbotron" id="Customer" style="background:#DCDCDC;">
          <!-- Start Customer Jumbotron -->
          <div class="container pb-4">
            <!-- Start Customer Container -->
            <h2 class="text-center"><i class="fa">&#xf0c0;</i> Our Customers</h2>
            <div class="row mt-5">
              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 1st Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/female1.jpg" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Komal Patel</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis nisi rerum
                      aspernatur alias cupiditate, dolorum delectus minus eaque.</p>
                  </div>
                </div>
              </div> <!-- End Customer 1st Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 2nd Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/male1.png" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Ravi Saw</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 2nd Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 3rd Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/male3.jpg" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Veet Shah</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 3rd Column-->

              <div class="col-lg-3 col-sm-6">
                <!-- Start Customer 4th Column-->
                <div class="card shadow-lg mb-2">
                  <div class="card-body text-center">
                    <img src="Images/female3.png" class="img-fluid" style="border-radius: 100px;">
                    <h4 class="card-title">Janki Roy</h4>
                    <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                      ducimus voluptas
                      nesciunt debitis numquam.</p>
                  </div>
                </div>
              </div> <!-- End Customer 4th Column-->
            </div> <!-- End Customer Row-->
          </div> <!-- End Customer Container -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End of Customer Carousel -->


  <!-- Start of Footer -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 bg-dark"
    style="border-top: 3px solid #DC3545; position:absolute; width:100%;">
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