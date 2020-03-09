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
        $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
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


    //Get order details from database
    function getOrderDetails(){
        global $db;
        $order = "SELECT * FROM orders";
        $order_result = mysqli_query($db,$order);
        while($row = mysqli_fetch_assoc($order_result)){
            orderdetails($row['orderId'],$row['orderdate'],$row['status'],$row['orderName']);
        }
    }
    function orderdetails($orderId,$orderdate,$status,$orderName){
        echo "<tr>";
            echo "<td>$orderId</td>";
            echo "<td>$orderdate</td>";
            echo "<td>$status</td>";
            echo "<td>$orderName</td>";
        echo "</tr>";
    }

    
    //Get feedback details from database
    function getFeedbackDetails(){
        global $db;
        $feedback = "SELECT * FROM feedback";
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
?>