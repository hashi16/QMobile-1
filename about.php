<?php include('dbconnection.php')  ?>
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
    <title>About Us</title>
</head>
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
                        <a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php"><span class="fa fa-info fa-lg"></span> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.php"><span class="fas fa-warehouse fa-lg"></span> Store</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user fa-lg"></span> My Account</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="order.php">My Orders <span class="fas fa-shopping-bag fa-lg"></span></a>
                            <a class="dropdown-item" href="cart.php">Cart <span class="fa fa-shopping-cart fa-lg"></span></a>
                            <a class="dropdown-item" href="userprofile.php">Profile <span class="fa fa-user fa-lg"></span></a>
                        </div>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
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
                        <li><a href="login.php">Login <i class="fas fa-sign-in-alt fa-dark"></i></a></li>
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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card card-body bg-light">
                <h2>QMobile</h2><br>
                <p>
                    We are QMobile the biggest mobile and mobile accessories seller in Sri Lanka since 1996. We do every best for our customer be happy with us any matter how.
                    Here we are selling our products with very quality features with good seller's protection. We are doing every best for keep the buyers protection as well.
                </p>
                <!-- Bootstrap card -->
                <div class="col-12 col-sm-6 justify-content-center offset-sm-3">
                    <div class="card">
                        <h3 class="card-header bg-success text-dark" style="text-align:center">Location Information</h3>
                        <div class="card-body">
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
                                <div class="btn-group justify-content-center offset-2 offset-sm-4" role="group">
                                    <a role="button" class="btn btn-primary" href="tel:+94112345678"><i class="fa fa-phone"></i> Call</a>
                                    <a role="button" class="btn btn-success" href="mailto:qmobile@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- Address -->
                <div class="col-7 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
                        No 121, Templers road,<br>
                        Mount Lavinia, <br>
                        Sri Lanka.<br>
                        <!-- Bootstrap font awesome -->
                        <i class="fa fa-phone fa-lg"></i>: +9411 234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +9411 234 5678<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:qmobile@gmail.com">qmobile@gmail.com</a>
		            </address>
                </div>
                <!-- Bootstrap social -->
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon btn-primary" href="mailto:qmobile@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2019 QMobile.Ltd</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
