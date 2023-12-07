<?php
include("loginconnection.php");
if(isset($_POST['loginbtn'])){
    $username= $_POST['user'];
    $password= $_POST['pass'];
     $sql="select * from login_cs where Username = '$username' and Password= '$password'";
     $result=mysqli_query($connlogin,$sql);
     $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
     $count= mysqli_num_rows($result);
     if($username=="" && $password=="")
     {
        header('location:login.php');
     }
     if($count==1){
        header("Location: FrontUser.php");

     }
     else{
        echo '<script>
        window.location.href="login.php";
        alert("Login Failed. Invalid Username or Password!")
        </script>';
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <script language="javascript"type="text/javascript">
        window.history.forward();
    </script>

  <title>Login Page</title>
  <link rel="stylesheet" href="login1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body id="body">
<div class="col-sm-4" id="form">
<h3 >Login Form </h3><br>
    <form name = "form" action = "login.php" onsubmit="return isvalid()" method = "POST">
     <div>
        
        <!--<label>Username</label>-->
        <input type="text" class="form-control" id= "user" name = "user" placeholder="Enter your username"><br>
        <!--<label>Password</label>-->
        <input type="password" class="form-control" id= "pass" name = "pass" placeholder="Enter your password"><br>
        <button type="submit" class="form-control" id = "loginbtn" name = "loginbtn">Login</button><br><br>
        <label>Don't have Account? </label>
        <button type="button" class="" id = "registerhere" name = "registerhere">Register Here</button>
        
     </div>
    </form>
    </div>
    &nbsp &nbsp<div class="col-sm-8" id="col31" >
    <img src= "images1/photo1.jpg">
   </div>
<script>
function isvalid(){
    var user=document.form.user.value;
    var pass=document.form.pass.value;

    if(user.length=="" && pass.length =="")
    {
        alert("Username and Password Field is empty!")
        return false
    }
    else{
        if(user.length=="")
        {
            alert("Username Field is empty!");
            return false
        }
        if(pass.length=="")
        {
            alert("Password Field is empty!");
            return false
        }

    }
}

    </script>
</body>
</html>