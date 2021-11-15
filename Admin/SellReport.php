<?php
define('TITLE', 'Sell Report');
define('PAGE', 'SellReport');
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
        $sql = "SELECT * FROM customer_tb WHERE cpdate BETWEEN '$startdate' AND '$enddate'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '
  <p class=" bg-dark text-white p-2 mt-4 text-center">Details</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Customer ID</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Address</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price Each</th>
        <th scope="col">Total</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
        <th scope="row">' . $row["custid"] . '</th>
        <td>' . $row["custname"] . '</td>
        <td>' . $row["custadd"] . '</td>
        <td>' . $row["cpname"] . '</td>
        <td>' . $row["cpquantity"] . '</td>
        <td>' . $row["cpeach"] . '</td>
        <td>' . $row["cptotal"] . '</td>
        <td>' . $row["cpdate"] . '</td>
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