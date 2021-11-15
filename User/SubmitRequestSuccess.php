<?php
define('TITLE', 'Success');
define('PAGE', 'SubmitRequest');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $uEmail = $_SESSION['uEmail'];
} else {
 echo "<script> location.href='UserLogin.php'; </script>";
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 echo "<div class='mt-2 col-sm-6'>
 <center><h4>Request Receipt</h4></center>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['request_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['user_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['user_email']."</td>
  </tr>
   <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
   </tr>
   <tr>
    <th>Request Description</th>
    <td>".$row['request_desc']."</td>
   </tr>
   <tr>
    <th>Request Date</th>
    <td>".$row['request_date']."</td>
   </tr>
  </tbody>
 </table>
 <form class='d-print-none mx-2'><input class='btn btn-primary' type='submit' value='Print' onClick='window.print()'></form>
  </div>
 ";


} else {
  echo '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Failed !!! </div>';
}
?>


<?php
include('includes/footer.php'); 
$conn->close();
?>