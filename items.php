<?php
function store($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
 $element ="
<div class=\"col-6 col-md-3\">
    <div class=\"product-top\">
        <form class =\"\" action=\"store.php\" method=\"post\">
            <img src=\"$productimg\">
            <div class=\"overlay-right\">
                <a href='product.php?gid=$productid' class=\"btn btn-warning\" title=\"View\" >
                    <input type='hidden' name='product_id' value='$productid'>
                    <i class=\"fas fa-eye\"></i>
                </a>
                <button type=\"submit\" class=\"btn btn-warning\" name=\"add\" title=\"Add To Cart\">
                    <input type='hidden' name='product_id' value='$productid'>
                    <i class=\"fas fa-shopping-cart\"></i>
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


function cartElement($productimg, $productname,$productprice,$productqty,$productid){
  $element="
    <div class=\"border rounded\">
      <div class=\"row bg-white\">
        <div class=\"col-md-3 pl-0\">
          <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-6\">
          <h5 class=\"pt-2\"><strong>$productname</strong></h5>
           <h5 class=\"pt-2\">Rs.$productprice</h5>

           <a href='cart.php?oid=$productid' name=\"order\" class=\"btn btn-success\">Order</a>
           
           <a href='cart.php?id=$productid' name=\"remove\" class=\"btn btn-danger mx-2\">Remove</a>
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
  function product(gid){
    window.location.href = "product.php?id="+id;
  }
 </script>