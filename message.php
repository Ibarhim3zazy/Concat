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
 <link rel="stylesheet" href="css/message.css">
 <title>Concat | User Name</title>
</head>

<body>
 <?php require_once 'header.php';?>
 <div class="chats">
  <div class="container">
   <div class="left">
    <div class="fixed">
     <div class="friends">
      <div class="chat">
       <h3>Messages</h3>
       <button><a href="setting.php"><i class="fa-solid fa-gear"></i></a></button>
      </div>
     </div>
     <div class="search">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
      <input type="search" placeholder="Search Message">
     </div>
    </div>
    <div class="con_message">
     <div class="box" tabindex="1">
      <span class="new"></span>
      <span class="read" style="position: absolute;"><i class="fa-solid fa-check-double"></i></span>
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="offline"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box" tabindex="2">
      <span class="new"></span>
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box" tabindex="3">
      <span class="unread"><i class="fa-solid fa-check-double"></i></span>
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box">
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box">
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box">
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box">
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
     <div class="box">
      <div class="img">
       <img src="images/cat-1.jpg" alt="" width="45px" height="45px" style="border-radius: 50%;">
       <span class="active"></span>
      </div>
      <div class="name">
       <a href="">user name</a>
       <div class="friendChat">
        <p>Hey how are you my friend, please call me if you can cause</p>
        <span class="time">13 Am</span>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="middle" id="middle">
    <div class="chatBox">
     <div class="clientHead">
      <div class="box">
       <div>
        <a href=""><img src="images/cat-1.jpg" alt="" width="46px" height="46px" style="border-radius: 50%;">
         <span class="active"></span>
        </a>
       </div>
       <div class="client_info">
        <a href="">
         <h2>User Name</h2>
        </a>
        <p>Active Now</p>
       </div>
      </div>
      <div class="mor">
       <button>
        <i class="fa-solid fa-trash-can"></i>
       </button>
       <button>
        <i class="fa-solid fa-user-xmark"></i> </button>
       <button>
        <i class="fa-solid fa-flag"></i>
       </button>
       <!-- <ul id="more" style="position: absolute;">
        <li>
         <button>
          <i class="fa-solid fa-trash-can"></i>
          Delete Chat
         </button>
        </li>
        <li>
         <button>
          <i class="fa-solid fa-ban"></i>
          Block
         </button>
        </li>
        <li>
         <button>
          <i class="fa-solid fa-flag"></i>
          Report
         </button>
        </li>
       </ul> -->
      </div>
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
     <div class="writting">
      <button><i class="fa-solid fa-plus"></i></button>
      <textarea style="resize: none;"></textarea>
      <button><i class="fa-solid fa-paper-plane"></i></button>
     </div>
    </div>
   </div>
  </div>
 </div>

</body>

</html>