
<html>
   <head>
        <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    
    </head>
      <style type="text/css">
      body
  {
    background-color: #ccc;
  }
    .forgotpassword-form
    {
          background-color: #fff;
          height:300px;
              box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
              


    }
.forgotpassword-form h3
{
   text-align: center;
}
.form-control
{
  height:40px;
}
a
{
  text-decoration: none;
  cursor: pointer;
}
input[type = submit]
{
  height:45px;
  font-size: 18px;
}

@media (max-width: 768px) {
  .forgotpassword-form
  {
    margin-left: 13px;
  }
  
}
.backbtn
{
    float: right;
    font-size: 15px;
}
</style>
<body>
         
    <br><br><br><br><br><br><br><br>
 <div class="container ">
  <div class="row">
    <div class="col-md-4 col-md-offset-4  col-xs-11 forgotpassword-form">
 
    <?php

session_start();
require 'db.php';
 if(isset($_GET['email']) && isset($_GET['token']))
 {
        $email = $_GET['email'];
        $_SESSION['email'] = $email;
        $token = $_GET['token'];

        $sql = "SELECT * from registration where email_id = '$email' AND token = '$token'";
            $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
       ?> 
        <form action="submit.php" method="POST">

    <h3>Reset Password</h3>
    <br>

          <div class="form-group">
            
              <input type="password" name="pwd" class="form-control" placeholder="password(Min-lenght:7)" required > 
         </div> 
           <div class="form-group">
            
              <input type="password" name="cnfpwd" class="form-control" placeholder="cnfpassword(Min-length:7)" required  > 

         </div> 
          
         <button type="submit"  name="submit" class="btn btn-danger btn-block" id="submit">Update</button> 
     </form> 
     
        
            
    <?php
      
       
       

     
    
    }
     
    else
    {
        echo "please check your link";

    }
 }
 else
 {
     header("Location:login.php");
     exit();
 }
?>

         
    
    
     
  
   
   </div>
  </div>
 </div>


    
    </body>
</html>