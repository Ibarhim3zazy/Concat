<?php require("connection.php");
if (!isset($_SESSION)) session_start();
  $image_name = 0;
  $video_name = 0;
  // if (isset($_POST['post_content']) == true) {
  //   echo htmlentities($_POST['post_content']).' ---txt--- ';
  // }
if (isset($_FILES['fileImg']['name']) == true){
  $image_name = $_FILES['fileImg']['name'];
  /* Choose where to save the uploaded file */
  $location = "img___post/".$image_name;
  /* Save the uploaded file to the local filesystem */
  if ( move_uploaded_file($_FILES['fileImg']['tmp_name'], $location) ) {
    // echo 'Success_img';
  } else {
    echo 'Failure_img';
  }
}

if (isset($_FILES['fileVid']['name']) == true){
  $video_name = $_FILES['fileVid']['name'];
  /* Choose where to save the uploaded file */
  $location = "video___post/".$video_name;
  /* Save the uploaded file to the local filesystem */
  if ( move_uploaded_file($_FILES['fileVid']['tmp_name'], $location) ) {
    echo 'Success_vid';
  } else {
    echo 'Failure_vid';
  }
}
// echo ' '.htmlentities($image_name).' ---1--- ';
//
// if (isset($_POST['post_content']) == true) {
//   echo ' '.htmlentities($image_name).' ---2--- ';
//  }

///////////////////
if (isset($_POST['post_content']) == true) { create_post($con, $image_name, $video_name); }
function create_post($con, $image_name, $video_name) {
  if (isset($_SESSION['user_id']) != true) {
    echo "Not_Signed";
    die;
  } elseif (isset($_POST['post_content']) == true) {
    $post_content= htmlentities($_POST['post_content']);
    if ($post_content == '') {
      $post_content = 0;
    }
      $contain = 0;
      if ($post_content != 0) {
        $contain = 1;
      }
      if ($image_name != 0) {
        $contain = 2;
      }
      if ($video_name != 0) {
        $contain = 3;
      }
      if ($post_content != 0 && $image_name != 0) {
        $contain = 4;
      }
      if ($post_content != 0 && $video_name != 0) {
        $contain = 5;
      }
      echo $image_name.'*****'.$video_name.'*****';

      $post_id[] = rand();
      shuffle($post_id);
      $user_id = $_SESSION['user_id'];
      $result = $con->query("INSERT INTO posting VALUES(NULL, '$post_id[0]', '$user_id', '$post_content', '$image_name', '$video_name','0', '0', '0', NULL, '$contain');");
        if ($result == true) {
          echo 'success';
        }else {
          echo 'faild';
        }
    }
}

