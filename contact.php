<?php
include('dbconnection.php');

include('contact_script.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
  <link rel="stylesheet" href="./css/custom.css">

    <title>Contact Us</title>


  </head>
  <body>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand active" href="./index.php"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php"><span class="fa fa-info fa-lg"></span> About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./contact.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.php"><span class="fas fa-warehouse fa-lg"></span> Store</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user fa-lg"></span> My Account</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="order.php">My Orders</a>
                                <a class="dropdown-item" href="cart.php">Cart <span class="fa fa-shopping-cart fa-lg"></span></a>
                                <a class="dropdown-item" href="userprofile.php">Profile <span class="fa fa-user fa-lg"></span></a>

                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <div class="menu-bar">
                        <ul>
                      <?php if(isset($_SESSION['user'])){ ?>

                            <?php echo $_SESSION['user']['username'];?>
                            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i><br>
                            <small>
                            <a href="index.php?logout='1'" style="color: red;">logout</a>
                          </small>


                          <?php }else{ ?>
                            <li><a href="register.php">Register <i class="fas fa-user-plus fa-dark"></i></a></li>
                            <li><a href="login.php">Login <i class="fas fa-user-plus fa-dark"></i></a></li>
                          <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav><br>

        <!-- Breadcrumb -->
        <div class="container">
            <div class="row">
                <ol class="col-12 breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>

        <!-- Feedback form -->
        <div class="row container row-content">
            <div class="col-12 col-sm-10 offset-1">
                <div class="card">
                    <h3 class="card-header bg-warning text-secondary" style="text-align:center">Send us your Feedback</h3>
                    <div class="card-body">
                        <dl class="row">
                            <form class="offset-2" style="width:600px;"method="post" action="contact_script.php">
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="firstname" name="fname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="lastname" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                                    <!-- <div class="col-5 col-md-3">
                                        <input type="number" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                                    </div> -->
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" id="telnum" name="tele" placeholder="Tel. Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="emailid" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="emailid" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <!--<div class="col-md-6 offset-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                            <label class="form-check-label" for="approve">
                                                <strong>May we contact you?</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <select class="form-control">
                                            <option>Tel.</option>
                                            <option>Email</option>
                                        </select>
                                    </div>-->
                                </div>

                                <div class="form-group row">
                                    <label for="subject" class="col-md-2 col-form-label">Subject</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="message" name="subject" placeholder="Subject">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-md-2 col-md-10">
                                        <!-- Button -->
                                        <button type="submit" class="btn btn-success" name = "send" >Send Feedback</button>
                                    </div>
                                </div>
                            </form>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap card -->
    <div class="row container row-content">
        <div class="col-12 col-sm-6 justify-content-center offset-sm-3">
            <div class="card">
                <h3 class="card-header bg-warning text-secondary" style="text-align:center">Location Information</h3>
                <div class="card-body bg-light">
                    <dl class="row">
                        <dd class="col-6">No 121, Templers road,</dd>
                        <dd class="col-6"><i class="fa fa-phone"></i>: +9411 234 5678</dd>
                        <dd class="col-6">Mount Lavinia, </dd>
                        <dd class="col-6"><i class="fa fa-fax"></i>: +9411 234 5678</dd>
                        <dd class="col-6">Sri Lanka.</dd>
                        <dd class="col-6"><i class="fa fa-envelope"></i>:<a href="mailto:qmobile@gmail.com"> qmobile@gmail.com</a></dd>
                    </dl>
                    <dl class="row">
                        <dd class="col-12">
                           <div class="w-100">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.489020141167!2d79.87264041459225!3d6.831818195062575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25adf6260db1d%3A0xaa8e852461115e82!2s121%20Templers%20Rd%2C%20Dehiwala-Mount%20Lavinia!5e0!3m2!1sen!2slk!4v1577971571239!5m2!1sen!2slk" frameborder="0" style="border:0;width:100%;" allowfullscreen=""></iframe>
                            </div>
                        </dd>
                    </dl>
                    <dl class="row">
                        <!-- Button -->
                        <div class="btn-group offset-3 offset-sm-4" role="group">
                            <a role="button" class="btn btn-primary" href="tel:+94112345678"><i class="fa fa-phone"></i> Call</a>
                            <a role="button" class="btn btn-success" href="mailto:qmobile@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

        <?php include('footer.php'); ?>

  </body>
</html>
