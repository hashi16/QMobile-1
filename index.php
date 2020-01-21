<?php
include('dbconnection.php');
// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }

  // session_start();
  //
  // if(!isset($_SESSION['username'])){
  //     $_SESSION['msg'] = "You are log in first";
  //     header('location: login.php');
  // }
  // if(isset($_GET['logout'])){
  //     session_destroy();
  //     unset($_SESSION['username']);
  //     header("location: login.php");
  // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--<title>Home</title>-->
  <link rel="stylesheet" href="text/css" href="custom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
     <link rel="stylesheet" href="./css/Custom.css">

     <title>QMobile</title>

</head>
<body>

  <!--    <div class="content">?-->

            <?php if(isset($_SESSION['success'])) : ?>
              <div clas="error success">
                    <h3>
                        <?php
                         echo $_SESSION['success'];
                         unset($_SESSION['success']);
                        ?>
                    </h3>


            <?php endif ?>

            <!--logged in user information-->
            <!-- <?php //if(isset($_SESSION['username'])) ; ?> -->
<!--
              <h4 style="color: blue;">Welcome</h4> <strong><?php// echo $_SESSION['username']; ?></strong>
              <p><a href="index.php?logout='1' " style="color: red;">Signout</a></p> -->

</div>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
       <div class="container">
           <a class="navbar-brand active" href="index.php"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
                   </li>
                   <li class="nav-item">
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
   </nav>

   <!--Corousel-->
   <div class="container">
       <div class="row row-content">
           <div class="col">
               <div id="mycarousel" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                           <img class="d-block img-fluid" src="./Resourses/google.png" alt="Google Pixel">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Google</h2>
                               . . .
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img class="d-block img-fluid" src="./Resourses/huawei.png" alt="Huawei">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Huawei</h2>
                               . . .
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img class="d-block img-fluid" src="./Resourses/iphone.png" alt="Apple Iphone">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Apple</h2>
                               . . .
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img class="d-block img-fluid" src="./Resourses/samsung.png" alt="Samsung">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Samsung</h2>
                               . . .
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img class="d-block img-fluid" src="./Resourses/xiaomi.png" alt="Xiaomi MI">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Xiaomi</h2>
                               . . .
                           </div>
                       </div>
                   </div>
                   <ol class="carousel-indicators">
                       <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#mycarousel" data-slide-to="1"></li>
                       <li data-target="#mycarousel" data-slide-to="2"></li>
                       <li data-target="#mycarousel" data-slide-to="3"></li>
                       <li data-target="#mycarousel" data-slide-to="4"></li>
                   </ol>
                   <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon"></span>
                   </a>
                   <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                       <span class="carousel-control-next-icon"></span>
                   </a>
               </div>
           </div>
       </div>
   </div>

   <!--New Arrival-->
   <section class="on-sale">
       <div class="container">
           <div class="title-box bg-primary">
               <h2>Latest Items</h2>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr1.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                               <a href="product.php"><i class="fas fa-eye"></i></a>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <h4>Samsung A10</h4>
                       <h5>Rs.7300.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr2.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <h4>Huwaei Nova 5T</h4>
                       <h5>Rs.11000.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr3.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <h4>Oppo F11 Pro</h4>
                       <h5>Rs.15000.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr4.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <i class="far fa-star"></i>
                       <h4>Nokia 6.1Plus</h4>
                       <h5>Rs.5500.00</h5>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr5.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <h4>Phone Charger</h4>
                       <h5>Rs.800.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                   <img src="./Resourses/product/pr6.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <h4>Handfree</h4>
                       <h5>Rs.1000.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr7.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <h4>Wireless Charger</h4>
                       <h5>Rs.3300.00</h5>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="product-top">
                       <img src="./Resourses/product/pr8.jpg">
                       <div class="overlay-right">
                           <button type="button" class="btn btn-secondary" title="Quick Shop">
                           <i class="fas fa-eye"></i>
                           </button>
                           <button type="button" class="btn btn-secondary" title="Add To Cart">
                           <i class="fas fa-shopping-cart"></i>
                           </button>
                       </div>
                   </div>
                   <div class="product-bottom text-center">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <i class="far fa-star"></i>
                       <h4>AirPods</h4>
                       <h5>Rs.2700.00</h5>
                   </div>
               </div>
           </div>
       </div>
   </section>



<div class="col-md-4"></div>


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
