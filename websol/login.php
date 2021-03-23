<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <l<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
   <?php
   
   include "index.php" ;

   if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $email = $_POST['email'];
    $password= $_POST['password'];

       $sql = "SELECT * FROM admin WHERE email = '$email' AND password  = '$password' ";

       $query = mysqli_query($con , $sql);

       $email_count = mysqli_num_rows($query);

       if ($email_count > 0){
     
           header ("location: list_registeration.php");
       }
       else{
           echo "Invalid Credentials " ;
       }
      
    }
         
    


   ?>


    

    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="logo[578].jpeg" alt="logo">
              <p class="name">Login</p>
            </div>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <?php
        
    ?>
    <form  method="POST" action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <div class="Login-box">
           <h1>
               Login
           </h1>
           <div class="textbox">
            
                 <input type="email" placeholder="Email" name="email" value="" required>
            </div>
         <div class="textbox">
              <input type="password" placeholder="Password" name="password" value="" required>
         </div>

          <button class="btn" name = "SUBMIT" type="submit">Signin</button>
            <div class="link" style = "font-style: italic;
                                  font-size: 20px;
                                   padding-left: 217px;
                                   padding-top: 15px;
                                   height: 4vh;
                                   "
                                   >
            
               <a  href = "signup.php">Click to signup</a><br><br>

            </div>   
             
        </div>
    </form>

</body>
</html>