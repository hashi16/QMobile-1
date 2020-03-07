<?php  ?>


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

    <title>Product</title>
</head>
<body id="product">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand active" href="#"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./store.php"><span class="fas fa-warehouse fa-lg"></span> Store</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user fa-lg"></span> My Account</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./order.php">My Orders <span class="fas fa-shopping-bag fa-lg"></span></a>
                            <a class="dropdown-item" href="./cart.php">Cart <span class="fa fa-shopping-cart fa-lg"></span></a>
                            <a class="dropdown-item" href="./user.php">Profile <span class="fa fa-user fa-lg"></span></a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="menu-bar">
                    <ul>
                        <li><a href="register.php">Register <i class="fas fa-user-plus fa-dark"></i></a></li>
                        <li><a href="login.php">Login <i class="fas fa-sign-in-alt fa-dark"></i></a></li>
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
                <li class="breadcrumb-item"><a href="./store.php">Store</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </div>
    </div>

    <!--Single Product-->
    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="product-slider">
                        <div>
                            <div>
                                <img src="Resourses/product/s1.jpg" class="d-block">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="new-arrival text-center">New</p>
                    <h2>Samsung A10</h2>
                    <p>Product Code: IRSC2019</p>

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                    <p class="price">Rs.7300.00</p>
                    <p><b>Availability : </b>In Stock</p>
                    <p><b>Condition : </b>New</p>
                    <p><b>Brand : </b> Samsung</p>
                    <lable>Quantity: </lable>
                    <input type="text" value="1">
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!--product Description-->
    <section class="product-descrption">
    <div class="container">
        <h6>Product Description</h6>
        <p>Samsung Galaxy A10 is powered by an octa-core Samsung Exynos 7884 processor. It comes with 2GB of RAM. ...
            The Samsung Galaxy A10 runs One UI based on Android Pie and packs 32GB of inbuilt storage that can be expanded
            via microSD card (up to 512GB). It was launched in Red and Blue Black colours
        </p>
        <hr>
        </div>
    </section>

     <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
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
