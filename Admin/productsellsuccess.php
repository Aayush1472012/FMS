<?php
session_start();
define('TITLE', 'Success');
define('PAGE', 'Products');
include('includes/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}

$sql = "SELECT * FROM customer_tb WHERE custid = {$_SESSION['myid']}";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo "<div class='col-sm-6 ml-5 mt-4'>
 <h3 class='text-center'>Customer Bill</h3>
 <table class='table'>
  <tbody>
  <tr>
    <th>Customer ID</th>
    <td>" . $row['custid'] . "</td>
  </tr>
   <tr>
     <th>Customer Name</th>
     <td>" . $row['custname'] . "</td>
   </tr>
   <tr>
     <th>Address</th>
     <td>" . $row['custadd'] . "</td>
   </tr>
   <tr>
   <th>Product</th>
   <td>" . $row['cpname'] . "</td>
  </tr>
   <tr>
    <th>Quantity</th>
    <td>" . $row['cpquantity'] . "</td>
   </tr>
   <tr>
    <th>Price Each</th>
    <td>" . $row['cpeach'] . "</td>
   </tr>
   <tr>
    <th>Total Cost</th>
    <td>" . $row['cptotal'] . "</td>
   </tr>
   <tr>
   <th>Date</th>
   <td>" . $row['cpdate'] . "</td>
   </tr>
  </tbody>
 </table>
 <form class='d-print-none d-inline'><input class='btn btn-success' type='submit' value='Print' onClick='window.print()'></form>
  <a href='products.php' class='btn btn-danger d-print-none d-inline'>Close</a>
  </div>
 ";
} else {
    echo "Failed";
}
?>

<?php
include('includes/footer.php');
$conn->close();
?>