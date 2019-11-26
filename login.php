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
      <h1 class="text-center" style = "color:white;font-family: Arial, Helvetica, sans-serif;">LOGIN</h1>
       <form action="login.php" method = "POST">
        <div class="form-group">
           <br>
           <input type="text" class="form-control" name="username" placeholder="Username" required>    
        </div>
             <div class="form-group">
           
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <input class = "btn btn-primary" type="submit" name = "submit" value = "Login">
        </form>
    
    </div>
</div>
   </center>
   <br><br><br>
 
<div class="row">
  <div class="column">
    <img src="temp3cv.png" alt="Sample 1" style="width:100%">
  </div>
  <div class="column">
    <img src="samplenew.PNG" alt="Sample 2" style="width:100%">
  </div>
  <div class="column">
    <img src="temp1cv.PNG" alt="Sample 3" style="width:100%">
  </div>
</div>
   
   <?php 
    include "dc.php";
    if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
 

$query = "SELECT username from login where username ='$username' and password = '$password'";
 if ($result=mysqli_query($connection,$query))
  {
   
   if(mysqli_num_rows($result) > 0)
    {  
       echo $username."<br>";
      echo "You are logged in !!";
       header("Location:info.php");
    }
  else
      header("Location:signup.php");

  } 
 
else
{ 
    echo "QUERY FAILED!!";
}
}
    
    
    ?>
    
   
    
</body>
</html>