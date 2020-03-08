<?php
// session_start();

$db = mysqli_connect('localhost','root','','registeruser');

if(isset($_POST['upload'])){
    $productname=$_POST['productName'];
    $manufacturer=$_POST['manufacturer'];
    $category=$_POST['category'];
    $actualprice=$_POST['actualprice'];
    $sellingprice=$_POST['sellingprice'];
    $quantity=$_POST['quantity'];
    $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $description=$_POST['description'];

    $query = "INSERT INTO product(product_name,manufacturer,product_category,actualprice,product_price,product_qty,product_image,description) VALUES('$productname','$manufacturer','$category','$actualprice','$sellingprice','$quantity','$image','$description')";
    $query_run = mysqli_query($db,$query);

    if($query_run !=null){
        echo '<script type="text/javascript"> alert("Product successfully added!") </script>';
    }else{
        echo '<script type="text/javascript"> alert("Product failed to add!") </script>';
    }
}

//get products from database
function getProduct(){
    global $db;
    $sql = "SELECT * FROM product";

    $result = mysqli_query($db,$sql);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($result)){
        store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }
?>