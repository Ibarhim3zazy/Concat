    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="icon" href="images/bear.svg">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/jquery-3.6.0.js"></script>

    <?php require_once 'general_ajax.php';
      GetPersonalInfo($con);
     ?>

    <div class="header" id="header">
     <div class="container">
      <div class="left">
       <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
       </div>
       <div class="search">
        <input type="search" name="" id="search" placeholder="Search">
        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
       </div>
      </div>
      <div class="middle">
       <div class="home">
        <a href="index.php">
         <i class="fa-solid fa-house-user"></i>
         <span>Home</span>
        </a>
       </div>
       <div class="group">
        <a href="group.php">
         <i class="fa-solid fa-users"></i>
         <span>
          Groups
         </span>
        </a>
       </div>
       <div class="courses">
        <a href="courses.php">
         <i class="fa-solid fa-book"></i>
         <span>
          Courses
         </span>
        </a>
       </div>
      </div>
      <div class="right">
       <div class="notification" id="notification">
        <a href="javascript:"><i class="fa-solid fa-bell"></i></a>
        <ul id="ul" class="notiUl">
         <li>
          <button id="closeNotif"><i class="fa-solid fa-xmark"></i></button>
          Notification
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
          <span class="new"></span>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture Hey! someone has like to your profile
            picture

           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="noti">
            Hey! someone has like to your profile picture
           </div>
           <div class="time">
            <div class="time">
             11:00 AM
            </div>
           </div>
          </div>
         </li>
         <!-- <li>
                            <div class="image">
                                <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
                                    style="border-radius: 50%;">
                            </div>
                            <div class="box">
                                <div class="noti">
                                    Hey! someone has like to your profile picture
                                </div>
                                <div class="time">
                                    <div class="time">
                                        11:00 AM
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image">
                                <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px"
                                    style="border-radius: 50%;">
                            </div>
                            <div class="box">
                                <div class="noti">
                                    Hey! someone has like to your profile picture
                                </div>
                                <div class="time">
                                    <div class="time">
                                        11:00 AM
                                    </div>
                                </div>
                            </div>
                        </li> -->
        </ul>
       </div>
       <div class="messages" id="messages">
        <a href="javascript:"><i class="fa-brands fa-facebook-messenger" id="chat"></i>
        </a>
        <ul id="ulChat" class="closechat">
         <li>
          <button id="messageClose"><i class="fa-solid fa-xmark"></i></button>
          Messages
         </li>
         <li>
          <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="55px" height="55px"
           style="border-radius: 50%;">
          <div class="box">
           <div class="top">
            <div class="name">
             User name
            </div>
            <div class="time">
             11:00 AM
            </div>
           </div>
           <div class="message">
            welcome Sam , How're you welcome Sam , How're you?
           </div>
          </div>
          <span class="new"></span>
         </li>
         <li>
          <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="55px" height="55px"
           style="border-radius: 50%;">
          <div class="box">
           <div class="top">
            <div class="name">
             User name
            </div>
            <div class="time">
             11:00 AM
            </div>
           </div>
           <div class="message">
            welcome Sam , How're you?
           </div>
          </div>
         </li>
         <li>
          <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="55px" height="55px"
           style="border-radius: 50%;">
          <div class="box">
           <div class="top">
            <div class="name">
             User name
            </div>
            <div class="time">
             11:00 AM
            </div>
           </div>
           <div class="message">
            welcome Sam , How're you?
           </div>
          </div>
         </li>
         <li>
          <img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="55px" height="55px"
           style="border-radius: 50%;">
          <div class="box">
           <div class="top">
            <div class="name">
             User name
            </div>
            <div class="time">
             11:00 AM
            </div>
           </div>
           <div class="message">
            welcome Sam , How're you?
           </div>
          </div>
         </li>
         <li>
          <div class="image">
           <img src="<?= htmlentities($row['personal_pic']); ?>" class="active" alt="" width="55px" height="55px"
            style="border-radius: 50%;">
          </div>
          <div class="box">
           <div class="top">
            <div class="name">
             User name
            </div>
            <div class="time">
             11:00 AM
            </div>
           </div>
           <div class="message">
            welcome Sam , How're you?
           </div>
          </div>
         </li>
        </ul>
       </div>
       <div class="account" id="account">
        <img src="<?= htmlentities($row['personal_pic']); ?>" alt="">
        <span
         style="position: absolute; top:43px; right:32px; width:12px; height:12px;background-color:var(--main-color-success); border-radius:50%;"></span>
        <ul id="ulAcc" class="accountClose">
         <li class="prof_personal">
          <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="">
           <span
            style="position: absolute; top:43px; left:40px; width:12px; height:12px;background-color:var(--main-color-success); border-radius:50%;"></span>
          </a>
          <div class="personalInfo">
           <a href="profile.php"><?= htmlentities($row['name']); ?></a>
           <span>See Your Account</span>
          </div>
         </li>
         <li class="center">
          <div class="con_center">

           <a href="portfolio.php">
            <i class="fa-solid fa-podcast"></i>
            Portfolio
           </a>

           <!-- <a href="">
            <i class="fa-solid fa-award"></i>
            Example
           </a> -->
          </div>
         </li>
         <li class="setting">
          <a href="" class="settPage">
           <i class="fa-solid fa-gear"></i>
           Setting
          </a>
          <a href="" class="help">
           <i class="fa-solid fa-handshake-angle"></i>
           Help
          </a>
          <a href="" class="about">
           <i class="fa-solid fa-circle-info"></i>
           About Us
          </a>
         </li>
         <li class="logOut">
          <form action="index.php" method="post">
           <a href="javascript:">
            <i class="fa-solid fa-right-from-bracket"></i><input type="submit" name="signout" value="Log Out">
           </a>
          </form>
         </li>
         <li class="report">
          <a href="">
           <i class="fa-solid fa-flag"></i>
           Send Feedback
          </a>
          <span>Help us to improve Concat</span>
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>

    <script src="js/header.js"></script>
