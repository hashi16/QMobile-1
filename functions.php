<?php
include('dbconnection.php');

function getUsersData($fname){
  $que = mysqli_query("SELECT * FROM user WHERE username =" .$username);
  while ($r = mysqli_fetch_assoc($que ) ) {
    $array['']
  }
}

 ?>
