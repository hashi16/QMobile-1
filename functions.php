<?php
include('dbconnection.php');
//
// function getUsersData($fname){
//   $que = mysqli_query("SELECT * FROM user WHERE username =" .$username);
//   while ($r = mysqli_fetch_assoc($que ) ) {
//     $array['']
//   }
// }


// Store.php
function getManufactures(){
 global $db;
$sql = "SELECT * FROM  manufacturer OREDER BY 1 LIMIT 0,10 ";
$getManufacturer = mysqli_query($db, $sql);

while ($rowManufacturer = mysqli_fetch_array($getManufacturer)) {

  $manuId = $rowManufacturer['$manuId'];
  $manuName = $rowManufacturer['$manuName'];
  $manImage = $rowManufacturer['$manImage'];

  echo
  "<li><a href='store.php?manufacturer='$manuId'>$manuName </a></li>";
 }
}


function getCategory(){
 global $db;
$sql = "SELECT * FROM  category  ";
$getCategory = mysqli_query($db, $sql);

while ($rowCategory = mysqli_fetch_array($getCategory)) {

  $categoryId = $rowManufacturer['$categoryId'];
  $catName = $rowManufacturer['$catName'];
  $catImage = $rowManufacturer['$catImage'];

  echo
  "<li><a href='store.php?manufacturer='$categoryId'>$catName </a></li>";
 }
}

function sortManufacture(){
 global $db;
 if(isset($_GET['manufacture'])){

$sql = "SELECT * FROM  produt WHERE $manuId='$manuId'  ";
$sortManufacture = mysqli_query($db, $sql);

while ($rowManufatureSort = mysqli_fetch_array($sortManufacture)) {

  $productId = $rowManufatureSort['$productId'];
  $proName = $rowManufatureSort['$proName'];
  $price = $rowManufatureSort['$price'];
  $proImage = $rowManufatureSort['$proImage'];

  // echo
  // "<li><a href='store.php?manufacturer='$categoryId'>$catName </a></li>";
 }
}
}

function sortCategory(){
 global $db;
 if(isset($_GET['category'])){

$sql = "SELECT * FROM  produt WHERE $categoryId='$categoryId'  ";
$sortCategory = mysqli_query($db, $sql);

while ($rowCategorySort = mysqli_fetch_array($sortCategory)) {

  $productId = $rowManufatureSort['$productId'];
  $proName = $rowManufatureSort['$proName'];
  $price = $rowManufatureSort['$price'];
  $proImage = $rowManufatureSort['$proImage'];

  // echo
  // "<li><a href='store.php?manufacturer='$categoryId'>$catName </a></li>";
 }
}
}



 ?>
