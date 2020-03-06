<?php  
 session_start();
 require('db_connect.php');

if (isset($_POST['login_email']) and isset($_POST['login_password'])){
	
// Assigning POST values to variables.
$email = $_POST['login_email'];
$password = $_POST['login_password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `testform1` WHERE signup_email='$email' and signup_password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){ 
    echo"<script>alert('Successfully Logged in');</script>";
    header("Refresh: 0; url=welcome.php");
    die;
}else{
    echo "<script>alert('Wrong email and password')</script>";
    echo "<script>window.open('test.php','_self')</script>";
}
}
?>

