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



function cartElement($productimg, $productname,$productprice,$productqty,$productid,$manufacturer){
  $element="
<form class=\"cart-items\" action=\"cart.php?action=remove&id=$productid\" method=\"post\">
    <div class=\"border rounded\">
      <div class=\"row bg-white\">
        <div class=\"col-md-3 pl-0\">
          <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-6\">
          <h5 class=\"pt-2\"><strong>$productname</strong></h5>
           <h5 class=\"pt-2\">Rs.$productprice</h5>

           <button type=\"submit\" name=\"order\" class=\"btn btn-success\">Order</button>
           

           <button type=\"submit\" name=\"remove\" class=\"btn btn-danger mx-2\">Remove</button>
        </div>
        <div class=\"col-md-3 py-5\">
           <div>
           <button type=\"submit\" name=\"\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i> </button>
            <input type=\"text\" name=\"qty\" value=\"1\" class=\"form-control w-25 d-inline\">
          <button type=\"submit\" name=\"\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i> </button>
        </div>
        </div>


       </div>
    </div>
</form>

  ";
  echo $element;
}




 ?>
