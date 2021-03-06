<?php
    //session_start();
    $db = mysqli_connect('localhost','root','','registeruser');


    //add products to the database
    if(isset($_POST['upload'])){
        $productname=$_POST['productName'];
        $manufacturer=$_POST['manufacturer'];
        $category=$_POST['category'];
        $actualprice=$_POST['actualprice'];
        $sellingprice=$_POST['sellingprice'];
        $quantity=$_POST['quantity'];
        $image="Resourses/product/".basename($_FILES["image"]["name"]);
        $description=$_POST['description'];

        $query = "INSERT INTO product(product_name,manufacturer,product_category,actualprice,product_price,product_qty,product_image,description) VALUES('$productname','$manufacturer','$category','$actualprice','$sellingprice','$quantity','$image','$description')";
        $query_run = mysqli_query($db,$query);

        if($query_run !=null){
            header("refresh:1;url=addproduct.php");
            echo '<script type="text/javascript"> alert("Product successfully added!") </script>';
        }else{
            header("refresh:1;url=addproduct.php");
            echo '<script type="text/javascript"> alert("Product failed to add!") </script>';
        }
    }


    //edit product details
    function editProductDetails(){
        if(isset($_GET['eid'])){
            global $db;
            $editproductdetail= "SELECT * FROM product where id='$_GET[eid]'";
            $editproductdetail_result = mysqli_query($db,$editproductdetail);
            while($row = mysqli_fetch_assoc($editproductdetail_result)){
                editSingleItem($row['product_name'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['product_category'],$row['manufacturer'],$row['description'],$row['actualprice']);
            }
        }
    }


    //edit products of the database
    if(isset($_POST['editproductitem'])){
        $productnameEdit=$_POST['productNameEdit'];
        $manufacturerEdit=$_POST['manufacturerEdit'];
        $categoryEdit=$_POST['categoryEdit'];
        $actualpriceEdit=$_POST['actualpriceEdit'];
        $sellingpriceEdit=$_POST['sellingpriceEdit'];
        $quantityEdit=$_POST['quantityEdit'];
        $imageEdit="Resourses/product/".basename($_FILES["imageEdit"]["name"]);
        $descriptionEdit=$_POST['descriptionEdit'];

        $queryedit = "UPDATE product SET manufacturer = '$manufacturerEdit', product_category = '$categoryEdit', actualprice = '$actualpriceEdit', product_price = '$sellingpriceEdit', product_qty = '$quantityEdit', product_image = '$imageEdit', description = '$descriptionEdit' WHERE product_name = '$productnameEdit'";
        $queryedit_run = mysqli_query($db,$queryedit);

        if($queryedit_run !=null){
            header("refresh:1;url=myproducts.php");
            echo '<script type="text/javascript"> alert("Product successfully edited!") </script>';
        }else{
            header("refresh:1;url=myproducts.php");
            echo '<script type="text/javascript"> alert("Product failed to edit!") </script>';
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

    //get understock from database
    function getUnderstockingProduct(){
      global $db;
      $sql = "SELECT * FROM product WHERE product_qty<=10";
      $result = mysqli_query($db,$sql);
      // if(mysqli_num_rows($result)>0){
      //   return $result;
      while($row = mysqli_fetch_assoc($result)){
          store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
      }
  }


    //delete products from database
    if(isset($_GET['id'])){
        global $db;
        $delete= "DELETE FROM product where id='$_GET[id]'";
        if(mysqli_query($db,$delete)){
            header("refresh:1;url=myproducts.php");
            echo '<script type="text/javascript"> alert("Product successfully Removed!") </script>';
        }else{
            header("refresh:1;url=myproducts.php");
            echo "<script type='text/javascript'>alert('Product failed to remove!')</script>";
        }
    }

    //View products in details
    function getProductDetail(){
        if(isset($_GET['gid'])){
            global $db;
            $productdetail= "SELECT * FROM product where id='$_GET[gid]'";
            $productdetail_result = mysqli_query($db,$productdetail);
            while($row = mysqli_fetch_assoc($productdetail_result)){
                singleItem($row['product_name'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['product_category'],$row['manufacturer'],$row['description'],$row['id']);
            }
        }
    }


    //Get order details from database
    function getOrderDetails(){
        global $db;
        $order = "SELECT * FROM orders ORDER BY orderId DESC";
        $order_result = mysqli_query($db,$order);
        while($row = mysqli_fetch_assoc($order_result)){
            orderdetails($row['orderId'],$row['orderdate'],$row['customer'],$row['orderName'],$row['price']);
        }
    }
    function orderdetails($orderId,$orderdate,$customer,$orderName,$price){
        echo "<tr>";
            echo "<td>$orderId</td>";
            echo "<td>$orderdate</td>";
            echo "<td>$customer</td>";
            echo "<td>$orderName</td>";
            echo "<td>$price</td>";
        echo "</tr>";
    }

    //Get customer details from database
    function getCustomerDetails(){
      global $db;
      $user = "SELECT * FROM user";
      $user_result = mysqli_query($db,$user);
      while($row = mysqli_fetch_assoc($user_result)){
        customerdetails($row['Reg_ID'],$row['fname'],$row['lname'],$row['username'],$row['email'],$row['contactNo'],$row['address']);
      }
  }
  function customerdetails($Reg_ID,$fname,$lname,$username,$email,$contactNo,$address){
      echo "<tr>";
          echo "<td>$Reg_ID</td>";
          echo "<td>$fname&nbsp$lname</td>";
          echo "<td>$username</td>";
          echo "<td>$email</td>";
          echo "<td>$contactNo</td>";
          echo "<td>$address</td>";
      echo "</tr>";
  }

    
    //Get feedback details from database
    function getFeedbackDetails(){
        global $db;
        $feedback = "SELECT * FROM feedback ORDER BY feed_id DESC";
        $feedback_result = mysqli_query($db,$feedback);
        while($row = mysqli_fetch_assoc($feedback_result)){
            feedbackdetails($row['firstname'],$row['lastname'],$row['contactno'],$row['email'],$row['subject'],$row['feedback']);
        }
    }
    function feedbackdetails($firstname,$lastname,$contactno,$email,$subject,$feedback){
        echo "<tr>";
            echo "<td>$firstname&nbsp$lastname</td>";
            echo "<td>$contactno</td>";
            echo "<td>$email</td>";
            echo "<td>$subject</td>";
            echo "<td>$feedback</td>";
        echo "</tr>";
    }


  //get mobile phone from database to mobile phone page
  function getMobilePhone(){
    global $db;
    $mobilephone = "SELECT * FROM product WHERE product_category='Mobile Phone'";

    $mobilephoneresult = mysqli_query($db,$mobilephone);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($mobilephoneresult)){
        mobilephone($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get backcovers from database to back cover page
  function getBackCover(){
    global $db;
    $backcover = "SELECT * FROM product WHERE product_category='Back Cover'";

    $backcoverresult = mysqli_query($db,$backcover);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($backcoverresult)){
        backcover($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get handfree from database to handfree page
  function getHandfree(){
    global $db;
    $handfree = "SELECT * FROM product WHERE product_category='Handfree'";

    $handfreeresult = mysqli_query($db,$handfree);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($handfreeresult)){
        handfree($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get charger from database to charger page
  function getCharger(){
    global $db;
    $charger = "SELECT * FROM product WHERE product_category='Charger'";

    $chargerresult = mysqli_query($db,$charger);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($chargerresult)){
        charger($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get battery from database to battery page
  function getBattery(){
    global $db;
    $battery = "SELECT * FROM product WHERE product_category='Battery'";

    $batteryresult = mysqli_query($db,$battery);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($batteryresult)){
        battery($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get tempered from database to tempered page
  function getTempered(){
    global $db;
    $tempered = "SELECT * FROM product WHERE product_category='Tempered'";

    $temperedresult = mysqli_query($db,$tempered);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($temperedresult)){
        tempered($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get huawei from database to huawei page
  function getHuawei(){
    global $db;
    $huawei = "SELECT * FROM product WHERE manufacturer='Huawei'";

    $huaweiresult = mysqli_query($db,$huawei);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($huaweiresult)){
        huawei($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get xiaomi from database to xiaomi page
  function getXiaomi(){
    global $db;
    $xiaomi = "SELECT * FROM product WHERE manufacturer='Xiaomi'";

    $xiaomiresult = mysqli_query($db,$xiaomi);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($xiaomiresult)){
        xiaomi($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get google from database to google page
  function getGoogle(){
    global $db;
    $google = "SELECT * FROM product WHERE manufacturer='Google'";

    $googleresult = mysqli_query($db,$google);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($googleresult)){
        google($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get nokia from database to nokia page
  function getNokia(){
    global $db;
    $nokia = "SELECT * FROM product WHERE manufacturer='Nokia'";

    $nokiaresult = mysqli_query($db,$nokia);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($nokiaresult)){
        nokia($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get oppo from database to oppo page
  function getOppo(){
    global $db;
    $oppo = "SELECT * FROM product WHERE manufacturer='Oppo'";

    $opporesult = mysqli_query($db,$oppo);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($opporesult)){
        oppo($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get apple from database to apple page
  function getApple(){
    global $db;
    $apple = "SELECT * FROM product WHERE manufacturer='Apple'";

    $appleresult = mysqli_query($db,$apple);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($appleresult)){
        apple($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get samsung from database to samsung page
  function getSamsung(){
    global $db;
    $samsung = "SELECT * FROM product WHERE manufacturer='Samsung'";

    $samsungresult = mysqli_query($db,$samsung);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($samsungresult)){
        samsung($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get mobile phone from database to understocking mobile phone page
  function getUnderstockingMobilePhone(){
    global $db;
    $mobilephone = "SELECT * FROM product WHERE (product_category='Mobile Phone' AND product_qty<=10)";

    $mobilephoneresult = mysqli_query($db,$mobilephone);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($mobilephoneresult)){
        mobilephone($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get backcovers from database to understocking back cover page
  function getUnderstockingBackCover(){
    global $db;
    $backcover = "SELECT * FROM product WHERE (product_category='Back Cover' AND product_qty<=10)";

    $backcoverresult = mysqli_query($db,$backcover);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($backcoverresult)){
        backcover($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get handfree from database to understocking handfree page
  function getUnderstockingHandfree(){
    global $db;
    $handfree = "SELECT * FROM product WHERE (product_category='Handfree' AND product_qty<=10)";

    $handfreeresult = mysqli_query($db,$handfree);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($handfreeresult)){
        handfree($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get charger from database to understocking charger page
  function getUnderstockingCharger(){
    global $db;
    $charger = "SELECT * FROM product WHERE (product_category='Charger' AND product_qty<=10)";

    $chargerresult = mysqli_query($db,$charger);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($chargerresult)){
        charger($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get battery from database to understocking battery page
  function getUnderstockingBattery(){
    global $db;
    $battery = "SELECT * FROM product WHERE (product_category='Battery' AND product_qty<=10)";

    $batteryresult = mysqli_query($db,$battery);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($batteryresult)){
        battery($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get tempered from database to understocking tempered page
  function getUnderstockingTempered(){
    global $db;
    $tempered = "SELECT * FROM product WHERE (product_category='Tempered' AND product_qty<=10)";

    $temperedresult = mysqli_query($db,$tempered);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($temperedresult)){
        tempered($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get huawei from database to understocking huawei page
  function getUnderstockingHuawei(){
    global $db;
    $huawei = "SELECT * FROM product WHERE (manufacturer='Huawei' AND product_qty<=10)";

    $huaweiresult = mysqli_query($db,$huawei);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($huaweiresult)){
        huawei($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get xiaomi from database to understocking xiaomi page
  function getUnderstockingXiaomi(){
    global $db;
    $xiaomi = "SELECT * FROM product WHERE (manufacturer='Xiaomi' AND product_qty<=10)";

    $xiaomiresult = mysqli_query($db,$xiaomi);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($xiaomiresult)){
        xiaomi($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get google from database to understocking google page
  function getUnderstockingGoogle(){
    global $db;
    $google = "SELECT * FROM product WHERE (manufacturer='Google' AND product_qty<=10)";

    $googleresult = mysqli_query($db,$google);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($googleresult)){
        google($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get nokia from database to understocking nokia page
  function getUnderstockingNokia(){
    global $db;
    $nokia = "SELECT * FROM product WHERE (manufacturer='Nokia' AND product_qty<=10)";

    $nokiaresult = mysqli_query($db,$nokia);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($nokiaresult)){
        nokia($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get oppo from database to understocking oppo page
  function getUnderstockingOppo(){
    global $db;
    $oppo = "SELECT * FROM product WHERE (manufacturer='Oppo' AND product_qty<=10)";

    $opporesult = mysqli_query($db,$oppo);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($opporesult)){
        oppo($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get apple from database to understocking apple page
  function getUnderstockingApple(){
    global $db;
    $apple = "SELECT * FROM product WHERE (manufacturer='Apple' AND product_qty<=10)";

    $appleresult = mysqli_query($db,$apple);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($appleresult)){
        apple($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //get samsung from database to understocking samsung page
  function getUnderstockingSamsung(){
    global $db;
    $samsung = "SELECT * FROM product WHERE (manufacturer='Samsung' AND product_qty<=10)";

    $samsungresult = mysqli_query($db,$samsung);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($samsungresult)){
        samsung($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

//Filter price range
function filterPrice(){
  if(isset($_POST['priceSort'])){
    $minprice=$_POST['minPrice'];
    $maxprice=$_POST['maxPrice'];
    
    global $db;
  
    $filterprice = "SELECT * FROM product WHERE product_price BETWEEN $minprice AND $maxprice";
    $filterprice_result = mysqli_query($db,$filterprice);
  
    while($row = mysqli_fetch_assoc($filterprice_result)){
      store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
    }
  }
}

//Filter understocking price range
function filterUnderstockingPrice(){
  if(isset($_POST['understockPriceSort'])){
    $minprice=$_POST['minUnderstockPrice'];
    $maxprice=$_POST['maxUnderstockPrice'];
    
    global $db;
  
    $filterprice = "SELECT * FROM product WHERE product_price BETWEEN $minprice AND $maxprice AND product_qty<=10";
    $filterprice_result = mysqli_query($db,$filterprice);
  
    while($row = mysqli_fetch_assoc($filterprice_result)){
      store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
    }
  }
}

//search box in product
function filterSearch(){
  if(isset($_POST['search'])){
    $search=$_POST['searchbox'];
    
    global $db;

    $searchquery = "SELECT * FROM product WHERE product_name LIKE '%{$search}%' OR manufacturer LIKE '%{$search}%'";
    $searchquery_result = mysqli_query($db,$searchquery);

    while($row = mysqli_fetch_assoc($searchquery_result)){
      store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
    }
  }
}

//search box in understocking product
function filterUnderstockingSearch(){
  if(isset($_POST['searchunderstock'])){
    $searchunderstock=$_POST['searchboxunderstock'];
    
    global $db;

    $searchquery = "SELECT * FROM product WHERE ((product_name LIKE '%{$searchunderstock}%' OR manufacturer LIKE '%{$searchunderstock}%')And product_qty<=10)";
    $searchquery_result = mysqli_query($db,$searchquery);

    while($row = mysqli_fetch_assoc($searchquery_result)){
      store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
    }
  }
}

//search box in user
function filterUser(){
  if(isset($_POST['searchuser'])){
    $searchuser=$_POST['searchboxuser'];
    
    global $db;

    $searchquery = "SELECT * FROM user WHERE username LIKE '%{$searchuser}%' OR fname LIKE '%{$searchuser}%' OR lname LIKE '%{$searchuser}%'";
    $searchquery_result = mysqli_query($db,$searchquery);

    while($row = mysqli_fetch_assoc($searchquery_result)){
      customerdetails($row['Reg_ID'],$row['fname'],$row['lname'],$row['username'],$row['email'],$row['contactNo'],$row['address']);
    }
  }
}

//search orders by username or item
function filterOrder(){
  if(isset($_POST['searchorder'])){
    $searchorder=$_POST['searchboxorder'];
    
    global $db;

    $searchquery = "SELECT * FROM orders WHERE customer LIKE '%{$searchorder}%' OR orderName LIKE '%{$searchorder}%'";
    $searchquery_result = mysqli_query($db,$searchquery);

    while($row = mysqli_fetch_assoc($searchquery_result)){
      orderdetails($row['orderId'],$row['orderdate'],$row['customer'],$row['orderName'],$row['price']);
    }
  }
}
?>
