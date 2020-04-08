<?php
error_reporting(0);
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
    <link rel="stylesheet" href="./css/styledashboard.css">
</head>

<body>
    <!---------navbar-------->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">&nbsp;&nbsp;
            <img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link active" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fab fa-product-hunt"></i> Products
                        </a>
                        <div class="dropdown-menu">
                            <a href="addproduct.php" class="dropdown-item"> Add Product</a>
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
        <h1>&nbsp;&nbsp;<i class="fas fa-chart-bar"></i> Dashboard</h1>
    </div><br>

    <!--Dashboard content-->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select * from feedback ORDER BY feed_id DESC Limit 1");
                            $row = mysqli_fetch_row($result);        
                        ?> 
            <h5 class="card-title">Latest Feedback</h5>
            <p class="card-text"><?php echo "<b>".$row[5]."</b>"; echo "<br>"; echo $row[6]; echo "<br>"; ?></p>
            <a href="feedback.php" class="btn btn-primary">View Feedback</a>
        </div>
    </div><br>
    <!--Summary cards-->
    <div class="row mr-2 ml-2">
        <div class="col-6 col-sm-4">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-primary">
                            <i class="fas fa-shopping-bag fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select count(1) FROM orders");
                            $row = mysqli_fetch_array($result);
                            $total = $row[0];
                        ?>
                        <h4><b>Today Orders</b></h4>
                        <h4 class="text-muted"><?php echo $total; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-warning">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select count(1) FROM user");
                            $row = mysqli_fetch_array($result);
                            $total = $row[0];
                        ?>
                        <h4><b>Customers</b></h4>
                        <h4 class="text-muted"><?php echo $total; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-danger">
                            <i class="fas fa-comment-dots fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select count(1) FROM feedback");
                            $row = mysqli_fetch_array($result);
                            $total = $row[0];
                        ?>
                        <h4><b>Feedbacks</b></h4>
                        <h4 class="text-muted"><?php echo $total; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Special content-->
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select * from user ORDER BY Reg_ID DESC Limit 1");
                            $row = mysqli_fetch_row($result);        
                        ?> 
                    <h5 class="card-title">Recently Registered Customer</h5>
                    <p class="card-text"><?php echo "<b>Name: </b>" .$row[1]; echo "\t"; echo $row[2]; echo "<br>"; echo "<b>Contact No: </b>" .$row[5]; echo "<br>"; echo "<b>Email: </b>" .$row[4]; echo "<br>"; echo "<b>Address: </b>" .$row[6]; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select * from orders ORDER BY orderId DESC Limit 1");
                            $row = mysqli_fetch_row($result);        
                        ?> 
                    <h5 class="card-title">Recent Order</h5>
                    <p class="card-text"><?php echo "<b>Order Date: </b>" .$row[1]; echo "<br>"; echo "<b>Status: </b>" .$row[2]; echo "<br>"; echo "<b>Order Name: </b>" .$row[3]; echo "<br>"; echo "<b>Price: </b>" .$row[4]; ?></p>
                    <a href="order.php" class="btn btn-primary">View Order</a>
                </div>
            </div>
        </div>
    </div><br>
    <div class="card-columns">
        <div class="card">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select * from product ORDER BY id DESC Limit 1");
                            $row = mysqli_fetch_row($result);        
                        ?> 
            <img src=<?php echo $row[7]; ?> class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Recently Added Product</h5>
                <p class="card-text"><?php echo "<b>Product Name: </b>" .$row[1]; echo "<br>"; echo "<b>Manufacture: </b>" .$row[2]; echo "<br>";
                 echo "<b>Price: </b>" .$row[5]; echo "<br>"; echo "<b>Quantity: </b>" .$row[6]; ?>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                        <?php 
                            $db = mysqli_connect('localhost','root','','registeruser');
                            $result = mysqli_query($db,"select * from payment ORDER BY paymentId DESC Limit 1");
                            $row = mysqli_fetch_row($result);        
                        ?>
                <h5 class="card-title">Recently Made payment</h5>
                <p class="card-text"><?php echo "<b>amount: </b>" .$row[1]; echo "<br>"; echo "<b>Date: </b>" .$row[2]; echo "<br>";
                 echo "<b>Method: </b>" .$row[3]; ?></p>
                
            </div>
        </div> 
    </div>
    
    <!---javaScript cdn----->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>