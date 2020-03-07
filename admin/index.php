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
            <img src="./Resourse/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile
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
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div><br>
    <!--Summary cards-->
    <div class="row mr-2 ml-2">
        <div class="col-6 col-sm-3">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-success">
                            <i class="fas fa-chart-bar fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <h4><b>Today Outcome</b></h4>
                        <h4 class="text-muted">10</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-primary">
                            <i class="fas fa-shopping-bag fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <h4><b>Today Orders</b></h4>
                        <h4 class="text-muted">10</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-warning">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <h4><b>Customers</b></h4>
                        <h4 class="text-muted">10</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <div class="card card-body bg-danger">
                            <i class="fas fa-comment-dots fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 align-self-center">
                        <h4><b>Feedbacks</b></h4>
                        <h4 class="text-muted">10</h4>
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
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div><br>
    <div class="card-columns">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below 
                    as a natural lead-in to additional content. This content is a little bit longer.
                </p>
            </div>
        </div>
        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card bg-primary text-white text-center p-3">
            <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer class="blockquote-footer text-white">
                    <small>
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="card p-3 text-right">
          <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">
                  <small class="text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
              </footer>
            </blockquote>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    
    <!---javaScript cdn----->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>