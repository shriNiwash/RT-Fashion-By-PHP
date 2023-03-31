<?php
$conn = mysqli_connect("localhost","root","","fashion");


if(isset($_POST['signup']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $has_data = hash('sha256',$password);
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "INSERT INTO `user`(`id`,`username`, `password`, `fullname`, `phone`, `email`)
    VALUES ('','$username','$password','$fullname','$phone','$email')";

    $response =mysqli_query($conn,$query);
    if($response)
    {
        echo "you are registered";
        
    }
    else{
        echo "connection failed";
    }

    header("Location:index.php");





}


 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/login.js"></script>
    
</head>

<body class="login-bg">
    <form method="post">
    <div class="login-form">
    	<p class="logoText">Register</p>
        <div class="form-group ">
            <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" required>
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group log-status">
            <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required>
            <i class="fa fa-lock"></i>
        </div>
        <div class="form-group ">
            <input type="text" class="form-control" placeholder="Full-Name" id="fullname" name="fullname" required> 
            <i class="fa fa-home"></i>
        </div>
        <div class="form-group ">
            <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" required>
            <i class="fa fa-phone"></i>
        </div>
        <div class="form-group ">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
            <i class="fa fa-share"></i>
        </div>
        <span class="alert">Invalid Credentials</span>
        <!--<a class="link" href="#">Lost your password?</a>-->
        <input type="submit" name="signup" name="signup" class="log-btn" value="Signup" />


    </div>
</form>
   
   

</body>
</html>
