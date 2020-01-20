
<header id="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="store.php" class="navbar-brand">
    <h3 class="px-1">
      <i class="fas fa-shopping-basket"></i>Shopping Store
    </h3>
  </a>
  <button type="button" name="" class="navbar-toggler"
    data-toggle="collapse"
    data-target ="#navbarNavAltmarkup"
    aria-controls="navbarNavAltMarkup"
    aria-expanded="false"
    aria-label ="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="mr-auto"> </div>
  <div class="navbar-nav">
    <a href="cart.php" class="nav-item nav-link active">
      <h5 class="px-1 cart"></h5>
      <i class="fas fa-shopping-cart"></i> Cart
      <!-- <span id="cart_count" class="text-warning bg-light">  0</span> -->
      <?php
      if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
      }else {
        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
      }

       ?>
    </a>

  </div>
</div>
</nav>
</header>
