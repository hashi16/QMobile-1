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

function singleItem($productname,$productprice,$productimg,$productqty,$productcatogory,$manufacturer,$description,$id){
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
                    <a href='editproduct.php?eid=$id' class='btn btn-secondary'>Edit Product</a>
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

function editSingleItem($productname,$sellingprice,$productimage,$productqty,$productcategory,$manufacturer,$description,$actualprice){
    $editdetail ="
        <div class='card card-body'>
            <form action='dbconnection.php' method='post' enctype='multipart/form-data'>
                <h4 class='card-header'>Edit Here What You're Selling</h4><br>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='productName' class='col-sm-2 col-form-label'>Product Name</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='productNameEdit' id='productNameEdit' placeholder='$productname' required>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='manufacturer' class='col-sm-2 col-form-label'>Manufacturer</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='manufacturerEdit' id='manufacturerEdit' placeholder='$manufacturer' required>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='category' class='col-sm-2 col-form-label'>Category</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='categoryEdit' id='categoryEdit' placeholder='$productcategory' required>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='actualprice' class='col-sm-2 col-form-label'>Actual Price</label>
                        <div class='col-sm-10'>
                            <input type='number' class='form-control' name='actualpriceEdit' id='actualpriceEdit' placeholder='$actualprice'>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='sellingprice' class='col-sm-2 col-form-label'>Selling Price</label>
                        <div class='col-sm-10'>
                            <input type='number' class='form-control' name='sellingpriceEdit' id='sellingpriceEdit' placeholder='$sellingprice' required>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='quantity' class='col-sm-2 col-form-label'>Quantity</label>
                        <div class='col-sm-10'>
                            <input type='number' class='form-control' name='quantityEdit' id='quantityEdit' placeholder='$productqty' required>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='description' class='col-sm-2 col-form-label'>Description</label>
                        <div class='col-sm-10'>
                            <textarea class='form-control' name='descriptionEdit' id='descriptionEdit' rows='4'>$description</textarea>
                        </div>
                    </div>
                </div>
                <div class='card-text'>
                    <div class='form-group row'>
                        <label for='importimg' class='col-sm-2 col-form-label'>Import Image</label>
                        <div class='col-sm-10'>
                            <div class='custom-file'>
                                <input type='file' id='imageEdit' name='imageEdit' placeholder='$productimage'>
                            </div>
                        </div>
                    </div>
                </div>
                <input type='submit' class='btn btn-primary ml-auto' id='editproductitem' name='editproductitem' value='Edit'>
            </form>
        </div>
    ";
    echo $editdetail;
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