<?php

$db = mysqli_connect('localhost','root','','registeruser');

function store($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
 $element ="
<div class=\"col-6 col-md-3\">
    <div class=\"product-top\">
        <form class =\"\" action=\"myproduct.php\" method=\"post\">
            <img src=\"$productimg\">
            <div class=\"overlay-right\">
                <a href='product.php?gid=$productid' class=\"btn btn-secondary\" title=\"View\" >
                    <input type='hidden' name='product_id' value='$productid'>
                    <i class=\"fas fa-eye\"></i>
                </a>
                <button onclick='redirect($productid)' type='button' class=\"btn btn-secondary\" title=\"Remove Item\" id=\"remove\" name=\"remove\">
                    <input type='hidden' name='product_id' value='$productid'>
                    <i class=\"fas fa-minus-circle\"></i>
                </button>
            </div>
            <div class=\"product-bottom text-center\">
                <h4>$productname</h4>
                <h5>$manufacturer</h5>
                <h5>$productcatogory</h5>
                <small><s class=\"text-secondary\">RS.$actualprice</s></small>
                <h5>Rs.$productprice</h5>
            </div>
        </form>
    </div>
</div>
";
echo $element;
}

function singleItem($productname,$productprice,$productimg,$productqty,$productcatogory,$manufacturer,$description){
    $element2 ="
    <section class='single-product'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-5'>
                    <div id='product-slider'>
                        <div>
                            <img src='$productimg' class='d-block'>
                        </div>
                    </div>
                </div>
                <div class='col-md-7'>
                    <h2>$productname</h2>
                    <p class='price'>$productprice</p>
                    <p><b>Brand : </b>$manufacturer</p>
                    <p><b>Category : </b>$productcatogory</p>
                    <p><b>Remaining Quantity : </b>$productqty</p>
                    <button type='button' class='btn btn-secondary'>Edit Product</button>
                </div>
            </div>
        </div>
    </section>

    <section class='product-descrption mt-3'>
        <div class='container'>
            <h6>Product Description</h6>
            <p>
                $description
            </p>
            <hr>
        </div>
    </section>
    ";
    echo $element2;
}
 ?>
 <script>
  function redirect(id){
    window.location.href = "dbconnection.php?id="+id;
  }
  function product(gid){
    window.location.href = "product.php?id="+id;
  }
 </script>