<link rel="stylesheet" href="css/pinPost.css">

<?php
require 'header.php'
 ?>

<div class="pinPost-container">
  <div class="container">
    <a href="http://localhost/Concat/groupName.php?group_id=916430527114">Go to Group</a>
    <!-- this number in span tag is variable -->
    <h3>Pending . <span>2</span> </h3>
    <button > Approve All </button>
    <div class="box">
      <div class="info">
        <img src="images/picsearch8.jpg" alt="" >
        <div class="name">
          <h2>Ibarhim Azazy</h2>
          <div class="time">
            just now. <i class="fa-solid fa-earth-africa"></i>
          </div>
        </div>
      </div>
        <div class="content">
          <p>
            this is a first pend post.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="btn">
          <!--
          all two option here are for user
          BUT only Delete will show to admin only only only..
        -->
          <input type="button"  value="Delete">
          <input type="button"  value="Approve">
        </div>
    </div>
    <div class="box">
      <div class="info">
        <img src="images/picsearch2.jpg" alt="" >
        <div class="name">
          <h2>Nour Hann</h2>
          <div class="time">
            30m ago . <i class="fa-solid fa-earth-africa"></i>
          </div>
        </div>
      </div>
        <div class="content">
          <img src="images/backsearch6.jpg" alt="">
        </div>
        <div class="btn">

          <input type="button"  value="Delete">
          <input type="button"  value="Approve">
        </div>
    </div>

  </div>
</div>
