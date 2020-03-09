<?php

$db = mysqli_connect('localhost','root','','registeruser');

function store($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
 $element ="
<div class=\"col-6 col-md-3\">
    <div class=\"product-top\">
        <form class =\"\" action=\"myproduct.php\" method=\"post\">
            <img src=\"$productimg\">
            <div class=\"overlay-right\">
                <button type=\"button\" class=\"btn btn-secondary\" title=\"Quick Shop\">
                    <a href=\"product.php\"><i class=\"fas fa-eye\"></i></a>
                </button>
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
 ?>
 <script>
  function redirect(id){
    window.location.href = "dbconnection.php?id="+id;
  }
 </script>