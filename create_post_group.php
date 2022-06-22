<link rel="stylesheet" href="css/post.css">

<?php require 'post_ajax.php';
if ($_SESSION['user_id'] === $row['user_id']){
echo '
<div class="create_post">
<div class="container">
<img src="profile___pic/'.htmlentities($row['personal_pic']).'" alt="">
<span
 style="position: absolute; top:43px; left:42px; width:12px; height:12px;background-color:var(--main-color-success); border-radius:50%;"></span>
<input type="button" onclick="togglepost()" value="What\'s on your mind, User Name?">
</div>
</div>
';
}
// create post in group
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
if (isset($_POST['post_content']) == true) { create_post_group($con, $image_name, $video_name); }
function create_post_group($con, $image_name, $video_name) {
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

?>
<!-- pop up creating post -->
<div class="pop_post">
 <div class="container">
  <div class="wrapper">
   <section class="post">
    <!-- change create box to contain header and close -->
    <div class="box">
     <header>Create A Post</header>
     <!--s change add close and id -->
     <div class="arrow" id="close">
      <button id="btn_close_post" onclick="togglepost()" style="border: none; background-color: transparent;"><i
        class="fa-solid fa-xmark"></i></button>
     </div>
     <!--e change -->
    </div>
    <!--e change -->
    <div id="post_form">
     <div class="contant">
      <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" style="border-radius: 50%;"
       height="45px">
      <div class="detailes">
       <p>User Name</p>
       <div class="privacy">
        <i class="fas fa-user-friends"></i>
        <span>Friends</span>
        <i class="fas fa-caret-down"></i>
       </div>
      </div>
     </div>
     <textarea placeholder="What's on your mind, User Name?" required id="textarea"></textarea>
     <div class="theme-emoji">
      <a href=""><i class="fa-solid fa-face-smile"></i></a>
      <a href=""><i class="fa-solid fa-face-smile"></i></a>
     </div>
     <div class="options">
      <p>Add to your post</p>
      <ul class="list">
       <li class="photo">
        <label for="inputUploadImg"><i class="fa-solid fa-images"></i></label>
        <input id="inputUploadImg" name="inputUploadImg" type="file" style="display: none;" accept="image/*"/>
       </li>
       <li class="video">
        <label for="inputUploadVid"><i class="fa-solid fa-video"></i></label>
        <input id="inputUploadVid" name="inputUploadVid" type="file" style="display: none;" accept="video/*"/>
       </li>
      </ul>
     </div>
     <button id="sharepost" onclick="posting()">Post</button>
    </div>
   </section>


   <!-- next section -->
   <section class="audience">
    <header>
     <div class="arrow-back">
      <i class="fas fa-arrow-left"></i>
     </div>
     <p>Select Audience</p>
    </header>
    <div class="content">
     <p>Who can see your post</p>
     <span>Your post will show up in News Feed, on your profile and in search results</span>
    </div>
   </section>
  </div>
 </div>
</div>
<script src="js/post.js"></script>
