<?php
session_start();
$user="";
$pass="";
$errors = array();

if(isset($_POST['signin'])){
    $db = mysqli_connect('localhost','root','','registeruser');
    $user= mysqli_real_escape_string($db,$_POST['username']);
    $pass= mysqli_real_escape_string($db,$_POST['password']);
    if(empty($user)){
        array_push($errors, "Username is required");

   }
   if(empty($pass)){
        array_push($errors, "Password is required");
   }   
   if(count($errors) == 0){
    $pass = md5($pass);
        $query = "SELECT * FROM admin WHERE username='$user'  AND password='$pass' LIMIT 1 ";
        $results = mysqli_query($db , $query);
        if(mysqli_num_rows($results)==1){
            $_SESSION["username"]=$user;
            header('location: index.php');
            exit();
        }
        else 
        {
            array_push($errors, "Your username or password Incorrect ");
        }
    }   
   
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login for admin</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/admin_login.css">
</head>
<body>
<?php include('errors.php');?>

    <form action="admin_login.php" method="post">
    <div class="login-box">
        
        <h1>Login</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username" value="">
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password" value="">
        </div>
        <div>
        <button type="submit" class="btn"  name="signin">SignIn</button>
        </div>
        
    </div>
    <form>
    
<!---javaScript cdn----->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>