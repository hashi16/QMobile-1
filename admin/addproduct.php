<?php
include('dbconnection.php');
//require_once('dbconnection.php') ;
session_start();

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: admin_login.php');
    }
    function isLoggedIn(){
        if(isset($_SESSION['username'])){
            return true;
        }else{
            return false;
        }    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!---------navbar-------->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="./index.php" class="navbar-brand">&nbsp;&nbsp;
            <img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link ">
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">
                            <i class="fab fa-product-hunt"></i> Products
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item active"> Add Product</a>
                            <a href="myproducts.php" class="dropdown-item"> My Products</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-shopping-bag fa-lg"></i> Orders
                        </a>
                        <div class="dropdown-menu">
                            <a href="order.php" class="dropdown-item"> Orders Overview</a>
                            <a href="feedback.php" class="dropdown-item"> Manage Feedback</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="register_admin.php" class="nav-link">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                </li>
                <li class="nav-item">
                <?php
                        if($_SESSION['username']==true){
                    ?>
                            <i style="#888;">(<?php echo $_SESSION['username']; ?>)</i><br>
                    <?php }else{
                            header('location:admin_login.php');
                        }
                    ?>
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>               
            </ul>
        </div>
    </nav>

    <!----text-white-py------------->
    <div class="text-white py-3" style="background-color: teal;">
        <h1>&nbsp;&nbsp;Add Product</h1>
    </div><br>

    <!----Card---->
    <div class="card card-body">
        <form action="dbconnection.php" method="post" enctype="multipart/form-data">
            <h4 class="card-header">What You're Selling</h4><br>
            <div class="card-text">
                <div class="form-group row">
                    <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="productName" id="productName" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="manufacturer" class="col-sm-2 col-form-label">Manufacturer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="manufacturer" id="manufacturer" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="category" id="category" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="actualprice" class="col-sm-2 col-form-label">Actual Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="actualprice" id="actualprice">
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="sellingprice" class="col-sm-2 col-form-label">Selling Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="sellingprice" id="sellingprice" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="quantity" id="quantity" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="importimg" class="col-sm-2 col-form-label">Import Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary ml-auto" id="upload" name="upload" value="Submit">
        </form>
    </div>
    
<!---javaScript cdn----->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>