<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CVgen</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style1.css">
    
</head>

<body style ="background-image: url('background.png');">
 <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>
    <button class = "btn btn-primary btn-lg btn-block" disabled><h1 style = "font-family:Kristen ITC;color:gold;"><em><b>CV GENERATOR</b></em></h1></button>
    <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>
   <center>
       
       
   <br><br><br>
   
   
   <div class="container">
    <div class="col-sm-6">
      <h1 class="text-center" style = "color:white;font-family: Arial, Helvetica, sans-serif;">SIGNUP</h1>
       <form action="signup.php" method = "POST">
        <div class="form-group">
           <br>
           <input type="text" class="form-control" name="name" placeholder="Full name" required>    
        </div>
           
            <div class="form-group">
           <br>
           <input type="email" class="form-control" name="email" placeholder="Email ID" required>    
        </div>
        
            <div class="form-group">
           <br>
           <input type="text" class="form-control" name="username" placeholder="Username" required>    
        </div>
        
            
             <div class="form-group">
           <br>
            <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <input class = "btn btn-primary" type="submit" name = "submit" value = "Register">
        </form>
    
    </div>
</div>
   </center>
   <br><br><br>

<?php 
    
    include "dc.php";
    
    if(isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = "INSERT INTO login (username,password,name,email) ";
        $query .= "VALUES ('$username','$password','$name','$email') ";
        
        global $connection;
        if(!mysqli_query($connection,$query)) {
            echo "Record could not be registered";
        } else {
            
             header("Location:login.php");
        }
        
    }
    



?>
    </body>
</html>