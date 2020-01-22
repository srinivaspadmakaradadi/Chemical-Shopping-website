<?php
$con=mysqli_connect('localhost','root','','logintest');


if(isset($_POST['submit'])){



$name=$_POST['name'];    
$email=$_POST['mailid'];
$user = $_POST['username'];
$pass=$_POST['pwd'];
   

 
    
    
  
    $query="SELECT * FROM `adm` WHERE `mail_id`='$email' ";
    $data=mysqli_query($conn,$query);
    
    $row=mysqli_fetch_array($data);
    
    $num_rows=mysqli_num_rows($data);
    
    if($num_rows>0)
        {
        
        echo "Username already exist,Please try with different Username";
    
      
            }
            else
            {

                                 if (!stristr($email,"@") OR !stristr($email,".")) 
                                    { // checking your email 
                                       echo "Your email address is not correct."; 
                                      }
            
    else{
        
        $query = "INSERT INTO adm( name, mailid,username ,password) VALUES ('$name','$email','$user','$pass') ";
   echo "registration-successful";
$data=mysqli_query($con,$query);

if($data)
    header("Location:adminlogin.php?registration==success");
    else
        echo mysqli_error($con);
}
    
    
    
    
}
}
   

    ?>