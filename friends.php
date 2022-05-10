    <link rel="stylesheet" href="css/friend.css">

    <?php require_once 'header.php';
    require 'friendsChat.php';
    ?>
    <div class="friend">
     <div class="container">
      <div class="title">
       <div class="con_friend">
        <p>Friends</p>
        <div class="search">
         <i class="fa-solid fa-magnifying-glass"></i>
         <input type="search" id="search" placeholder="search">
        </div>
       </div>
       <a href="request.php">Friend Requests</a>
      </div>
      <div class="con_box_friends">
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i> </button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i> </button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i> </button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
       <div class="box">
        <div class="min-box">
         <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="130px" height="130px">
         <div class="friendName">
          <h3>user name</h3>
          <p><span>5</span>mutual friends</p>
         </div>
        </div>
        <button><i class="fa-solid fa-user-xmark"></i></button>
       </div>
      </div>
     </div>
    </div>