<?php
define('TITLE', 'Service List');
define('PAGE', 'ServiceList');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $uEmail = $_SESSION['uEmail'];
} else {
    echo "<script> location.href='UserLogin.php'; </script>";
}

?>

<div class="col-sm-9 mx-5 mt-3 text-center">
    <!--Table-->
    <p class=" bg-dark text-white p-2">List of Services</p>
    <?php
    $sql = "SELECT * FROM services_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Sr. No.</th>
    <th scope="col">Service</th>
    <th scope="col">Cost (In Rupees)</th>
   </tr>
  </thead>
  <tbody>';
        $srno = 0;
        while ($row = $result->fetch_assoc()) {
            $srno++;
            echo '<tr>';
            echo '<th scope="row">' . $srno . '</th>';
            echo '<td>' . $row["sname"] . '</td>';
            echo '<td>Rs. ' . $row["smincost"] . '-' . $row["smaxcost"] . '</td>';
        }
        echo '</tbody>
 </table>';
    } else {
        echo "Zero Request";
    }
    ?>
</div>


<?php
include('includes/footer.php');
?>