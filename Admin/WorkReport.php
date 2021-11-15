<?php
define('TITLE', 'Work Report');
define('PAGE', 'WorkReport');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_adminlogin']) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}
?>

<div class="col-sm-9 col-md-10 mt-4">
    <form action="" method="POST" class="d-print-none">
        <div class="row">
            <span> From </span>
            <div class="form-group col-md-2">
                <input type="date" class="form-control" id="startdate" name="startdate">
            </div> <span> to </span>
            <div class="form-group col-md-2">
                <input type="date" class="form-control" id="enddate" name="enddate">
            </div>
            <div class="form-group mt-2">
                <input type="submit" class="btn btn-success" name="searchsubmit" value="Search">
            </div>
        </div>
    </form>
    <?php
    if (isset($_REQUEST['searchsubmit'])) {
        $startdate = $_REQUEST['startdate'];
        $enddate = $_REQUEST['enddate'];
        $sql = "SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '
  <p class=" bg-dark text-white p-2 mt-4">Details</p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Request ID</th>
      <th scope="col">Request</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Technician Name</th>
      <th scope="col">Assigned Date</th>
    </tr>
  </thead>
  <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
    <th scope="row">' . $row["request_id"] . '</th>
    <td>' . $row["request_info"] . '</td>
    <td>' . $row["user_name"] . '</td>
    <td>' . $row["user_add2"] . '</td>
    <td>' . $row["user_city"] . '</td>
    <td>' . $row["user_mobile"] . '</td>
    <td>' . $row["assign_tech"] . '</td>
    <td>' . $row["assign_date"] . '</td>
      </tr>';
            }
            echo '</tbody> </table>
            <form class="d-print-none"><input class="btn btn-success" type="submit" value="Print" onClick="window.print()"></form>';
        } else {
            echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found !!! </div>";
        }
    }
    ?>
</div>
</div>
</div>


<?php
include('includes/footer.php');
?>