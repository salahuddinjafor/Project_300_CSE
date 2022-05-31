
<?php 

include('dbconnection.php');
session_start();

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $email_search="SELECT * FROM requesterlogin_tbl WHERE r_email='".$email."' AND r_password='".$password."'limit 1";

    $result=$conn->query($email_search);
    $email_count=mysqli_num_rows($result);
    if($email_count>0){
      $username=mysqli_fetch_assoc($result);
      $_SESSION['loginusername']=$username['r_name'];
       
      echo "<script>alert('Login Success')</script>";
        header("location:customer_info/profile.php"); 
        //header("Location: login.php?msg=$msg");     
    }else{
       $check_pass="<h2>Enter Valid e-mail & Password!</h2>"; 
      //echo "<script>alert('Enter Valid E-mail & Password!')</script>";
    }

}


// echo htmlemtitles($_SERVER['PHP_SELP']); ' AND r_password='".$password."'limit 1"
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Login Form  </title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="files/css/bootstrap.min.css">
   <link rel="stylesheet" href="files/css/font-awesome.min.css">
   <script src="files/js/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
   
  </head>
  <body>
        <div class="container text-center"style="width: 40%;" >
          <h2 style="color: #00b894;">Electrician & Repairing Service Center </h2>
            <hr style="border: 1px solid #dfe6e9;">
            <!-- toasts -->
            <div class="toast" data-autohide="true">
                    <div class="toast-header">
                    <strong class="mr-auto text-primary"> 
                   
                    <?php if(isset($check_pass)){echo $check_pass;} ?>
                    
                    </strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                    </div>
                </div>
            <div class="row">
                <div class="col-ml-6">
                    <form action="" method="POST">
                        <h2>Login  Form</h2>
                       
                        <div class="input-container">
                          <i class="fa fa-envelope icon"></i>
                          <input class="input-field" type="text" placeholder="Email" name="email" required>
                        </div>
                      
                        <div class="input-container">
                          <i class="fa fa-key icon"></i>
                          <input class="input-field" type="password" placeholder="Password" name="password" required>
                        </div>
                       
                      
                        <button type="submit" class="btn btn-info" style="font-size: 19px;" name="login">login</button>
                      </form>
                </div>
            </div>
            <br>
            
            <p>Don not have an account <a href="registration.php">Sign Up Here</a> </p>
            <hr>
            <footer>
            <?php
                echo "<p>Copyright &copy; 2010-" . date("Y") . " repairingservicecenter.com</p>";
            ?>
            </footer>
        </div>
<!-- Code injected by live-server -->
<script type="text/javascript">
</script></body>
</html>