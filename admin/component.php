<?php
function store($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
 $element ="

     <div class=\"col-6 col-md-3\">
        <div class=\"product-top\">
        <form class =\"\" action=\"store.php\" method=\"post\">
          <div class=\"card shadow\">
            <div>
              <img src=\"$productimg\">
            </div>
          <div class=\"card-body\">
            <div class=\"overlay-right\">
                <button type=\"button\" class=\"btn btn-secondary\" title=\"Quick Shop\">
                    <a href=\"product.php\"><i class=\"fas fa-eye\"></i></a>
                </button>
                <button type=\"button\" class=\"btn btn-secondary\" title=\"Remove Item\" id=\"remove\">
                    <input type='hidden' name='product_id' value='$productid'>
                    <i class=\"fas fa-minus-circle\"></i>
                </button>
            </div>
        </div>
        <div class=\"product-bottom text-center\">
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star-half-alt\"></i>
            <h4>$productname</h4>
            <h5>$manufacturer</h5>
            <h5>$productcatogory</h5>
           <small><s class=\"text-secondary\">RS.$actualprice</s></small>
            <h5>Rs.$productprice</h5>
        </div>
    </div>
    </form>
 </div>
</div>

";
echo $element;
}
 ?>