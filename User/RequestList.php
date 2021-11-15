<?php
define('TITLE', 'Request List');
define('PAGE', 'RequestList');
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
    <p class=" bg-dark text-white p-2">List of Requests</p>
    <?php
    $sql = "SELECT * FROM submitrequest_tb where user_email='$uEmail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Request ID</th>
    <th scope="col">Request Information</th>
    <th scope="col">Request Date</th>
   </tr>
  </thead>
  <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th scope="row">' . $row["request_id"] . '</th>';
            echo '<td>' . $row["request_info"] . '</td>';
            echo '<td>' . $row["request_date"] . '</td>';
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