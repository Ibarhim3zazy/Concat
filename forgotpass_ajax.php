<?php require("connection.php");
if (isset($_POST['email']) == true) {
  $usermail = $_POST['email'];
  $result= $con->query("SELECT * FROM sign_up_general WHERE email='$usermail';");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      echo "true";
    }else {
      echo "fail";
    }
}
?>
