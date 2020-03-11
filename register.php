<?php
include('dbconnection.php')
//require_once('dbconnection.php') ;

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="./css/custom.css">

    <title>Register New Customer</title>
</head>
<body style="background: url(./Resourses/background.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand active" href="index.php"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="order.php">My Orders</a>
                            <a class="dropdown-item" href="cart.php">Cart</a>
                            <a class="dropdown-item" href="userprofile.php">Profile</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sign Out</a> -->
                        </div>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <div class="menu-bar">
                  <ul>
                      <li><a href="login.php">Login <i class="fas fa-sign-in-alt fa-dark"></i></a></li>
                  </ul>
              </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">          <!--./index.php-->
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Register</li>
            </ol>
        </div>
    </div>

    <div class="container" >
        <div class="row">
            <div class="col-md-4">
            </div>

            <div id=log class="col-md-4" style="margin-top: 30px">
            <h1 class="text-center">Register</h1>
                <form action="register.php" method="POST" autocomplete="off">
                 <?php include('errors.php');?>
                 <?php echo display_error(); ?>


                    <div class="form-group">
                        <label class="label col-form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required/>
                    </div>

                    <div class="form-group">
                        <label class="label col-form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required/>
                    </div>

                    <div  class = "form-group" >
                       <label class= "label col-form-label">Username</label>
                         <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                       <input type="text" name= "username" class = "form-control" placeholder="login as username"  required/>

                       <?php if (isset($name_error)): ?>
	                    	<span><?php echo $name_error; ?></span>
	                     <?php endif ?>
                      </div>
                    </div>

                    <div  class="form-group"  >
                            <label class="label col-form-label">Email</label>
                              <div <?php if (isset($email_error)): ?> class="form_error"  <?php endif ?>>
                            <input type="email" name="email" class="form-control" placeholder="Email"  required/>

                            <?php if (isset($email_error)): ?>
   	                       	<span><?php echo $email_error; ?></span>
   	                    <?php endif ?>
                       </div>
                    </div>

                    <div class="form-group">
                        <label class="label col-form-label">Contact Number</label>
                        <input type="number" name="contactNo" class="form-control" placeholder="Contact Number" required/>
                    </div>

                    <div class="form-group">
                      <label class="label col-form-label">Address</label>
                      <textarea type="text" name="address" class="form-control" placeholder="Address" rows="4"></textarea>
                  </div>

                    <div class="form-group">
                        <label class="label col-form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"  required/>
                    </div>

                    <div class="form-group">
                        <label class="label col-form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password"  required/>
                    </div>

                    <br>
                    <div class="form-group">
                        <input type="submit" name="register" class="btn btn-success btn-lg btn-block" value="Create Account"><br>
                        <p id=Member class="text-center">Already a Member?<a href="login.php"> Login</a></p>
                    </div>                                                     <!--login.php-->
                </form>
            </div>

            <div class="col-md-4">
            </div>

        </div>
    </div><br>

    <!-- Footer -->
    <?php
    include("footer.php");
     ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
