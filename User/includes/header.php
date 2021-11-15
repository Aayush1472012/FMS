<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php echo TITLE ?>
  </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../CSS/all.min.css">

  <!-- Custome CSS -->
  <link rel="stylesheet" href="../CSS/customStyle.css">
</head>

<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-warning" href="index.php" style="font-weight:700; font-size:30px;">AJS</a>
    </div>
  </nav>

  <!-- Side Bar -->
  <div class="container-fluid mb-5">
    <div class="row">
      <nav class="col-sm-2 bg-light sidebar py-4 d-print-none" style="background-color:#DCDCDC;">
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'UserProfile') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="UserProfile.php">
                <i class="fas fa-user"></i>
                Profile <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'SubmitRequest') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="SubmitRequest.php">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                Submit Request
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'RequestList') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="RequestList.php">
                <i style="font-size:18px" class="fa">&#xf0ae;</i>
                Request List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'ServiceList') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="ServiceList.php">
                <i style="font-size:18px" class="fa">&#xf0ae;</i>
                Service List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'CheckStatus') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="CheckStatus.php">
                <i style='font-size:18px' class='far'>&#xf15c;</i>
                Check Service Status
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php if (PAGE == 'ChangePassword') {
                                    echo 'style="background-color:wheat;"';
                                  } ?> href="ChangePassword.php">
                <i style='font-size:18px' class='fas'>&#xf079;</i>
                Change Password
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">
                <i style='font-size:18px' class='far'>&#xf14d;</i>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>