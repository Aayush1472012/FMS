<?php
define('TITLE', 'Services');
define('PAGE', 'Services');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_adminlogin']) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='AdminLogin.php'; </script>";
}
?>

<div class="col-sm-9 col-md-10 mt-4 text-center">
    <!--Table-->
    <p class=" bg-dark text-white p-2">Services Details</p>
    <?php
    $sql = "SELECT * FROM services_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">Service ID</th>
        <th scope="col">Service Name</th>
        <th scope="col">Original Cost (In Rupees)</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
        <th scope="row">' . $row["sid"] . '</th>
        <td>' . $row["sname"] . '</td>
        <td>Rs. ' . $row["smincost"] . '-' . $row["smaxcost"] . '</td>
        <td>
          <form action="editservice.php" method="POST" class="d-inline"> <input type="hidden" name="id" value=' . $row["sid"] . '><button type="submit" class="btn btn-primary" name="view" value="View"><i class="fas fa-pen"></i></button></form>  
          <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value=' . $row["sid"] . '><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
          </td>
      </tr>';
        }
        echo '</tbody>
  </table>';
    } else {
        echo "0 Result";
    }
    if (isset($_REQUEST['delete'])) {
        $sql = "DELETE FROM services_tb WHERE sid = {$_REQUEST['id']}";
        if ($conn->query($sql) === TRUE) {
            // echo "Record Deleted Successfully";
            // below code will refresh the page after deleting the record
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
    }
    ?>
</div>
</div>
<a class="btn text-primary box"  style="background-color:#DCDCDC;" href="addservice.php"><i class="fas fa-plus fa-2x"></i></a>
</div>


<?php
include('includes/footer.php');
?>