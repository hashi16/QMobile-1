<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password Reset PHP</title>
    <link rel="stylesheet" href="Customer.css">
  </head>
  <body>
    <form class="login-form" action="new_password.php" method="post">
      <h2 class="form-title">New password</h2>
      <!--form validation messages-->

      <?php include('errors.php'); ?>
      <div class="form-group">
        <label>New password</label>
        <input type="password" name="new_password" value="">

        </div>

        <div class="form-group">
          <label>Confirm new password</label>
          <input type="password" name="new_pass_c" value="">

          </div>

          <div class="form-group">
            <button type="submit" name="new_password" class="login-btn" value="">Submit</button>

          </div>



    </form>

  </body>
</html>
