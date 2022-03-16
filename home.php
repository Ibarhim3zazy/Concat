<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home.css">
    <title>Concat</title>
</head>

<body>
    <?php require_once 'header.php';
        require 'CreatePost.php';?>

    <div class="conLeftPage">
        <div class="container">
            <div class="con_box">
                <div class="box">
                    <img src="images/cat-1.jpg" alt="" width="35px" height="35px" style="border-radius: 50%;">
                    <span><a href="profile.php">User Name</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-user-group"></i></a>
                    <span><a href="">Friends</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-users"></i></a>
                    <span><a href="">Groups</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-book"></i></a>
                    <span>
                        <a href="">Courses</a>
                    </span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-bookmark"></i></a>
                    <span>
                        <a href="">Saved</a>
                    </span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-pager"></i></a>
                    <span><a href="">Pages</a></span>
                </div>
            </div>
            <div class="con_box">
                <h3 class="caption">
                    <i class="fa-solid fa-scissors"></i>
                    Shortcut
                </h3>
                <div class="box">
                    <a href=""><i class="fa-brands fa-cuttlefish"></i></a>
                    <span>
                        <a href="">Example</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>