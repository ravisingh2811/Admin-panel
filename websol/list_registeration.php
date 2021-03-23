<?php
include "index.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>List of register</title>
</head>
<body>
    
    <div class="main-div">
  
                                           
      
      <h1 style = "background: radial-gradient(#42c119, transparent);
    margin-top: 22px;">LIST OF REGISTER CANDIDATE</h1>  
      <button class= btn style = "width:80px; margin-left: 80%; background:orange; margin-bottom: 20px;" onclick = "window.print()"> Print</button>
      <div class="centre-div">
           <div class="table-responsive" style="border-collapse: collapse;
                                             background-color: rgb(255, 255, 255);
                                             box-shadow: 0 10px 20px 0 rgba(0, 0,0, .03);
                                             border-radius: 10px;
                                             margin: auto;">

           <table >
              <thead>
               <tr>
               <th>id</th>
               <th>name</th>
             
               <th>email</th>
               <th>phone number</th>
             
               <th>address</th>
               <th>password</th>
               <th>confirm password</th>
               <th>dd</th>
         
               </tr>

              </thead>
                 <tbody>
                       <?php
                          $sql = "SELECT * FROM signup ";

                          $query = mysqli_query($con , $sql);
                   
                          $email_count = mysqli_num_rows($query);

                          while ($res = mysqli_fetch_array($query)){


                        ?>
                            <tr>
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['name'];?></td>
                            <td><?php echo $res['email'];?></td>
                  
                      
                            <td><?php echo $res['number'];?></td>
          
                            
                            <td><?php echo $res['address'];?></td>
                            <td><?php echo $res['password'];?></td>
                            <td><?php echo $res['cpassword'];?></td>
                            <td><?php echo $res['dd'];?></td>
                         
                
                         
      
      
                        </tr>
                    <?php   
                      }

                       ?>

                  
              
                </tbody>
           </table>
         

      
            </div>
      
      </div>
    
   
    
    
    </div>
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
     $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();
       });
</script>


</body>
</html>