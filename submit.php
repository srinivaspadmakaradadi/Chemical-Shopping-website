<?php
session_start();
include 'db.php';

 if(isset($_POST['submit'])) 
        {  
          $em = $_SESSION['email'];
            $password=  mysqli_real_escape_string($conn,$_POST['pwd']); 
            $cnfpassword  = mysqli_real_escape_string($conn,$_POST['cnfpwd']);
          
              if($password  == $cnfpassword)
              {
                 $sql= mysqli_query($conn,"UPDATE registration SET `password`='$password' where email_id = '$em'");
                
                 header("location:login.php");
                  
              }
            else
            {
                echo "password doesn't match";
   
            }
        }
        ?>