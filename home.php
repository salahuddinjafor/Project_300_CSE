<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="files/css/bootstrap.min.css">
    <link rel="stylesheet" href="files/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="files/js/bootstrap.bundle.min.js"></script>
    <script src="files/js/jquery.min.js"></script>
    <script src="files/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <title>Electrician & Repairing Center </title>
</head>
<body>
   
    <!--Jumbtron-->
    <div class="jumbotron text-center">
        <h1>Electrician & Repairing Center</h1>
        <p>We provide home Repairs & Maintenance</p>
      </div>

       <!-- Navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container"> <!-- Container start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand"> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="nav navbar-nav navbar-right">
                    <li><a href="#home"><i class="fa fa-wa fa-home"></i> Home</a></li>
                    <li><a href="#services"><i class="fa fa-wa fa-wrench"></i> Service</a></li>
                    <li><a href="#company"><i class="fa fa-wa fa-leaf"></i> About company </a></li>
                    <li><a href="registration.php"><i class="fa fa-wa fa-users"></i> Registration</a></li>
                    <li><a href="login.php"><i class="fa fa-wa fa-sign-in"></i> Login</a></li>
                    <li><a href="#contact"><i class="fa fa-wa fa-users"></i> Contact</a></li>
                </div>
            </div>
        </div> <!--  End Container -->
    </nav> <!-- Navbar end -->

    <div class="container-fluid text-center" id="home"> <!--Service provider start -->
      <h2 style="font-weight:bold;font-size: 29px;">We Provide best advices for all types of repairs & installation</h2><br>
      <div class="row">
          <div class="col-sm-4">
                  <img class="card-img-top" src="images/1.jpg" alt="Card image" style="width:100%"> 
                  <h4 style="font-weight:bold;font-size: 19px;font-family: Arial, Helvetica, sans-serif;">Benefits of Home & Office Inception?</h4>
          </div>
          <div class="col-sm-4">
                  <img class="card-img-top" src="images/0.jpg" alt="Card image" style="width:100%">
                    <h4 style="font-weight:bold;font-size: 19px;font-family: Arial, Helvetica, sans-serif;">We are leading the best electrician</h4>
          </div>
          <div class="col-sm-4"> 
                  <img class="card-img-top" src="images/2.jpg" alt="Card image" style="width:100%">
                  <h4 style="font-weight:bold;font-size: 19px;font-family: Arial, Helvetica, sans-serif;">We provide home Repairs & Maintenance</h4>
          </div>
  
      </div>
  </div><!--Service provider End -->
  


    <!--    About Company-->
    <div class="container">
        <h2>About Company</h2>
        <div class="row" id="comany">
            <div class="col-sm-4">
                <h2>  <span class="glyphicon glyphicon-certificate"></span> Certified Contractors</h2>
                <p>Believe it or not i'm walking on air, I never thought I could feet so free.Flying away on a wing.</p>
                <h2> <span class="glyphicon glyphicon-wrench"></span> We Offer Quality Work</h2>
                <p>Believe it or not i'm walking on air, I never thought I could feet so free.Flying away on a wing.</p>
            
            </div>
            <div class="col-sm-4">
                <h2>  <span class="glyphicon glyphicon-user"></span>Dedicated Team</h2>
                <p>Believe it or not i'm walking on air, I never thought I could feet so free.Flying away on a wing.</p>
                <h2>  <span class="glyphicon glyphicon-time"></span> 24/7 Avilability</h2>
                <p>Believe it or not i'm walking on air, I never thought I could feet so free.Flying away on a wing.</p>
            
            </div>
            <div class="col-sm-4">
               <img src="images/happy1.jpg" alt="" height="250px">
            </div>
        </div>
    </div>
    <div class="container-fluid" id="services"> <!-- Service container  start-->
        <h2> OUR FEATURES SERVICES</h2>
        <h4> What we offer</h4> <hr style="border: 1px solid red;">
        <br>
        <div class="row">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo"></span>
            <h4>Electrical Maintenance</h4>
             
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-cog logo"></span>
            <h4>Lighting and Repair</h4>
             
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo"></span>
            <h4> Electrical Installation  </h4>
             
          </div>
          </div>
          <br><br>
        <div class="row">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo"></span>
            <h4>Electrical Upgrades</h4>
             
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo"></span>
            <h4>Air Conditioning</h4>
            
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo"></span>
            <h4> Electrical Safety</h4>
             
          </div>
        </div>
      </div><!-- Service container  end -->



    <!-- What Project -->
   <!-- Carousel Start -->
   <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner img" role="listbox">
            <div class="item active">
            <h4><img src="images/0.jpg" alt="" srcset=""><br><span style="font-style:normal;">OFFICIAL PROJECT REPAIRING & MAINTENANCE</span></h4>
            </div>
            <div class="item">
                <h4><img src="images/1.jpg" alt=""><br><span style="font-style:normal;">COMMERCIAL PROJECT</span></h4>
            </div>
            <div class="item">
                <h4><img src="images/2.jpg" alt=""><br><span style="font-style:normal;">DOMESTIC PROJECT</span></h4>
            </div>
            <div class="item">
                <h4><img src="images/5.jpg" alt=""><br><span style="font-style:normal;">TESTING & INSPECTION </span></h4>
            </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> <!-- Carousel End -->

<!-- we provides-->

<div class="container">
  <h2 class="text-center mb-4" id="contact">Contact Us  </h2>
  <div class="row">
          <!--  Start 1st Column --> 
          <div class="col-md-8"> <!--  Start 1st Column --> 
              <form action="" method="POST">
                  <input type="text" class="form-control" name="name" placeholder="Name" required><br>
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required><br>
                  <input type="email" class="form-control" name="email" placeholder="E-mail" required><br>
                  <textarea class="form-control" name="message" id="" cols="15" rows="10"   placeholder="Comments">
              </textarea><br>
              <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
              </form>
          </div>
              <!-- End 1st Column  --> 
          <div class="col-md-4 text-center"> <!-- Start 2nd column -->
              <strong>Headquarter:</strong><br>
              OSMS pvt Ltd,<br>
              Pirerbazar,Sylhet <br>Bangladesh <br>
              Phone: +0453453455 <br>
              <a href="" target="_blank">www.osms.com</a> <br>
              <strong>Branch:</strong><br>
              OSMS pvt Ltd,<br>
              Boteshwar,Sylhet <br>Bangladesh <br>
              Phone: +0453453455 <br>
              <a href="" target="_blank">www.osms.com</a> <br> 

          </div><!-- end  2nd column -->
  </div
</div> <!-- End  Contact us --> 

<!-- Start Footer -->
<footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container text-center">
              <small>Designed By ABC &copy; 2022</small>
              <small class="ml-2"> <a href="admin/adminlogin.php" style="color:black;">Admin Login  </a> </small>
  </div>
</footer>



</body>
</html>