<?php
session_start();
include "index.php";
if(isset($_POST['SUBMIT'])){
  
   $name= mysqli_real_escape_string($con, $_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $number=mysqli_real_escape_string($con,$_POST['number']);
  
   $address=mysqli_real_escape_string($con,$_POST['address']);;
   $password = mysqli_real_escape_string($con,$_POST['password']);
   $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
   
   
        if($password == $cpassword){
            
             $sql = "INSERT INTO signup ( `name`, `email`, `number`,  `address`, `password`,`cpassword`,`dd`) 
             VALUES ( '$name', '$email' , '$number',  '$address', '$password' , '$cpassword', CURRENT_TIMESTAMP())";
             $iquery = mysqli_query($con , $sql);

             if($iquery){
                $_SESSION['name'] = "$name";


              header("location: welcome.php");

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
                 
        } else{
            echo " password not matching";
        }
   
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <l<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Welcome</title>
</head>
<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="logo[578].jpeg" alt="logo">
              <p class="name">Registration</p>
            </div>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="login.php">Admin Login</a></li>
        
        </ul>
    </nav>
    <form  method="POST" action ="">
        <div class="Login-box" style="height: 75vh;" >
           <h1>
               Signup
           </h1>
           
           <div class="textbox">
           
                 <input type="text" placeholder= "Full Name" name="name" value="" required>
            </div>
         <div class="textbox">
       
              <input type="email" placeholder="Email" name="email" value=""required>
         </div>
         <div class="textbox">
              <input type="number" placeholder="Phone Number" name="number" value=""required>
         </div>
         <div class="textbox">
              <input type="text" placeholder="Address" name="address" value=""required>
         </div>
         <div class="textbox">
        
              <input type="password" placeholder="Password" name="password" value=""required>
         </div>
         <div class="textbox">
              <input type="password" placeholder=" Confirm Password" name="cpassword" value=""required>
         </div>

          <button class="btn" name = "SUBMIT" type="submit">Signup</button>
            <div class="link" style = "font-style: italic;
                                  font-size: 20px;
                                   padding-left: 217px;
                                   padding-top: 15px;
                                   height: 4vh;">
            
               <a  href = "login.php">Click to login</a><br><br>

            </div>   
               
        </div>
    </form>
</body>
</html>