<?php
define('TITLE', 'Users');
define('PAGE', 'Users');
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
    <p class=" bg-dark text-white p-2">List of Users</p>
    <?php
    $sql = "SELECT * FROM userlogin_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">user ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th scope="row">' . $row["u_login_id"] . '</th>';
            echo '<td>' . $row["u_name"] . '</td>';
            echo '<td>' . $row["u_email"] . '</td>';
            echo '<td><form action="edituser.php" method="POST" class="d-inline"> <input type="hidden" name="id" value=' . $row["u_login_id"] . '><button type="submit" class="btn btn-primary mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form>  
    <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value=' . $row["u_login_id"] . '><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
   </tr>';
        }

        echo '</tbody>
 </table>';
    } else {
        echo "0 Result";
    }
    if (isset($_REQUEST['delete'])) {
        $sql = "DELETE FROM userlogin_tb WHERE u_login_id = {$_REQUEST['id']}";
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
<div><a class="btn box text-primary"  style="background-color:#DCDCDC;" href="adduser.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php
include('includes/footer.php');
?>