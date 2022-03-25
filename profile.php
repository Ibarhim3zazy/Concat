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
    <link rel="stylesheet" href="css/profile.css">
    <title>Concat | User Name</title>
</head>


<body>
    <?php require_once 'header.php';?>
    <div class="profile_container">
        <div class="container">
            <div class="section_profile">
                <div class="cover_photo">
                    <img src="images/background.jpg" alt="">
                    <i class="fa-solid fa-camera"></i>
                </div>
                <div class="profile_pic">
                    <img src="images/cat-1.jpg" alt="" width="160px" height="160px"
                        style="border-radius: 50%; border : 3px solid #fff;">
                    <i class="fa-solid fa-camera"></i>
                </div>
                <div class="profile_name">
                    <div class="rightside">
                        <h2>user name</h2>
                        <div class="friends">
                            <!-- this number will be variable -->
                            <a href="friends.php"><span>1.4K</span> Friends</a>
                            <div class="frindImage">
                                <a href="">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                </a>
                                <a href="">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                </a>
                                <a href="">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                </a>
                                <a href="">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                </a>
                                <a href="">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                </a>
                                <a href="friends.php">
                                    <img src="images/cat-1.jpg" alt="" width="40px" height="40px"
                                        style="border-radius: 50%;">
                                    <span><i class="fa-solid fa-ellipsis"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button><i class="fa-solid fa-pen"></i> Edit Profile</button>
                </div>
                <div class="client_profile">
                    <button><i class="fa-solid fa-user-plus"></i> <span>Add Buddy</span></button>
                    <button><i class="fa-brands fa-facebook-messenger"></i> <span>Send Message</span></button>
                    <span class="more">
                        <button id="openMore"><i class="fa-solid fa-ellipsis"></i></button>
                        <ul id="more">
                            <li>
                                <i class="fa-solid fa-ban"></i>
                                Block
                            </li>
                            <li>
                                <i class="fa-solid fa-flag"></i> Report
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="contain">
        <div class="leftPart">
            <a href="profile.php" class="pinName">
                <img src="images/cat-1.jpg" alt="" width="50px" height="50px" style="border-radius: 50%;">
                <span>user name</span>
            </a>
            <div class="bioBox">
                <div class="bio">
                    σƙҽყ.. <br>
                    ιƚ'ʂ σƙҽყ ɳσƚ ƚσ Ⴆҽ σƙҽყ♡..
                </div>
                <button>Edit Bio</button>
            </div>
        </div>
        <div class="middle">
            <?php
                require 'CreatePost.php';
            ?>
        </div>
        <div class="rightPart">
            <div class="pin">
                <button>Posts</button>
                <button>Photos</button>
                <button>Videos</button>
                <button>Links</button>
                <button>About</button>
                <button>Friends</button>
            </div>
            <div class="info">
                <div class="live box">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Lives in</span>
                    <a href="">Mansourah, Ad Daqahliyah, Egypt</a>
                </div>
                <div class="form box">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Form</span>
                    <a href="">Egypt</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/profile.js"></script>
</body>

</html>