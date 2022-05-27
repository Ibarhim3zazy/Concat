    <link rel="stylesheet" href="css/post.css">

<?php require 'post_ajax.php';?>

    <div class="create_post">
     <div class="container">
      <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="">
      <span
       style="position: absolute; top:43px; left:42px; width:12px; height:12px;background-color:var(--main-color-success); border-radius:50%;"></span>
      <!-- user name will change so it's variable -->
      <input type="button" onclick="showPost()" value="What's on your mind, User Name?">
     </div>
    </div>
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
          <button id="btn_close_post" style="border: none; background-color : transparent" ;> <i
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
        <ul class="list">
         <li>
          <label for="first">
           <div class="column">
            <div class="icon"><i class="fas fa-globe-asia"></i></div>
            <div class="detailes">
             <p>Puplic</p>
             <span>Anyone on or off Concat</span>
            </div>
           </div>
           <div>
            <input type="radio" name="one" id="first">
           </div>
          </label>
         </li>
         <li>
          <label for="active">
           <div class="column">
            <div class="icon"><i class="fas fa-user-friends"></i></div>
            <div class="detailes">
             <p>Friends</p>
             <span>Your friends on Concat</span>
            </div>
           </div>
           <div>
            <input type="radio" name="one" id="active">
           </div>
          </label>
         </li>
         <li>
          <label for="third">
           <div class="column">
            <div class="icon"><i class="fas fa-user"></i></div>
            <div class="detailes">
             <p>Specific</p>
             <span>Only show to some friends</span>
            </div>
           </div>
           <div>
            <input type="radio" name="one" id="third">
           </div>
          </label>
         </li>
         <li>
          <label for="fourth">
           <div class="column">
            <div class="icon"><i class="fas fa-lock"></i></div>
            <div class="detailes">
             <p>Only me</p>
             <span>Only you can see your post</span>
            </div>
           </div>
           <div>
            <input type="radio" name="one" id="fourth">
           </div>
          </label>
         </li>
         <li>
          <label for="fivth">
           <div class="column">
            <div class="icon"><i class="fas fa-cog"></i></div>
            <div class="detailes">
             <p>Custom</p>
             <span>Include and exclude friends</span>
            </div>
           </div>
           <div>
            <input type="radio" name="one" id="fivth">
           </div>
          </label>
         </li>
        </ul>
       </section>
      </div>
     </div>
    </div>

    <!-- change design post -->
    <!-- ======================= only video==================================== -->

    <?php veiw_post($con, htmlentities($row['personal_pic']));?>

    <!--========================= only multiy image========================================== -->
    <!-- <div class="designPost" id="designPost">
     <div class="contain">
      <div class="box_1">
       <div class="image">
        <a href="profile.php"><img src="" alt="" width="50"
          style="border-radius: 50%;" height="50px">
         <span
          style="position: absolute; top:0px; left:0px; width:13px; height:13px;background-color:var(--main-color-success); border-radius:50%;"></span>
        </a>
        <div class="infoProfile">
         <div class="userName">
          <a href="profile.php">
           User Name
          </a>
         </div>
         <div class="data"> -->
          <!-- date must be changed -->
        <!--  <a href="">13m <i class="fa-solid fa-clock"></i></a>
          <i class="fas fa-user-friends"></i>
         </div>
        </div>
       </div>
       <span class="more">
        <i class="fa-solid fa-angle-down"></i>
       </span>
      </div>
      <div class="box_2" id="boxTwo">
       <div class="image">
        <img src="user_media/image/background.jpg" alt="">
        <img src="user_media/image/bear.jpg" alt="">
        <img src="user_media/image/bear.jpg" alt="">
        <img src="user_media/image/bear.jpg" alt="">
        <img src="user_media/image/bear.jpg" alt="">
        <img src="user_media/image/background.jpg" alt="">
        <img src="user_media/image/background.jpg" alt="">
        <img src="user_media/image/background.jpg" alt="" class="last">
       </div>

      </div>
      <div class="box_3">
       <div class="box_container">
        <div id="like">
         <i class="fa-solid fa-thumbs-up"></i>
        </div>
        <div class="com" id="com">
         <i class="fa-solid fa-comments"></i>
        </div>
        <div class="share" id="share">
         <i class="fa-solid fa-share-nodes"></i>
        </div>
       </div>
       <div class="save" id="save">
        <i class="fa-solid fa-bookmark"></i>
       </div>
      </div>

     </div>
    </div> -->

    <!-- ================================ words with link ============================================ -->
    <!-- <div class="designPost" id="designPost">
     <div class="contain">
      <div class="box_1">
       <div class="image">
        <a href="profile.php"><img src="" alt="" width="50"
          style="border-radius: 50%;" height="50px">
         <span
          style="position: absolute; top:0px; left:0px; width:13px; height:13px;background-color:var(--main-color-success); border-radius:50%;"></span>
        </a>
        <div class="infoProfile">
         <div class="userName">
          <a href="profile.php">
           User Name
          </a>
         </div>
         <div class="data"> -->
          <!-- date must be changed -->
          <!-- <a href="">13m <i class="fa-solid fa-clock"></i></a>
          <i class="fas fa-user-friends"></i>
         </div>
        </div>
       </div>
       <span class="more">
        <i class="fa-solid fa-angle-down"></i>
       </span>
      </div>
      <div class="box_2" id="boxTwo">
       <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum hic aperiam consectetur temporibus dolores
        molestiae quod labore impedit, vel molestias dolor magnam incidunt, amet vitae culpa. Distinctio doloremque
        libero odit?
        <a href="javascript:">www.google.com</a>
       </p>

      </div>
      <div class="box_3">
       <div class="box_container">
        <div id="like">
         <i class="fa-solid fa-thumbs-up"></i>
        </div>
        <div class="com" id="com">
         <i class="fa-solid fa-comments"></i>
        </div>
        <div class="share" id="share">
         <i class="fa-solid fa-share-nodes"></i>
        </div>
       </div>
       <div class="save" id="save">
        <i class="fa-solid fa-bookmark"></i>
       </div>
      </div>

     </div>
    </div> -->
    <!-- ================================ link ============================================ -->
    <!-- <div class="designPost" id="designPost">
     <div class="contain">
      <div class="box_1">
       <div class="image">
        <a href="profile.php"><img src="" alt="" width="50"
          style="border-radius: 50%;" height="50px">
         <span
          style="position: absolute; top:0px; left:0px; width:13px; height:13px;background-color:var(--main-color-success); border-radius:50%;"></span>
        </a>
        <div class="infoProfile">
         <div class="userName">
          <a href="profile.php">
           User Name
          </a>
         </div>
         <div class="data"> -->
          <!-- date must be changed -->
          <!-- <a href="">13m <i class="fa-solid fa-clock"></i></a>
          <i class="fas fa-user-friends"></i>
         </div>
        </div>
       </div>
       <span class="more">
        <i class="fa-solid fa-angle-down"></i>
       </span>
      </div>
      <div class="box_2" id="boxTwo">
       <a href="javascript:">www.google.com</a>
      </div>
      <div class="box_3">
       <div class="box_container">
        <div id="like">
         <i class="fa-solid fa-thumbs-up"></i>
        </div>
        <div class="com" id="com">
         <i class="fa-solid fa-comments"></i>
        </div>
        <div class="share" id="share">
         <i class="fa-solid fa-share-nodes"></i>
        </div>
       </div>
       <div class="save" id="save">
        <i class="fa-solid fa-bookmark"></i>
       </div>
      </div>

     </div>
    </div> -->
    <script src="js/post.js"></script>
