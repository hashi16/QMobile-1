<?php
    include('component.php');
    include('dbconnection.php');
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
                    <a href="profile.php" class="nav-link">
                        <i class="fas fa-user-alt"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
            <!--Filter price range-->
            <div class="row ju">
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
            </div>
            <!--Store Products-->
            <div class="row">
                <?php
                    getProduct();
                ?>
            </div><br>

            <!--<div class="row">
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr1.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <a href="./product.php"><i class="fas fa-eye"></i></a>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr2.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr3.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr4.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr5.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                    <img src="./Resourse/product/pr6.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr7.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
                <div class="col-6 col-md-3">
                    <div class="product-top">
                        <img src="./Resourse/product/pr8.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Remove Item" id="remove">
                                <i class="fas fa-minus-circle"></i>
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
            </div>-->
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

    <!---javaScript cdn----->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>