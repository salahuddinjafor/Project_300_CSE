<?php 

include('dbconnection.php');

if(isset($_POST['insertdata'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['c_password']; 

    $emailquery="SELECT * FROM requesterlogin_tbl WHERE r_email='$email' ";
    $query=mysqli_query($conn,$emailquery);

    $emailcount=mysqli_num_rows($query);
    if($emailcount>0){
        $email_check1="<h1 style='color:red;'>E-mail already exists.!</h1>";   
    }else{
        if($password==$cpassword){
            $insert="INSERT INTO requesterlogin_tbl(r_name, r_email,r_password, cpassword) 
            VALUES ('$username','$email','$password','$cpassword') ";
            //echo " Insert Data Successfully!";
            $iquery=mysqli_query($conn,$insert);
            
            if($iquery){
                $check_data="<h3 style='color:#7d5fff;'>Data Inserted Succefully!</h3>";
            }
            
            else{
                $check_fail="<h1 style='color:red;'>Inserted data Fail!</h1>";
            }
            
        }else{

           
                $check_pass="<h1 style='color:red;'>Password Doesnot Match!</h1>";
          
        }
    }
    
}

    /*
    $sql="INSERT INTO  requesterlogin_tbl(r_name,r_email,r_password,cpassword) VALUES('$username','$email','$password','$cpassword')";
    if(mysqli_query($conn,$sql)){
        //echo "<script>alert('login Successful!')</script>";
        $submitmsg="<div style='background-color:#ffeaa7'>Record Insert Succefully! </div>";
       // header("location:registration.php");
    }else{
        echo "Login Error ";
    }
   
   
}



    $input_error=array();

    if(empty($username)){
        $input_error['name']="The Name field is required.";
    } // print_r($input_error);

    if(empty($email)){
      $input_error['email']="The E-mail field is required.";
  }
  if(empty($username)){
      $input_error['username']="The usrname field is required.";
  }
  if(empty($password)){
      $input_error['password']="The password field is required.";
  }
  if(empty($cpassword)){
      $input_error['c_password']="The Confirm Password field is required.";
  }


    
    if(count($input_error)==0){
        $email_check=mysqli_query($conn,"SELECT * FROM `requesterlogin_tbl` WHERE r_email='$email';");
        if(mysqli_num_rows($email_check)==0){
                //echo "Yes";
                $user_check=mysqli_query($conn,"SELECT * FROM `requesterlogin_tbl` WHERE r_name='$username';");
                if(mysqli_num_rows($user_check)==0){
                    if(strlen($username)>7){
                       // echo "Yes";
                       if(strlen($password)>7){
                           if($password==$c_password){
                               $password=($password);

                           //$query1="INSERT INTO userinfo('name','email','username','password','photo','status') VALUES ($name,$email,$username,$password,$photo_name,'inactive')";
                           $sql="INSERT INTO  requesterlogin_tbl(r_name,r_email,r_password,cpassword) VALUES('$username','$email','$password','$cpassword')";
                             $result=mysqli_query($conn,$sql);

                            if($result){
                                    $_SESSION['Data_insert_success']="Data Insert Success!";
                                     //header('location:registration.php');
                            }else{
                                $_SESSION['Data_insert_success']="Data Insert Error!";

                            }


                           }else{
                               $match_password="Password does not Match.";
                           }

                       }else{
                           $password_l="Password More Than 8 Characters.";
                       }
                    }else{
                        //echo "No";
                        $username_l="Username More Than 8 Characters.";
                    }

                }
                else{
                    $user_error="This user Already Exists.";
                }
        }
        else{
            $email_error="This E-mail Already Exists.";
        }
    }


    }
*/


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration Form  </title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="files/css/bootstrap.min.css">
   <link rel="stylesheet" href="files/css/font-awesome.min.css">
   <script src="files/js/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loginstyle.css">
   
  </head>
  <body>
        <div class="container text-center" style="width: 50%;">
          <h2 style="color: #00b894;">Electrician & Repairing Service Center </h2>
            <hr style="border: 1px solid #dfe6e9;">
             <!-- toasts -->
             <div class="toast" data-autohide="true">
                    <div class="toast-header">
                    <strong class="mr-auto text-primary"> 
                    <?php if(isset($email_check1)){echo $email_check1;} ?>
                    <?php if(isset($check_pass)){echo $check_pass;} ?>
                    <?php if(isset($check_data)){echo $check_data;} ?>
                    <?php if(isset($check_fail)){echo $check_fail;} ?>
                    </strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                    </div>
                </div>
             
            <div class="row">
                <div class="col-ml-12">
                    <form action="" method="POST">
                        <h2>Sign Up Form</h2>
                        <div class="input-container">
                          <i class="fa fa-user icon"></i>
                          <input class="input-field" type="text" placeholder="Username" name="username" required>
                        </div>
                      
                        <div class="input-container">
                          <i class="fa fa-envelope icon"></i>
                          <input class="input-field" type="text" placeholder="Email" name="email" required>
                        </div>
                      
                        <div class="input-container">
                          <i class="fa fa-key icon"></i>
                          <input class="input-field" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Comfirm Password" name="c_password" required>
                          </div>
                      
                        <button type="submit" class="btn" name="insertdata">Register</button>
                      </form>
                </div>
            </div>
          
            <hr>
            <p>If you have an account? then Please <a href="login.php">Login</a> </p>
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