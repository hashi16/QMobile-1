<?php
session_start();
//intializing variables
//include('enter_email.php');

$fname="";
$lname="";
$username ="";
$email="";
$contactNo="";
$address="";
//$password="";
//$confirmpassword="";
$user_id = "";

$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','registeruser');

//call the register() function if register_btn is clicked
if(isset($_POST['register'])){
  register();
}

//register user
// if(isset($_POST['createaccount'])){
  function register(){

    global $db, $errors, $username, $email, $fname, $lname,$address, $contactNo;

    //call e() function for receive all input values from forms
    $fname = e($_POST['fname']);
    $lname = e($_POST['lname']);
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $contactNo = e($_POST['contactNo']);
    $address = e($_POST['address']);
    $password = e($_POST['password']);
    $confirmpassword = e($_POST['confirmpassword']);




    // $fname = mysqli_real_escape_string($db,$_POST['fname']);
    // $lname = mysqli_real_escape_string($db,$_POST['lname']);
    // $username = mysqli_real_escape_string($db,$_POST['username']);
    // $email = mysqli_real_escape_string($db,$_POST['email']);
    // $contactNo = mysqli_real_escape_string($db,$_POST['contactNo']);
    // $password = mysqli_real_escape_string($db,$_POST['password']);
    // $confirmpassword = mysqli_real_escape_string($db,$_POST['confirmpassword']);


    //form validation: ensure that the form is correctly filled..
    //by adding (array_push()) corresponding error into $errors array

    if(empty($fname)){ array_push($errors,"first name is required");}
    if(empty($lname)){ array_push($errors,"last name is required");}
    if(empty($username)){ array_push($errors,"Username is required");}
    if(empty($email)){ array_push($errors,"Email is required");}
    if(empty($contactNo)){ array_push($errors,"Contact No is required");}
    if(empty($address)){ array_push($errors,"Address is required");}
    if(empty($password)){ array_push($errors,"Password is required");}
    if($password != $confirmpassword){
         array_push($errors,"The two password do not match");
                                     }

     //first check the database to make sure
     // a user does not allready exist with the same name and/or email
    // $user_check_query = "SELECT * FROM user WHERE username='$username' email='$email' LIMIT 1" ;
    //  $result = mysqli_query($db,$user_check_query);
    //  $user = mysqli_fetch_assoc($result);
     //
     // if($user){ // if user exits
     //      if($user['username'] === $username){
     //      array_push($errors, "username already exits");
     //      }
     //
     // }
     // if($user['email'] === $email){//if user exits
     //      array_push($errors, "Email already exits");
     //
     // }

     //Finally, register user if there are no errors in the forms
     if(count($errors) == 0){
         $password = md5($password);//md5 the password secure

         if(isset($_POST['user_type'])){
           $user_type = e($_POST['user_type']);

           //username already exits
               $sql_u = "SELECT * FROM user WHERE username='$username'";
             	$sql_e = "SELECT * FROM user WHERE email='$email'";
             	$res_u = mysqli_query($db, $sql_u);
             	$res_e = mysqli_query($db, $sql_e);

             	if (mysqli_num_rows($res_u) > 0) {
             	  $name_error = "Sorry... username already taken";
             	}else if(mysqli_num_rows($res_e) > 0){
             	  $email_error = "Sorry... email already taken";
             	}else{

         $query = "INSERT INTO user(fname,lname,username,email,contactNo,address,user_type,password)
         VALUES('$fname', '$lname', '$username', '$email', '$contactNo', '$address', '$user_type', '$password')";
         mysqli_query($db, $query);
        // $_SESSION['username'] = $username;
         //$_SESSION['email'] = $email;
         $_SESSION['success'] = "New user succefully created";
         header('location: index.php');
       }
     }//username already exits
         $sql_u = "SELECT * FROM user WHERE username='$username'";
        $sql_e = "SELECT * FROM user WHERE email='$email'";
        $res_u = mysqli_query($db, $sql_u);
        $res_e = mysqli_query($db, $sql_e);

        if (mysqli_num_rows($res_u) > 0) {
          $name_error = "Sorry... username already taken";
        }else if(mysqli_num_rows($res_e) > 0){
          $email_error = "Sorry... email already taken";
        }

     else{
       $query = "INSERT INTO user(fname,lname,username,email,contactNo,address,user_type,password)
       VALUES('$fname', '$lname', '$username', '$email', '$contactNo','$address', 'user', '$password')";
       mysqli_query($db, $query);

       //get id of the created users
       $logged_in_user_id = mysqli_insert_id($db);

       $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			 // $_SESSION['success']  = "You are now logged in";
			header('location: index.php');
     }

}

}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}


