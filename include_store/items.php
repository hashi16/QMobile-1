<?php
function store($productname,$actualprice,$productprice,$productimg,$productqty,$productid){
 $element ="

     <div class=\"col-3 col-md-3\">
        <div class=\"product-top\">
        <form class =\"\" action=\"index.php\" method=\"post\">
          <div class=\"card shadow\">
            <div>
              <img src=\"$productimg\">
            </div>
          <div class=\"card-body\">
            <div class=\"overlay-right\">
                <button type=\"button\" class=\"btn btn-warning\" title=\"Quick Shop\">
                    <a href=\"product.php\"><i class=\"fas fa-eye\"></i></a>
                </button>
                <button type=\"submit\" class=\"btn btn-warning\" name=\"add\" title=\"Add To Cart\">
                 <input type='hidden' name='product_id' value='$productid'>
                <i class=\"fas fa-shopping-cart\"></i>
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
