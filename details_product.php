<?php
 include('functions.php');
 ?>

 <?php

  if(isset($_GET['productId'])){

    $productId = $_GET['productId'];
    $productId = $rowDetails['productId'];
    $proName = $rowDetails['proName'];
    $price = $rowDetails['price'];
    $proImage = $rowDetails['proImage'];
    $productManu = $rowDetails['manuId'];
    $productCate = $rowDetails['categoryId'];

    $sql = "SELECT * FROM product WHERE productId = '$productId'";

    $getDetail = mysqli_query($db, $sql);
    $rowDetails = mysqli_fetch_array($getDetail);


    $getManufacturersql = "SELECT * FROM manufacture WHERE manuId = $productManu";
    $getManufacturerDetails = mysqli_query($db, $getManufacturersql);
    $rowGetManufactureDatails = mysqli_fetch_array($getManufacturerDetails);

    $getCategorySql ="SELECT * FROM category WHERE categoryId ='$productCate'";
		$getCategoryDetails = mysqli_query($conn,$getCategorySql);
		$rowGetCategoryDetails = mysqli_fetch_array($getCategoryDetails);

		$manName = $rowGetManufacureDetails['manName'];
		$cateName = $rowGetCategoryDetails['catName'];
}


?>
