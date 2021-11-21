<?php
define('TITLE', 'Dashboard');
define('PAGE', 'Dashboard');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_adminlogin']) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}

$sql = "SELECT * FROM submitrequest_tb";
$result = $conn->query($sql);
$submitrequest = 0;
while($row = $result->fetch_assoc()){
    $submitrequest++;
}

$sql = "SELECT max(rno) FROM assignwork_tb";
$result = $conn->query($sql);
$assignwork = 0;
while($row = $result->fetch_assoc()){
    $assignwork++;
}

$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
$totaltech = $result->num_rows;


?>

<div class="col-sm-9 col-md-10">
    <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Service Request Received</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $submitrequest; ?>
                    </h4>
                    <a class="btn text-white" href="Requests.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Assigned Technician for Requests</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $assignwork; ?>
                    </h4>
                    <a class="btn text-white" href="Work.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">No. of Technicians</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totaltech; ?>
                    </h4>
                    <a class="btn text-white" href="Technician.php">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5 mt-5 text-center">
        <!--Table-->
        <p class=" bg-dark text-white p-2">List of Users</p>
        <?php
        $sql = "SELECT * FROM userlogin_tb";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">User ID</th>
    <th scope="col">User Name</th>
    <th scope="col">User Email</th>
   </tr>
  </thead>
  <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row["u_login_id"] . '</th>';
                echo '<td>' . $row["u_name"] . '</td>';
                echo '<td>' . $row["u_email"] . '</td>';
            }
            echo '</tbody>
 </table>';
        } else {
            echo "0 Result";
        }
        ?>
    </div>
</div>
</div>
</div>

<?php
include('includes/footer.php');
?>