function isLoggedIn(){
  if(isset($_SESSION['user'])){
    return true;
  }else{
    return false;
  }


}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}



         //LOGIN USER // call the login() function if register_btn is clicked
          if(isset($_POST['login'])){
            login();

         }
         function login(){

           global $db, $username, $errors;
          //  $email = mysqli_real_escape_string($db,$_POST['email']);
          // $username = mysqli_real_escape_string($db,$_POST['username']);
          // $password = mysqli_real_escape_string($db, $_POST['password']);

          $username = e($_POST['username']);
        	$password = e($_POST['password']);

          if(empty($username)){
               array_push($errors, "Username is required");

          }
          if(empty($password)){
               array_push($errors, "Password is required");
          }

          if(count($errors) == 0){
               $password = md5($password);
               $query = "SELECT * FROM user WHERE username='$username'  AND password='$password' LIMIT 1 ";
               $results = mysqli_query($db , $query);

               if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "";
				header('location: admin/home.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
          }

          $sql = "SELECT * FROM user WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'";
          $result = mysqli_query($db,$sql);

          $user = mysqli_fetch_array($result);

          if($user){
            if(!empty($_POST["remember"])){
             //  setcookie("username", $_POST["username"],time() ,(10*365*24*60*60*));
             // setcookie("password", $_POST["password"],time(), (10*365*24*60*60*));

           }else{
             if(isset($_COOKIE["username"]))
             {
               setcookie("username","");
             }
             if(isset($_COOKIE["password"]))
             {
               setcookie("password","");
             }

            }
            header("location:index.php");

          }else{
            $message = "Invalid login";
          }



     }

     //remeber me in login page
   // $errorMessage='';
   //   if(!empty($_POST['login']) && $_POST['username']!= '' && $_POST['password']!=''){
   //     $username = $_POST['username'];
   //     $password = $_POST['password'];
   //     $sqlQuery = "SELECT * FROM user WHERE username='".$username."' AND password='".md5($password)."' ";
   //
   //    $resultSet = mysqli_query($db, $sqlQuery) or die("database error:". mysqli_error($db));
   //
   //     $isValidLogin = mysqli_num_rows($resultSet);
   //     if($isValidLogin){
   //       if(!empty($_POST['remember'])){
   //          setcookie("username", $username,time()+ (10*365*24*60*60*));
   //          setcookie("password", $password,time()+ (10*365*24*60*60*));
   //       }else{
   //         setcookie("username","");
   //         setcookie("password","");
   //       }
   //       $userDetails = mysqli_fetch_assoc($resultSet);
   //     $_SESSION["user"] = $userDetails['username'];
   //       header("location:index.php");
   //     } else {
   //       $errorMessage = "Invalid login!";
   //     }
   //    } else if(!empty($_POST["username"])){
   //     $errorMessage = "Enter Both user and password!";
   //    }


     // ... checks if the user is admin (using the isAdmin() function).home.php
     function isAdmin()
     {
     	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
     		return true;
     	}else{
     		return false;
     	}
     }

     //Get order details from database
    function getOrderDetails(){
      global $db;
      $order = "SELECT * FROM orders";
      $order_result = mysqli_query($db,$order);
      while($row = mysqli_fetch_assoc($order_result)){
          orderdetails($row['orderId'],$row['orderdate'],$row['status'],$row['orderName'],$row['price']);
      }
    } 
    function orderdetails($orderId,$orderdate,$status,$orderName,$price){
        echo "<tr>";
            echo "<td>$orderId</td>";
            echo "<td>$orderdate</td>";
            echo "<td>$status</td>";
            echo "<td>$orderName</td>";
            echo "<td>$price</td>";
        echo "</tr>";
    }

 //remeber me in login page
 //
 // if(!empty($_POST['login']) && $_POST['username']!= '' && $_POST['password']!=''){
 //   $username = $_POST['username'];
 //   $password = $_POST['password'];
 //   $sqlQuery = "SELECT * FROM user WHERE username='".$username."' AND password='".md5($password)."' ";
 //
 //  $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
 //
 //   $isValidLogin = mysqli_num_rows($resultSet);
 //   if($isValidLogin){
 //     if(!empty($_POST['remember'])){
 //        setcookie("username", $username,time()+ (10*365*24*60*60*));
 //        setcookie("password", $password,time()+ (10*365*24*60*60*));
 //     }else{
 //       setcookie("username","");
 //       setcookie("password","");
 //     }
 //     $userDetails = mysqli_fetch_assoc($resultSet);
	// 	$_SESSION["user"] = $userDetails['username'];
 //  		header("location:index.php");
 //  	} else {
 //  		$errorMessage = "Invalid login!";
 //  	}
 //  } else if(!empty($_POST["username"])){
 //  	$errorMessage = "Enter Both user and password!";
 //  }
 //





     //USER PROFILE


     // /*Accept email of user whose password is to be reset
     //   Send email to user to reset their password*/
     //
     //   if(isset($_POST['reset-password'])){
     //     $email = mysqli_real_escape_string($db, $_POST['email']);
     //
     //     //ensure that the user exits or note
     //     $query = "SELECT email FROM user WHERE email='$email'";
     //     $results = mysqli_query($db, $query);
     //
     //
     //     if (empty($email)) {
     //     array_push($errors, "Your email is required");
     //    }else if(mysqli_num_rows($results) <= 0) {
     //     array_push($errors, "Sorry, no user exists on our system with that email");
     //    }
     //
     //    // generate a unique random token of length 100
     //   $token = bin2hex(random_bytes(50));
     //
     //   if (count($errors) == 0) {
     //     // store token in the password-reset database table against the user's email
     //     $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
     //     $results = mysqli_query($db, $sql);
     //
     //     // Send email to user with the token in a link they can click on
     //     $to = $email;
     //     $subject = "Reset your password on examplesite.com";
     //     $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
     //     $msg = wordwrap($msg,70);
     //     $headers = "From: info@examplesite.com";
     //     mail($to, $subject, $msg, $headers);
     //     header('location: pending.php?email=' . $email);
     //   }
     //
     //
     //   }
     //
     //
     // // ENTER A NEW PASSWORD
     // if (isset($_POST['new_password'])) {
     //   $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
     //   $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
     //
     //   // Grab to token that came from the email link
     //   $token = $_SESSION['token'];
     //   if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
     //   if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
     //   if (count($errors) == 0) {
     //     // select email address of user from the password_reset table
     //     $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
     //     $results = mysqli_query($db, $sql);
     //     $email = mysqli_fetch_assoc($results)['email'];
     //
     //     if ($email) {
     //       $new_pass = md5($new_pass);
     //       $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
     //       $results = mysqli_query($db, $sql);
     //       header('location: index.php');
     //     }
     //   }
     // }
     //
     //
     //

     //store.php

  //get products from database to store page
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

  //get products from database to home page
  function getProductIndex(){
    global $db;
    //$sql = "SELECT * FROM product";
    $sql = "SELECT * FROM (SELECT * FROM product ORDER BY id DESC LIMIT 8)Var1 ORDER BY id DESC";

    $result = mysqli_query($db,$sql);

    // if(mysqli_num_rows($result)>0){
    //   return $result;

      while($row = mysqli_fetch_assoc($result)){
        store($row['product_name'],$row['actualprice'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['id'],$row['product_category'],$row['manufacturer']);
  }
  }

  //View products in details
  function getProductDetail(){
    if(isset($_GET['gid'])){
        global $db;
        $productdetail= "SELECT * FROM product where id='$_GET[gid]'";
        $productdetail_result = mysqli_query($db,$productdetail);
        while($row = mysqli_fetch_assoc($productdetail_result)){
            singleItem($row['product_name'],$row['product_price'],$row['product_image'],$row['product_qty'],$row['product_category'],$row['manufacturer'],$row['description']);
        }
    }
}

// if(isset($_POST['order'])){
//   order();
// }
//
// function order(){
//   $db;
// }


function retrieveproductorder($productname,$productprice){
  $query = "INSERT INTO orders(orderdate,status,orderName,price) VALUES('2020-03-12','Processing','$productname','$productprice')";
  global $db;
  $query_run = mysqli_query($db,$query);
}
?>