if (isset($_POST['like']) == true && isset($_POST['post_id']) == true && isset($_SESSION['user_id']) == true) {
  $post_id = htmlentities($_POST['post_id']);
    $user_id = $_SESSION['user_id'];
    $check_like_result= $con->query("SELECT * FROM post_like WHERE post_id='$post_id' AND user_id='$user_id' ORDER BY id DESC LIMIT 1;");
    if ($veiw_num = $con->affected_rows) {
      $con->query("DELETE FROM post_like WHERE post_id='$post_id' AND user_id='$user_id';");
    }else {
      $con->query("INSERT INTO post_like VALUES(NULL, '$post_id', '$user_id', '1');");
    }
}
function veiw_post($con, $PersonalPicture,$name)
{
  if (isset($_GET['friend_id']) == true) {
    $user_id = $_GET['friend_id'];
  }else {
    $user_id = $_SESSION['user_id'];
  }
    $veiw_result= $con->query("SELECT * FROM posting WHERE user_id='$user_id' ORDER BY id DESC LIMIT 20;");
    $veiw_num = $con->affected_rows;
    if($veiw_num != 0 && $veiw_result == true){
      while ($veiw_row = $veiw_result-> fetch_assoc()) {
        echo '
        <div class="designPost" id="designPost">
         <div class="contain">
           <div class="box_1">
            <div class="image">
             <a href="profile.php"><img src="profile___pic/'.$PersonalPicture.'" alt="" width="50"
               style="border-radius: 50%;" height="50px">
              <span
               style="position: absolute; top:0px; left:0px; width:13px; height:13px;background-color:var(--main-color-success); border-radius:50%;"></span>
             </a>
             <div class="infoProfile">
              <div class="userName">
               <a href="profile.php">
                '.$name.'
               </a>
              </div>
              <div class="data">
               <!-- date must be changed -->
               <a href="">13m <i class="fa-solid fa-clock"></i></a>
               <i class="fas fa-user-friends"></i>
              </div>
             </div>
            </div>
            <span class="more" onClick="toggle()">
             <i class="fa-solid fa-angle-down" ></i>
             <ul id ="postList" class = " listpost">
              <button>Edit post</button>
              <button>Delete post</button>
             </ul>
            </span>

             </div>
            <div class="box_2" id="boxTwo">
        ';
  if (htmlentities($veiw_row['contain']) == 1) {
    echo '
       <pre>'.htmlentities($veiw_row['post_content']).'</pre>
    ';
  }
  if (htmlentities($veiw_row['contain']) == 2) {
    echo '
       <img src="img___post/'.htmlentities($veiw_row['image']).'" alt="">
  ';
  }
  if (htmlentities($veiw_row['contain']) == 3){
    echo '
       <video src="video___post/'.htmlentities($veiw_row['videos']).'" controls></video>
';
  }
  if (htmlentities($veiw_row['contain']) == 4){
    echo '
       <pre>'.htmlentities($veiw_row['post_content']).'</pre>
       <img src="img___post/'.htmlentities($veiw_row['image']).'" alt="">
';
  }
  if (htmlentities($veiw_row['contain']) == 5){
    echo '
       <pre>'.htmlentities($veiw_row['post_content']).'</pre>
       <video src="video___post/'.htmlentities($veiw_row['videos']).'" controls></video>
';
  }
  $post_id = htmlentities($veiw_row['post_id']);
  $post_like_result = $con->query("SELECT post_id FROM post_like WHERE post_id='$post_id' ORDER BY id DESC;");
  $veiw_post_like_num = $con->affected_rows;
  if($post_like_result == true){
    $Post_ID = htmlentities($veiw_row['post_id']);
    echo '
    </div>
    <div class="box_3">
     <div class="box_container">
      <div id="like">
        <input type="hidden" id="posting_id" value="'.$Post_ID.'">
        <a href="javascript:" class="likeNum" id="likeNum'.$Post_ID.'">'.$veiw_post_like_num.' </a>
        ';
        $user_id = $_SESSION['user_id'];
        $check_like_result= $con->query("SELECT * FROM post_like WHERE post_id='$Post_ID' AND user_id='$user_id' ORDER BY id DESC LIMIT 1;");
        if ($veiw_num = $con->affected_rows) {
          echo '
          <i class="fa-solid fa-thumbs-up" id="like'.htmlentities($veiw_row['post_id']).'" onClick="togglelike('.htmlentities($veiw_row['post_id']).');" style = "color: #49c4fc;"></i>
          ';
        }else {
          echo '
          <i class="fa-solid fa-thumbs-up" id="like'.htmlentities($veiw_row['post_id']).'" onClick="togglelike('.htmlentities($veiw_row['post_id']).');"></i>
          ';
        }
    echo '
      </div>
      <form action="comments.php" method="get" class="com" id="com">
      <input type="hidden" id="posting_id" name="PostID" value="'.$Post_ID.'">
       <a href="javascript:document.getElementById(\'com\').submit()">
       <i class="fa-solid fa-comments"></i>
       </a>
      </form>
      <div class="share" id="share">
       <i class="fa-solid fa-share-nodes" onClick="toggleCopy()"></i>
       <div class="copyPopUp">
        <div class="box">
          <h3>Copy & Share post</h3>
          <button onClick="toggleCopy()">&times;</button>
        </div>
         <div class="copyBox ">
           <input type="text" placeholder="link@89ih@hhh"   class="inputclass" >
           <button onClick="funcCopy()">
           <i class="fa-solid fa-copy"></i></button>
         </div>
       </div>
      </div>
     </div>
     <div class="save" id="save">
      <i class="fa-solid fa-bookmark" id="saveI" onClick="togglesave()"></i>
     </div>
    </div>
   </div>
  </div>

    ';
  }
    // else {
    //   header("location: log_in.php");
    //   die;
    // }
  }
}
}
 ?>
