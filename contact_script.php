<?php
error_reporting(0);
$db = mysqli_connect('localhost','root','','registeruser');

if(isset($_POST['send'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $telnum = $_POST['tele'];
    $mailfrom = $_POST['email'];
    $subject = $_POST['subject'];
    $feedback = $_POST['feedback'];
  
  
    $mailTo = "deelakajagoda@gmail.com";
    $headers = "MIME-Version: 1.0" ;        //"MIME-Version: 1.0" . "\r\n"
    $txt =  "You have received an e-mail from :  "  .$fname.
       "\n\n Telephone number is :  ".$telnum . "\n\n E-mail Address From :" .$mailfrom. "\n\n feedback is :" .$feedback;
  
    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
  
    $feedback = "INSERT INTO feedback(firstname,lastname,contactno,email,subject,feedback) VALUES('$fname','$lname','$telnum','$mailfrom','$subject','$feedback')";
    $feedback_result = mysqli_query($db,$feedback);
  
    if($feedback_result !=null){
        header("refresh:1;url=contact.php");
        echo '<script type="text/javascript"> alert("Feeback successfully sent!") </script>';
    }else{
        header("refresh:1;url=contact.php");
        echo '<script type="text/javascript"> alert("Feedback sending failed!") </script>';
    }
    try{
        if(mail($mailTo, $subject, $txt, $headers)){
            header("refresh:1;url=contact.php");
            echo '<script type="text/javascript"> alert("Email sent!") </script>';
        }else{
            header("refresh:1;url=contact.php");
            echo '<script type="text/javascript"> alert("Email sending failed. Please try again later!") </script>';
        }
    }catch(Exception $e){
        header("refresh:1;url=contact.php");
        echo '<script type="text/javascript"> alert("Email sending failed. Please try again later!") </script>';
    }
}
?>