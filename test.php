<?php
    //session started
	session_start();
    require('db_connect.php');
$message="";
$signup_name = ""; 
$errors = array();  
$signup_email = "";
$signup_password = "";

    if(isset($_POST['signup'])){
        if(isset($_POST['signup_name'])){ $signup_name = $_POST['signup_name']; }
        if(isset($_POST['signup_email'])){ $signup_email = $_POST['signup_email']; }
        if(isset($_POST['signup_password'])){ $signup_password = $_POST['signup_password']; }
        $message= "<div class='message'> Successfully Signed Up </div>" ;

        $sql1 = "INSERT INTO testform1 (signup_name, signup_email, signup_password) VALUES ('$signup_name','$signup_email','$signup_password')";
    
     if(mysqli_query($connection, $sql1)){
         
     } else{
           echo "ERROR: Could not able to execute $sql1. " . mysqli_error($connection);
       }
    }
$_SESSION['signup_email'] = $signup_email;
$_SESSION['signup_name'] = $signup_name;

// Close connection
mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>MAGEBIT FORM</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Jquery used for form sliding & fading  -->

<script>
       $(document).ready(function(){
     $(".hollow-signup").click(function(){                  // 
       $(".white-overlay").css("grid-column","3/6");        // Changing the grid size of white part
       $(".white-overlay").addClass("slide-left");          // For  Slide effect
     $(".login-in-form").hide();                            // Hiding the login text
      $(".sign-up-form").fadeIn(600);                       // showing signup text
});
     $("#hollow-signup-mobile").click(function(){           //
       $(".white-overlay").css("grid-column","1/6");        // changing grid size for mobile devices
      $(".white-overlay").addClass("slide-left");           
       $(".login-in-form").hide();                          
       $(".sign-up-form").fadeIn(600);                      
});
   
     $(".hollow-signin").click(function(){                  
        $(".white-overlay").css("grid-column","6/10");
        $(".white-overlay").addClass("slide-right");
        $(".sign-up-form").hide();
        $(".login-in-form").fadeIn(600);
});
     $("#hollow-signin-mobile").click(function(){
       $(".white-overlay").css("grid-column","6/12");
       $(".white-overlay").addClass("slide-right"); 
       $(".sign-up-form").hide();
       $(".login-in-form").fadeIn(600);
     });
});
</script>

</head>
<body>
<?php echo  $message; ?>
    <div class="banner">

        <div class="wrapper" id="wrapper">                          <!-- class used for background animation -->
            <div class="blue-wraper">                               <!-- Main container -->
                <div class="sign-up-text">                          <!-- Left Side sign up area -->
                    <h1 class="heading heading-padding white">Don't have an account?</h1>
                    <hr class="blue-line">
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	</p>
                    <button  class="button button-blue hollow-signup" id="hollow-signup">Sign up</button>
                    <button  class="button button-blue hollow-signup" id="hollow-signup-mobile">Sign up</button>
                </div>
                    <div class="sign-in-text">                      <!-- Right Side sign up area -->
                        <h1 class="heading white">Have an account?</h1>
                        <hr class="blue-line">
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    
                    <button class="button-blue button hollow-signin" id="hollow-signin">Sign in</button>        <!-- Used for mobile devices -->
                    <button class="button-blue button hollow-signin" id="hollow-signin-mobile">Sign in</button> <!-- to change grid sizes with jquery -->
                    
                    
                </div>   
    </div>

    <div class="white-overlay" id="white-overlay">
 

 
        <!-- NOTE LOGIN FORM -->
        <div class="login-in-form" id="login-in-form" > 
            <h1 class="dark-blue heading loginlogo slim">Login</h1><span><img class="logo" src="img/logo.png" ></img></span>
        
            <hr class="blue-line"><br/>
        
            <form action="login.php" method="post">
                <div class="input-wrapper-1">
                    <label class="label-email">Email&nbsp;<span style="color:red">*</span></label><img class="mailicon icon icon-inactive"  src="img/e-mail.png"></img>
        
                    <input class="input input-email" id="input-email" type="text" pattern="[^ @]*@[^ @]*" name="login_email" required >
                </div>
                <br/>
        
                <div class="input-wrapper-2">
                    <label class="label-password">Password&nbsp;<span style="color:red">*</span></label><img class="passicon icon "  src="img/password.png"></img>
                            
                    <input class="input input-password" id="input-password" type="password" name="login_password" minlength="8" required >
                </div>
                <br/>
                <br>    
                <button class="button button-orange orange-login-button">Login</button>   <p class="forgetpass" >Forget ?</p>
            </form> 
        </div> 
        
        <!-- NOTE SIGN UP FORM -->
        <div class="sign-up-form" id="sign-up-form" > 
            <h1 class="dark-blue heading loginlogo slim">Sign Up</h1><span><img class="logo" src="img/logo.png" ></img><br/></span>
        
            <hr class="blue-line">
        
            <form action="" method="post">
                
        
                <div class="input-wrapper-1">
                    <label class="label-user">Name&nbsp;<span style="color:red">*</span></label><img class="usericon icon"  src="img/user.png"></img>
                        
                    <input class="input input-user" id="input-user" type="text" name="signup_name" required >
                
                </div>
                <br/>
        
                <div class="input-wrapper-2">
                    <label class="label-email">Email&nbsp;<span style="color:red">*</span></label><img class="mailicon icon"  src="img/e-mail.png"></img>
        
                    <input class="input input-email" id="input-email" type="text" pattern="[^ @]*@[^ @]*" name="signup_email" required >
                </div>
                <br/>
        
                <div class="input-wrapper-3">
                    <label class="label-password">Password&nbsp;<span style="color:red">*</span></label><img class="passicon icon "  src="img/password.png"></img>
        
                    <input class="input input-password" id="input-password" type="password" name="signup_password" minlength="8" required >
                </div>
                <br/>  
                <button class="button button-orange orange-signup-button" name="signup">SIGN UP</button>
                    
            </form> 
        </div>
        </div>

        


        <footer >
        <p class="footer-text">all right reserved "MAGEBIT" 2016.</p>
        
    </footer>



    </div>
</div>
<script src="test.js"></script>
</body>
</html>