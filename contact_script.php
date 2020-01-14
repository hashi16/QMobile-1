<?php


if(isset($_POST['send'])){

  $fname = $_POST['fname'];
  //$lname = $_POST['lname'];
  // $areacode = $_POST['areacode'];
  $telnum = $_POST['tele'];
  $mailfrom = $_POST['email'];
  $subject = $_POST['subject'];
  $feedback = $_POST['feedback'];


  $mailTo = "mahniroshan16@gmail.com";
  $headers = "MIME-Version: 1.0" ;        //"MIME-Version: 1.0" . "\r\n"
  $txt =  "You have received an e-mail from :  "  .$fname.
     "\n\n Telephone number is :  ".$telnum . "\n\n E-mail Address From :" .$mailfrom. "\n\n feedback is :" .$feedback;
  //$txt1 = "Telephone number:".$telnum;

  $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
  /*$message ="";
  "<html>
  <head>
    <title>New message from website contact form</title>
  </head>

  <body>
    <h1>" . $msg."</h1>
    <p>".$feedback."</p>
  </body>
  </html>";*/
  if(mail($mailTo, $subject, $txt, $headers)){
    echo "Email sent";
  }else{
    echo "Failed to send email. Please try again later";
  }



}

 ?>
