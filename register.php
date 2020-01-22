<?php
$con=mysqli_connect('localhost','root','','logintest');


if(isset($_POST['submit'])){



$fullname=$_POST['name'];    
$email=$_POST['email_id'];
$user = $_POST['username'];
$pass=$_POST['pwd'];
$cpass =$_POST['cnfpwd'];
$mobile=$_POST['phone'];
$name=$_POST['companyname'];   

 
    
    if($pass!=$cpass)
    {

    
    echo "not matched";

    }
    else
    {
    $query="SELECT * FROM `registration` WHERE `email_id`='$email' ";
    $data=mysqli_query($con,$query);
    
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
        
        $query = "INSERT INTO registration( name, email_id,username ,password,confirm_password ,companyname,phonenumber) VALUES ('$fullname','$email','$user','$pass','$cpass','$name','$mobile') ";
   echo "registration-successful";
$data=mysqli_query($con,$query);

if($data)
    header("Location:login.php?registration==success");
    else
        echo mysqli_error($con);
}
    
    
    
    
}
}
}    

    ?>