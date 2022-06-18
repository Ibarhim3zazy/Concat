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
</head>

<body>
  <?php
  if (isset($_GET['PostID']) == true) {
    $Post_ID = htmlentities($_GET['PostID']);
  }
  if (isset($_GET['PostID']) == true && isset($_GET['comment']) == true) {
    $con->query("INSERT INTO post_like VALUES(NULL, '$post_id', '$user_id', '1');");
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
         <button class="reply">like</button>
         <button class="del">delete</button>
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
</body>

</html>
