<?php
$conn = mysqli_connect("localhost","root","","fashion");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pass = $_POST['password'];
    // echo $username;
    // $has_data= hash('sha256',$pass);
    // echo $has_data;

    $quer = "SELECT `username`, `password` FROM `user` WHERE username='$username'";
    $res = mysqli_query($conn,$quer);
    $row=mysqli_fetch_Array($res);

    if($res)
    {
        if($row['password'] == $pass )
        {
            header("Location:home.php");
        }
        else{
            echo "password is incorrect";
        }
    }
    else
    {
        echo "please enter the correct credentials";
    }

}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/login.js"></script>
    
</head>

<body class="login-bg">
    <form method="post">
    <div class="login-form">
    	<p class="logoText">Logo</p>
        <div class="form-group ">
            <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" required>
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group log-status">
            <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required>
            <i class="fa fa-lock"></i>
        </div>
        <span class="alert">Invalid Credentials</span>
        <!--<a class="link" href="#">Lost your password?</a>-->
        <input type="submit" name="login" class="log-btn" value="Login" />
        <a href="registration.php"  id="sign">Sign-up</a>


    </div>
</form>
   
   


</body>
</html>
