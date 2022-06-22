<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/all.min.css">
 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/general.css">
 <link rel="icon" href="images/bear.svg">
 <link rel="stylesheet" href="css/comments.css">
 <title>Concat | Comments</title>
 <script>
   if(window.history.replaceState){
   	window.history.replaceState(null, null, window.location.href);
   }
 </script>

</head>

<body>
  <?php require_once 'general_ajax.php';
  if (!isset($_SESSION)) session_start();
  GetPersonalInfo($con);
  if (isset($_GET['PostID']) == true) {
    $Post_ID = htmlentities($_GET['PostID']);
  }else {
    header("location: index.php");
    die;
  }
  if (isset($_GET['PostID']) == true && isset($_GET['comment']) == true) {
    id_generator($con);
    $comment_id = $id_generated;
    $user_id = $_SESSION['user_id'];
    $comment_text = $_GET['comment'];
    $con->query("INSERT INTO post_comment VALUES(NULL, '$comment_id', '$Post_ID', '$user_id', '$comment_text', null);");
    unset($_GET['comment']);
    echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=". $_SERVER['PHP_SELF']."?PostID=".$Post_ID."\" >";
  }
   ?>
 <div class="comments-container">
  <div class="choose">
   <a href="resource.php">Back</a>
   <a href="index.php">Home</a>
   <a href="courses.php">Courses</a>
   <a href="profile.php">Profile</a>
   <a href="#">Refresh</a>
  </div>
  <div class="comments">
   <form class="commet-input">
     <input type="hidden" id="posting_id" name="PostID" value="<?= $Post_ID ?>">
    <textarea name="comment" class="text" placeholder="Leave your comment her..."></textarea>
    <div class="buttons">
     <button class="post" id="com_post">Post</button>
    </div>
  </form>
   <div class="comment-container">
    <div class="comment">
      <?php
        $comment_post_result = $con->query("SELECT * FROM post_comment WHERE post_id='$Post_ID' ORDER BY id DESC;");
        while ($comment_post_row = $comment_post_result-> fetch_assoc()) {
          $visitor_id = $comment_post_row['user_id'];
          GetMyFriendInfo($con,$visitor_id);
          echo '
          <div class="comm" id="comm'.$comment_post_row['comment_id'].'">
           <img src="profile___pic/'.$row['personal_pic'].'" alt="profile picture">
           <div class="box">
            <h2>'.$row['name'].'</h2>
            <p>'.$comment_post_row['post_comment'].'</p>
            <div class="effect">
             <div class="btn">
             ';
             $user_id = $_SESSION['user_id'];
             $comment_id = $comment_post_row['comment_id'];
             $comment_like_result = $con->query("SELECT comment_id FROM comment_like WHERE comment_id='$comment_id' ORDER BY id DESC;");
             $veiw_comment_like_num = $con->affected_rows;

             $check_like_result= $con->query("SELECT * FROM comment_like WHERE comment_id='$comment_id' AND  post_id='$Post_ID' AND user_id='$user_id' ORDER BY id DESC LIMIT 1;");
             if ($veiw_num = $con->affected_rows) {
               echo '
               <button class="reply" id="comID'.$comment_post_row['comment_id'].'" onClick="commentlike('.$comment_post_row['comment_id'].','.$comment_post_row['post_id'].')" style="color: rgb(0, 135, 159);"><a href="javascript:" id="likeNum'.$comment_post_row['comment_id'].'">'.$veiw_comment_like_num.'</a> liked 👍</button>
               ';
             }else {
               echo '
               <button class="reply" id="comID'.$comment_post_row['comment_id'].'" onClick="commentlike('.$comment_post_row['comment_id'].','.$comment_post_row['post_id'].')"><a href="javascript:" id="likeNum'.$comment_post_row['comment_id'].'">'.$veiw_comment_like_num.'</a> like</button>
               ';
             }
             if ($_SESSION['user_id'] == $comment_post_row['user_id']) {
                echo '
                  <button class="del" onClick="CommentDelete('.$comment_post_row['comment_id'].','.$comment_post_row['post_id'].')">delete</button>
                ';
               }
              echo '
             </div>
             <!-- <div class="text">
              <textarea name="text" placeholder="Type your reoly..."></textarea>
              <div class="buttons">
               <button class="post" id="post">Post</button>
               <button class="post" id="cancle">Cancle</button>
              </div>
             </div> -->
            </div>

           </div>
          </div>
          ';
        }
       ?>
     <!-- <div class="repl">
      <img src="user_media/image/bear.jpg" alt="profile picture">
      <div class="box">
       <h2>Ibrahim Azazy</h2>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A consequuntur vitae consectetur distinctio placeat
        vero aspernatur illo molestiae nobis veniam qui nostrum fuga quisquam non labore magni, eaque laboriosam sunt!
       </p>
       <div class="effect">
        <div class="btn">
         <button class="reply">reply</button>
         <button class="edit">edit</button>
         <button class="del">delete</button>
        </div>
        <div class="text">
         <textarea name="text" placeholder="Type your reoly..."></textarea>
         <div class="buttons">
          <button class="post" id="post">Post</button>
          <button class="post" id="cancle">Cancle</button>
         </div>
        </div>
       </div>

      </div>
     </div> -->
    </div>

    <!-- <div class="comment">
     <div class="comm">
      <img src="user_media/image/bear.jpg" alt="profile picture">
      <div class="box">
       <h2>Ibrahim Azazy</h2>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A consequuntur vitae consectetur distinctio placeat
        vero aspernatur illo molestiae nobis veniam qui nostrum fuga quisquam non labore magni, eaque laboriosam sunt!
       </p>
       <div class="effect">
        <div class="btn">
         <button class="reply">reply</button>
         <button class="edit">edit</button>
         <button class="del">delete</button>
        </div>
        <div class="text">
         <textarea name="text" placeholder="Type your reoly..."></textarea>
         <div class="buttons">
          <button class="post" id="post">Post</button>
          <button class="post" id="cancle">Cancle</button>
         </div>
        </div>
       </div>

      </div>
     </div>
    </div>
    <div class="comment">
     <div class="comm">
      <img src="user_media/image/bear.jpg" alt="profile picture">
      <div class="box">
       <h2>Ibrahim Azazy</h2>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A consequuntur vitae consectetur distinctio placeat
        vero aspernatur illo molestiae nobis veniam qui nostrum fuga quisquam non labore magni, eaque laboriosam sunt!
       </p>
       <div class="effect">
        <div class="btn">
         <button class="reply">reply</button>
         <button class="edit">edit</button>
         <button class="del">delete</button>
        </div>
        <div class="text">
         <textarea name="text" placeholder="Type your reoly..."></textarea>
         <div class="buttons">
          <button class="post" id="post">Post</button>
          <button class="post" id="cancle">Cancle</button>
         </div>
        </div>
       </div>

      </div>
     </div>
     <div class="repl">
      <img src="user_media/image/bear.jpg" alt="profile picture">
      <div class="box">
       <h2>Ibrahim Azazy</h2>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A consequuntur vitae consectetur distinctio placeat
        vero aspernatur illo molestiae nobis veniam qui nostrum fuga quisquam non labore magni, eaque laboriosam sunt!
       </p>
       <div class="effect">
        <div class="btn">
         <button class="reply">reply</button>
         <button class="edit">edit</button>
         <button class="del">delete</button>
        </div>
        <div class="text">
         <textarea name="text" placeholder="Type your reoly..."></textarea>
         <div class="buttons">
          <button class="post" id="post">Post</button>
          <button class="post" id="cancle">Cancle</button>
         </div>
        </div>
       </div>

      </div>
     </div> -->
    </div>
   </div>
  </div>

 </div>
 <script src="js/comments.js"></script>
</body>

</html>
