<?php require("connection.php");
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $career= $_POST['career'];
    $result = mysql_query("insert into sign_up values(NULL, '$user', '$email', '$password', '$phone', '$gender', '$age', '$career');");
    if ($result == true){
     header("location:index.php");
    }else{
       echo "Not Saved";
    }
 ?>
