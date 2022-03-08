
<?php
  $con= new mysqli("localhost", "root", "", "concat");
  if ($con ->connect_errno) {
    die("connection error");
    // echo "connection error";
    // exit();
  };
 ?>
