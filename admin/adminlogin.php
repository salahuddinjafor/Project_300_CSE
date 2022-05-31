<?php 
    include('includes/config.php');
    session_start();
    
   if(isset($_POST['adminlogin'])){
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $sql="SELECT * FROM admin_tbl WHERE admin_email='".$email."' AND admin_password='".$password."'limit 1";
    
    $result=$conn->query($sql);
    $email_count=mysqli_num_rows($result);
    if($email_count>0){
      $adusername=mysqli_fetch_assoc($result);
      $_SESSION['adminusername']=$adusername['admin_name'];
       
      echo "<script>alert('Login Success')</script>";
        header("location:dashboard.php"); 
        //header("Location: login.php?msg=$msg");     
    }else{
       $check_pass="<h2>Enter Valid e-mail & Password!</h2>"; 
      //echo "<script>alert('Enter Valid E-mail & Password!')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page </title>
    <link rel="stylesheet" href="files/css/font-awesome.min.css">
    <link rel="stylesheet" href="files/css/bootstrap.min.css">
    <script src="files/js/bootstrap.bundle.min.js"></script>
   
    <style>
        form{
            border: 3px solid #f1f1f1;
        }
        /* full-width inputs */
        input[type=email],input[type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button{
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect ofr buttons */
        button:hover{
            opacity: .8;;
        }
        /* Extra style for the cancel button (red) */
        .cancelbtn{
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .container{
            padding: 16px;
        }

        @media screen and (max-width:300px) {
            span.psw{
                display: block;
                float: none;
            }
            .cancelbtn{
                width: 100%;
            }
            
        }

    </style>

</head>
<body>

   <div class="container">
   <div class="text-center bg-color:black;">
        <h2>Electrician & Service Provider Center </h2>
    <h3>Admin Login Page</h3>
    </div>
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

    <form action="" method="POST">
        <div class="container">
            <label for="username"><i class="fa fa-wa fa-inbox"></i> <b>E-mail: </b></label>
            <input type="email" name="email" placeholder="Enter E-mail Address: " required>
            <label for="pass"> <b><i class="fa fa-wa fa-key"></i> Password </b>  </label>
            <input type="password" name="password" placeholder="Enter Password " required>
            <button type="submit" name="adminlogin"> <i class="fa fa-wa fa-sign-in btn btn-secondary"></i> Login </button>  
        </div>
        <div class="text-center">
           <a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">
               <i class="fa fa-wa fa-home"></i> Back To Home 
            </a> 
        </div>
       
    </form>
   </div>
    
</body>
</html>