<?php

$conn=mysqli_connect('localhost','root','','logintest');


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
    
    
    
     

    ?>