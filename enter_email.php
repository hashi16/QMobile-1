<?php  include('dbconnection.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password Reset PHP</title>
    <link rel="stylesheet" href="Custom.css">
  </head>
  <body>
    <form class="login-form" action="enter_email.php" method="post">
      <h2 class="form-title">Reset password</h2>

      <!--form validation messages-->
      <?php include('errors.php'); ?>
      <div class="form-group">
        <label>Your email address</label>
        <input type="email" name="eamil" value="">

      </div>
      <div class="form-group">
        <button type="submit" name="reset-password" class="login-btn">Submit</button>
      </div>

    </form>

  </body>
</html>
