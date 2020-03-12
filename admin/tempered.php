<?php
    session_start();
    include('component.php');
    include('dbconnection.php');

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
    <link rel="stylesheet" href="./css/stylemyproduct.css">
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
                    <a href="./index.php" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">
                            <i class="fab fa-product-hunt"></i> Products
                        </a>
                        <div class="dropdown-menu">
                            <a href="addproduct.php" class="dropdown-item"> Add Product</a>
                            <a href="myproducts.php" class="dropdown-item active"> My Products</a>
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
        <h1>&nbsp;&nbsp;My Products</h1>
    </div><br>

    <!--Store-->
    <div class="row">
        <!--Product Manufactor & Product Category-->
        <div class="col-md-2 d-none d-sm-block">
            <div class="list-group ml-4" style="align-items: center;">
                <h5 class="list-group-item list-group-item-action bg-info">Manufacturer</h5>
                <a href="apple.php" class="list-group-item list-group-item-action bg-light">Apple</a>
                <a href="samsung.php" class="list-group-item list-group-item-action bg-light">Samsung</a>
                <a href="huawei.php" class="list-group-item list-group-item-action bg-light">Huawei</a>
                <a href="xiaomi.php" class="list-group-item list-group-item-action bg-light">Xiaomi</a>
                <a href="google.php" class="list-group-item list-group-item-action bg-light">Google</a>
                <a href="nokia.php" class="list-group-item list-group-item-action bg-light">Nokia</a>
                <a href="oppo.php" class="list-group-item list-group-item-action bg-light">Oppo</a><br>

                <h5 class="list-group-item list-group-item-action bg-info">Product Category</h5>
                <a href="mobilephone.php" class="list-group-item list-group-item-action bg-light">Mobile Phone</a>
                <a href="handfree.php" class="list-group-item list-group-item-action bg-light">Handfree</a>
                <a href="charger.php" class="list-group-item list-group-item-action bg-light">Charger</a>
                <a href="tempered.php" class="list-group-item list-group-item-action bg-light">Tempered Glass</a>
                <a href="backcover.php" class="list-group-item list-group-item-action bg-light">Back Cover</a>
                <a href="battery.php" class="list-group-item list-group-item-action bg-light">Battery</a><br>
            </div>
        </div>
        <div class="col-md-9">
            <!--Filter price range-->
            <!-- <div class="row ju">
                <div class="col-12">
                    <div class="card card-body bg-light">
                        <form class="form-inline justify-content-center" method="post" enctype="multipart/form-data">
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
                    getTempered();
                ?>
            </div><br>
        </div>
    </div>

    <!---javaScript cdn----->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>