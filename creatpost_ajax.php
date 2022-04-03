<?php require("connection.php"); session_start();
if (isset($_SESSION['user_id']) != true) {
  echo "Not_Signed";
  die;
} elseif (isset($_POST['post_content']) == true) {
    $post_content= htmlentities($_POST['post_content']);
    $post_id = rand();
    $user_id = $_SESSION['user_id'];
      $result = $con->query("INSERT INTO posting VALUES(NULL, '$post_id', '$user_id', '$post_content', '0', '0','0',NULL);");
      if ($result == true) {
        echo 'success';
      }else {
        echo 'faild';
      }
  }
 ?>
