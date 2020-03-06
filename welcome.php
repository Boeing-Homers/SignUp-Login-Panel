<?php  
 session_start();
 require('db_connect.php');
$name = $_SESSION['signup_name'];
$email = $_SESSION['signup_email'];
$age = '';
$gender = '';
$country = ''; 
$message="";
if(isset($_REQUEST['submit'])){
    if(isset($_POST['age'])){ $age = $_POST['age']; }
    if(isset($_POST['gender'])){ $gender = $_POST['gender']; }
    if(isset($_POST['country'])){ $country = $_POST['country']; }
    $sql1 = "INSERT INTO attributes (signup_name, signup_email, age , gender , country) VALUES ('$name','$email','$age','$gender','$country')";
    $message= "<div class='message'> Info Added </div>" ;
 if(mysqli_query($connection, $sql1)){
 } else{
       echo "ERROR: Could not able to execute $sql1. " . mysqli_error($connection);
   }
}
// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'test.php' 
// after loggin out 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['signup_name']);
    header("location:test.php"); 
} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
                   <meta charset="UTF-8">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <link rel="stylesheet" type="text/css" href="welcome.css">
                   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
                   <title>Document</title>
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php echo  $message; ?>
                    <div class="banner">
                    <div class="wrapper">
                    <div class="blue-wraper">
                    <div class="sign-up-text">
                    <h1 class="heading heading-padding white">MAGEBIT PANEL</h1>
                    <hr class="blue-line">
<div> 
                    <p class="white"><span class="white">User Name:</span>&nbsp;<?php echo $_SESSION['signup_name']; ?>&nbsp;</p>                   
</div>   
</div>
                    <div class="sign-in-text">
                    <h1 class="heading white">OPTIONAL INFO</h1>
                    <hr class="blue-line">                 
<br/>  
                    <form id="submit_form" method="post" action="">  

            

                     <label class="white lable_age">Age</label>  
                     <input class="input input_age" type="text" name="age" id="age" class="form-control" value=""  />  
<br />
<br/>
                     <label class="white lable_gender">Gender</label>  
                     <input class="input input_gender" type="text" name="gender" id="gender" class="form-control"  />  
<br /> 
<br/>
                     <label class="white lable_location">Country</label>  
                     <input  class="input input_location" name="country" id="location" class="form-control" />  
<br/> 
<br/>
                     <input class="button button-orange orange-login-button submit" type="submit" name="submit" id="submit" class="btn btn-info" value="submit " /> 

                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
            </form>  
<br/>
                    <a class="btn btn-full logout" href="test.php?logout='1'" style="color: #49abfe;" > 
                    LOG OUT 
                    </a>                  
</body>  
</html>  
  
