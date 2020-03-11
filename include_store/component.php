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


function backcover($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $backcover ="
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
   echo $backcover;
   }


   function handfree($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $handfree ="
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
   echo $handfree;
   }


   function huawei($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $huawei ="
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
   echo $huawei;
   }


   function samsung($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $samsung ="
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
   echo $samsung;
   }


   function apple($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $apple ="
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
   echo $apple;
   }


   function xiaomi($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $xiaomi ="
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
   echo $xiaomi;
   }


   function google($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $google ="
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
   echo $google;
   }


   function nokia($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $nokia ="
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
   echo $nokia;
   }


   function oppo($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $oppo ="
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
   echo $oppo;
   }


   function mobilephone($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $mobilephone ="
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
   echo $mobilephone;
   }


   function charger($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $charger ="
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
   echo $charger;
   }


   function tempered($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $tempered ="
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
   echo $tempered;
   }


   function battery($productname,$actualprice,$productprice,$productimg,$productqty,$productid,$productcatogory,$manufacturer){
    $battery ="
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
   echo $battery;
   }
 ?>
 <script>
  function product(gid){
    window.location.href = "product.php?id="+id;
  }
 </script>