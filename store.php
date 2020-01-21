<?php
include('include_store\component.php');
include('dbconnection.php');

if(isset($_POST['add'])){
  //print_r($_POST['product_id']);


  if(isset($_SESSION['cart'])){
    $item_array_id = array_column($_SESSION['cart'],"product_id");
    // print_r($item_array_id);
    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script>alert('Product is already added in the cart..')</script>";
      echo "<script>window.location = 'store.php'</script>";
    }else {
      $count = count($_SESSION['cart']);
      $item_array=array(
        'product_id' => $_POST['product_id']
      );
      $_SESSION['cart'][$count] = $item_array;
      // print_r($_SESSION['cart']);
    }
  }else {
    $item_array=array(
      'product_id' => $_POST['product_id']
    );
    //cerate new session variable
    $_SESSION['cart'][0] = $item_array;
     //print_r($_SESSION['cart']);
  }
}


// include('cart.php');

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha256-qvCL5q5O0hEpOm1CgOLQUuHzMusAZqDcAZL9ijqfOdI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.css" integrity="sha256-+bpMasWDxDlsVpNW3oZlL7L4RacwsP70u2fZt6Rxrmc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css" integrity="sha256-G3IAYJYIQvZgPksNQDbjvxd/Ca1SfCDFwu2s2lt0oGo=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/Custom.css">

    <title>Store</title>
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
                   <li class="nav-item">
                       <a class="nav-link" href="about.php"><span class="fa fa-info fa-lg"></span> About</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>

                   </li>
                   <li class="nav-item">
                       <a class="nav-link active" href="store.php"><span class="fas fa-warehouse fa-lg"></span> Store</a>
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
   </nav><br>

   <!-- Breadcrumb -->
   <div class="container">
       <div class="row">
           <ol class="col-12 breadcrumb">
               <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
               <li class="breadcrumb-item active">Store</li>
           </ol>
       </div>
   </div>

   <div class="container">
       <div class="row">
           <!--Product Manufactor & Product Category-->
           <div class="col-md-3 d-none d-sm-block">
               <div class="list-group" style="align-items: center;">
                   <h5 class="list-group-item list-group-item-action bg-info">Manufactor</h5>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Apple</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Samsung</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Huawei</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Xiaomi</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Google</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Nokia</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Oppo</a><br>

                   <h5 class="list-group-item list-group-item-action bg-info">Product Category</h5>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Mobile Phone</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Handfree</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Charger</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Tempered Glass</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Back Cover</a>
                   <a href="#" class="list-group-item list-group-item-action bg-light">Battery</a><br>
                 </div>
           </div>

           <div class="col-md-9">

             <?php include('include_store\header.php'); ?>
               <!--Filter price range-->
               <!-- <div class="row">
                   <div class="col-12">
                       <div class="card card-body bg-light">
                           <form class="form-inline" method="post" enctype="multipart/form-data">
                               <label for="">Price Range: &nbsp;</label>
                               <div class="form-group">
                                   <label for="">Min (Rs:) &nbsp;</label>
                                   <input type="text" class="form-control" name="minPrice" pattern="[0-9]*">
                               </div>
                               <div class="form-group">
                                   <label for="">&nbsp; Max (Rs:)  &nbsp;</label>
                                   <input type="text" class="form-control" name="maxPrice" pattern="[0-9]*"> &nbsp; &nbsp;
                               </div>
                               <div class="form-group text-center">
                                   <input type="submit" value="Sort" name="priceSort" class="btn btn-success">
                               </div>
                           </form>
                       </div><br>
                   </div>
               </div> -->
               <!--Store Products-->

<div class="row">
<?php
    getProduct();
   ?>
</div>
<!-- </div> -->
               <!--Paginations-->
               <div class="row">
                   <div class="col-md-12">
                       <nav aria-label="Page navigation example">
                           <ul class="pagination justify-content-center">
                               <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                               <li class="page-item active"><a class="page-link" href="#">1</a></li>
                               <li class="page-item"><a class="page-link" href="#">2</a></li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item"><a class="page-link" href="#" tabindex="+1">Next</a></li>
                           </ul>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <!-- Footer -->

  <?php include('footer.php') ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
