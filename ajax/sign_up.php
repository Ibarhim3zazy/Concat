<?php require("connection.php");
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $career= $_POST['career'];
    $result = $con->query("INSERT INTO sign_up VALUES(NULL, '$user', '$email', '$password', '$phone', '$gender', '$age', '$career');");
    if ($result == true){
     header("location:index.php");
   }
 ?>
