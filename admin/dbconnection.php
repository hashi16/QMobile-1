<?php
// session_start();

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'registeruser');

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
    $query_run = mysqli_query($connection,$query);

    if($query_run !=null){
        echo '<script type="text/javascript"> alert("Product successfully added!") </script>';
    }else{
        echo '<script type="text/javascript"> alert("Product failed to add!") </script>';
    }
}
?>