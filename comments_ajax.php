<?php  require_once 'general_ajax.php';
if (!isset($_SESSION)) session_start();

if (isset($_POST['like']) == true && isset($_POST['comment_id']) == true && isset($_POST['post_id']) == true && isset($_SESSION['user_id']) == true) {
  $comment_id = htmlentities($_POST['comment_id']);
  $post_id = htmlentities($_POST['post_id']);
    $user_id = $_SESSION['user_id'];
    $check_like_result= $con->query("SELECT * FROM comment_like WHERE comment_id='$comment_id' AND post_id='$post_id' AND user_id='$user_id' ORDER BY id DESC LIMIT 1;");
    if ($veiw_num = $con->affected_rows) {
      $con->query("DELETE FROM comment_like WHERE comment_id='$comment_id' AND post_id='$post_id' AND user_id='$user_id';");
    }else {
      $con->query("INSERT INTO comment_like VALUES(NULL, '$comment_id', '$post_id', '$user_id', '1', NULL);");
    }
}
if (isset($_POST['Delete']) == true && isset($_POST['comment_id']) == true && isset($_POST['post_id']) == true && isset($_SESSION['user_id']) == true) {
  echo $_POST['comment_id'];
  $comment_id = htmlentities($_POST['comment_id']);
  $post_id = htmlentities($_POST['post_id']);
    $user_id = $_SESSION['user_id'];
    $check_comment_result= $con->query("SELECT * FROM post_comment WHERE comment_id='$comment_id' AND post_id='$post_id' AND user_id='$user_id' ORDER BY id DESC LIMIT 1;");
    if ($veiw_num = $con->affected_rows) {
      $con->query("DELETE FROM post_comment WHERE comment_id='$comment_id' AND post_id='$post_id' AND user_id='$user_id';");

      $con->query("DELETE FROM comment_like WHERE comment_id='$comment_id' AND post_id='$post_id'");
    }
}
 ?>
