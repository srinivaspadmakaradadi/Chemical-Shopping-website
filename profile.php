<!--<?php
require_once("db.php");
if(count($_POST)>0) 
{
	$sql = "SELECT * FROM registration where username='" . $_GET["username"] . "' AND password='" . $_GET["password"] . "'";
	$result = mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount == 1)
	{
		header("Location:home.php");
	}
	else
	{
		echo "Invalid Credentials";
	}
} 
?> -->
<?php
   session_start();
   if(isset($_SESSION['user']))
   {
      $usermail = $_SESSION['user'];

   }
   else
   {
    $usermail =" ";
    header("Location:index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venkat Sai life sciences</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"> </a>
        <img src="./img/logos/logo.png" alt="" width="198" height="120">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home1.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="services1.php">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about1.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="profile.php">My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="products.php">products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			<li class="nav-item">
			<a class="nav-link js-scroll-trigger"  href="logout.php"> logout </a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    
<!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome to Venkat Sai Life Sciences</div>
                    <div class="text-uppercase">Design to work perfectly</div>

                </div>
            </div>
        </header>
   <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Welcome to Venkat Sai Life Sciences</h2>

            <?php
               include 'db.php';
               $sql ="SELECT * from registration where email_id ='$usermail' ";
               $result = mysqli_query($conn,$sql);
               $count = mysqli_num_rows($result);
               if($count == 1)
               {

                  while($row = mysqli_fetch_array($result))

               {

            ?>
            <display>
                <h6><placeholder> Name:<?php echo $row['name'] ?> </placeholder></h6>
                <h6>  phone number:<?php echo $row['phonenumber'] ?>
                  <span>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit
                    </a>
                  </span> 
                </h6>
                <h6> <placeholder> username:<?php echo $row['username'] ?> </placeholder></h6>
                <h6>company name:<?php echo $row['companyname'] ?>



                 </h6>
            </display>
            <?php

          }
        }
        ?>

 
        

                
            </div>
        </div>
</div>




		
      </div>
	  </div>
	  </div>
    </section>

    
    

   

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright  venkat sai life sceinces Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="js/profile.js"> </script>
    
    
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
                           <?php
    if(isset($_POST['submit']))
{
    
     $contact=  mysqli_real_escape_string($conn,$_POST['contact']); 
    

     
mysqli_query($conn,"UPDATE registration set phonenumber ='$contact'  where email_id = '$usermail'") ;
   
  
  
}
    
    ?>

             <form class="form-horizontal" method="POST" action="profile.php">
          <div class="modal-body">
           
              
              <div class="form-group">
                  
                    <label class="control-label col-sm-3">Contact</label>
               <div class="col-sm-5">
                  
                  
                <input type="text" value = "<?php echo $row['phonenumber'] ?>" class="form-control col-sm-12" name="contact">
                  
              
              
                  </div>  
                </div>
              
              
            </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn submitbtn" style="background-color: #2c3e50;color: white;opacity:0.8" name="submit" type="submit">Submit</button>
          </div>
                 </form>

        </div>
      </div>
    </div>


    <div class="modal1 fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog1" role="document">
        <div class="modal-content1">
          <div class="modal-header1">
            <h5 class="modal-title1" id="exampleModalLabel1">Edit Company name</h5>
            <button class="close" type="button" data-dismiss="modal1" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
                           <?php
    if(isset($_POST['submit']))
{
    
     $companyname=  mysqli_real_escape_string($conn,$_POST['companyname']); 
    

     
mysqli_query($conn,"UPDATE registration set companyname ='$companyname'  where email_id = '$usermail'") ;
   
  
  
}
    
    ?>

             <form class="form-horizontal" method="POST" action="profile.php">
          <div class="modal-body1">
           
              
              <div class="form-group1">
                  
                    <label class="control-label1 col-sm-3">Company name</label>
               <div class="col-sm-5">
                  
                  
                <input type="text" value = "<?php echo $row['companyname'] ?>" class="form-control col-sm-12" name="companyname">
                  
              
              
                  </div>  
                </div>
              
              
            </div>
          <div class="modal-footer1">
            <button class="btn btn-danger" type="button" data-dismiss="modal1">Cancel</button>
            <button class="btn submitbtn" style="background-color: #2c3e50;color: white;opacity:0.8" name="submit" type="submit">Submit</button>
          </div>
                 </form>

        </div>
      </div>
    </div>



  </body>

</html>
