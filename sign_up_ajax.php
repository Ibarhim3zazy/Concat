<?php require("connection.php");
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true &&
    isset($_POST['phone']) == true &&
    isset($_POST['age']) == true &&
    isset($_POST['email']) == true &&
    isset($_POST['gender']) == true &&
    isset($_POST['career']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $career= $_POST['career'];
    $result = $con->query("INSERT INTO sign_up VALUES(NULL, '$user', '$email', '$password', '$phone', '$gender', '$age', '$career');");
  }
 ?>
