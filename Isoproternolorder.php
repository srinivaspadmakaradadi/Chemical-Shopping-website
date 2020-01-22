<?php 
session_start();
include 'db.php';
if(isset($_SESSION['user']))
{
  $usermail = $_SESSION['user'];
}
else
{
  $usermail =" ";
  header("Location:login.php");
}
?>

<!--<?php
include 'db.php';
if(isset($_POST['submit']))
{



$name=$_POST['name'];    
$email=$_POST['email'];
$pack = $_POST['package'];
$quan=$_POST['quantity'];
$weight=$_POST['weight'];

$mobile=$_POST['phone'];
$cname=$_POST['companyname'];
echo $quan  ; 

 
    
   
   
        $query = "INSERT INTO products ( name, email,phone ,companyname,weight,package ,quantity) VALUES('$name', '$email','$mobile','$cname','$weight','$pack','$quan') ";
   
$data=mysqli_query($conn,$query);

if($data)
    header("Location:products.php?order==success");
    else
        echo mysqli_error($conn);
}
    
    
    
     

    ?> -->


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
              <a class="nav-link js-scroll-trigger" href="Home1.php">home</a>
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
              <a class="nav-link js-scroll-trigger" href="products.php">Products</a>
            </li>

           
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">logout</a>
            </li>


      
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

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 intro" style="margin-top:15px"> 

<input type="hidden" value="products" id="pageid" /><div class="col-md-12 brick" style="width:100% !important;">
    <h3 style="margin-bottom:30px;">Isoproternol </h3>
    <div class="col-md-5"> 
  
  </div>
    <div class="col-md-7"> <br><br><br>
  <p> <strong> CAS No  </strong> : 35022-43-6 <br>
              <strong>  Molecular Formula : </strong>  C8H3Cl2NO<br>
                <strong> Molecular Weight </strong>  200.02<br>
                <strong> CAT No : </strong>  VSLS-AMO-IMP-2,4-DIC
                </p>
                <a href="#" class="btn btn-primary modal-open" data-toggle="modal" data-target=".bs-example-modal-lg">   RFQ </a>
  
   </div>
   <strong> Synonyms : </strong>  Isoproternol
   
   </div><div class="modal fade bs-example-modal-lg"   role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" style="min-width:80%;"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="text-align:center" class="modal-title" id="gridSystemModalLabel">  Request For Quotation </h4>
      </div>
      <div class="modal-body brick">
    <h3  style="margin-bottom:10px;" >Isoproternol </h3>
    <div class="col-md-5"> 
  <img style="max-height:150px;" src="https://drive.google.com/uc?id=0B8-NsDn0E-3aZXg4ZnZqWXRyMkE">
  </div>
    <div class="col-md-7"> 
  <p> <strong> CAS No  </strong> : 35022-43-6 <br>
              <strong>  Molecular Formula : </strong>  C8H3Cl2NO<br>
                <strong> Molecular Weight : </strong>  200.02<br>
                <strong> CAT No : </strong>  VSLS-AMO-IMP-2,4-DIC</p> </div>
   <div class="col-md-12">
   <form action="orderdetails.php" method="POST">

       <div class="form-process"></div>

               <div class="col_one_third">

                                <label for="template-contactform-name">Name <small>*</small></label>

                                <input type="text" id="template-contactform-name" name="name"  class="sm-form-control required" /> </div>

<div class="col_one_third">

                                <label for="template-contactform-email">Email <small>*</small></label>

                   <input type="email" id="template-contactform-email" name="email"  class="required email sm-form-control" />

           </div>



                            <div class="col_one_third">

                                <label for="template-contactform-phone">Phone</label>

                                <input type="text" id="template-contactform-phone" name="phone" class="sm-form-control required" />

                            </div>




                            <div class="col_one_third">

                                <label for="template-contactform-subject"> Company Name <small>*</small></label>

                                <input type="text" id="template-contactform-companyname" name="companyname"  class="required sm-form-control required" />

                            </div>
              
                            <div class="col_one_third">

                                <label for="template-contactform-subject"> Package <small>*</small></label>

                                <input type="text" id="template-contactform-package" name="package"  class="required sm-form-control" />  
                 </div>
                 
                  <div class="col_one_third">
                   <label for="template-contactform-grm"> MG/G/KG <small>*</small></label> 
                    <input type="text" id="template-contactform-package" name="weight"  class="required sm-form-control" placeholder="MG/KG/G"/>                
                            </div>
                          

                            <div class="clear"></div>


                            <div class="col_one_third">
							
							 <label for="template-contactform-subject"> quantity <small>*</small></label>

                                <input type="text" id="template-contactform-botcheck" name="quantity"  class="sm-form-control" />
                            </div>

                            <div class="col_full">

                                <button class="button btn-primary nomargin" style="height:55px;" type="submit" id="template-contactform-submit" name="submit" value="submit">Submit order</button>
                  <button type="button" style="marin-left:20px;" class="btn btn-default" data-dismiss="modal">Close</button>
     

                            </div>



                        </form>


                        <script type="text/javascript">



                            $("#template-contactform").validate({

                                submitHandler: function(form) {

                                    $('.form-process').fadeIn();

                                    $(form).ajaxSubmit({

                                        target: '#contact-form-result',

                                        success: function() {

                                            $('.form-process').fadeOut();

                                            $('#template-contactform').find('.sm-form-control').val('');

                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');

                                            SEMICOLON.widget.notifications($('#contact-form-result'));

                                        }

                                    });

                                }

                            });



                        </script>
    </div>   
   </div>        
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><input type="hidden" value="products" id="pageid" />
</div>                 </div>
 

                    </div>
</div>


            </div>

</div>

        </section><!-- #content end -->

    
    

   

    

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
            <span class="copyright">Copyright  R&D  Website 2017</span>
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

  </body>

</html>
