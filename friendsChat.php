    <link rel="stylesheet" href="css/friendsChat.css">

<div class="con" style="width: 100%;">
  <div class="friendschat" id="friendschat">
      <div class="container">
          <div class="searchfriends">
              <input type="search" name="" id="search" placeholder="Search Your Friends">
              <button id="search_open"><i class="fa-solid fa-magnifying-glass"></i></button>
              <ul class="friends" id="friends">
                  <li>
                      <div class="caption">
                          <h2>
                              <i class="fa-solid fa-user-group"></i>
                              Search Friends
                          </h2>
                          <button id="search_close"><i class="fa-solid fa-xmark"></i></button>
                      </div>
                  </li>
                  <li>
                      <div class="box" id="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" id="chat1" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>U Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Disconnected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="box">
                          <div>
                              <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                  style="border-radius: 50%;">
                              <span class="active"></span>
                          </div>
                          <div class="info">
                              <h2>User Name</h2>
                              <span>Connected</span>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="friendsconnect">
              <div class="friendsimage">
                <?php
                CheckStatueOfMyFriend($con,'friend');
                $i = 0;
                if (isset($my_friend_row)) {
                  $i++;
                  echo '
                  <form class="box" action="profile.php" id="form'.$i.'" method="get">
                   <div class="min-box" data-id-form="form'.$i.'" onclick="viewProfile(this)">
                    <img src="profile___pic/'.htmlentities($my_friend_row['personal_pic']).'" alt="" width="45px" height="45px" style="border-radius: 50%;">
                    <span class="active"></span>
                    <!-- <p><span>5</span>mutual friends</p> -->
                    <input type="hidden" name="friend_id" value="'.htmlentities($my_friend_row['user_id']).'">
                   </div>
                 </form>
                  ';
                }
              ?>
              </div>
          </div>
          <div class="textmessage">
              <input type="text" name="" id="textmessage" placeholder="Type your message">
              <button><i class="fa-solid fa-paper-plane"></i></button>
              <!-- start chat message -->
              <div class="contain" id="contain">
                  <div class="chatBox">
                      <div class="clientHead">
                          <div class="box">
                              <div>
                                  <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="45px" height="45px"
                                      style="border-radius: 50%;">
                                  <span class="active"></span>
                              </div>
                              <div class="client_info">
                                  <h2>User Name</h2>
                                  <p>Active Now</p>
                              </div>
                          </div>
                          <button id="btn_close"><i class="fa-solid fa-xmark"></i></button>
                      </div>
                      <!-- main chat  -->
                      <div class="main_chat">
                          <div class="box_client">
                              <div class="client_chat">
                                  Hi!
                              </div>
                              <span class="time">11:56 Am</span>
                          </div>
                          <div class="box_me">
                              <div class="my_chat">
                                  Hi!
                              </div>
                              <span class="time">11:57 Am</span>
                          </div>
                          <div class="box_client">
                              <div class="client_chat">
                                  tell me bro, How did you create this beauty chat?
                              </div>
                              <span class="time">11:59 Am</span>
                          </div>
                          <div class="box_me">
                              <div class="my_chat">
                                  Oh! it's easy, just follow me..
                              </div>
                              <span class="time">12:01 Pm</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="" style="width: 100%; height: 70px;"></div>
</div>

    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    <script type="text/javascript" src="js/friends.js"></script>
