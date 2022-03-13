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
    <link rel="stylesheet" href="css/post.css">
    <title>Concat</title>
</head>

<body>
    <div class="create_post">
        <div class="container">
            <img src="images/cat-1.jpg" alt="">
            <!-- user name will change so it's variable -->
            <input type="button" value="What's on your mind, User Name?" onclick="showPost()">
            <!-- <hr>
            <div class="effect">
                <div class="photo">

                </div>
            </div> -->
        </div>
    </div>
    <!-- pop up creating post -->
    <div class="pop_post">
        <div class="container">
            <div class="wrapper">
                <section class="post">
                    <header>Create A Post</header>
                    <form action="#">
                        <div class="contant">
                            <img src="images/cat-1.jpg" alt="" width="66px" style="border-radius: 50%;" height="66px">
                            <div class="detailes">
                                <p>User Name</p>
                                <div class="privacy">
                                    <i class="fas fa-user-friends"></i>
                                    <span>Friends</span>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <textarea placeholder="What's on your mind, User Name?" required></textarea>
                        <div class="theme-emoji">
                            <a href=""><i class="fa-solid fa-face-smile"></i></a>
                            <a href=""><i class="fa-solid fa-face-smile"></i></a>
                        </div>
                        <div class="options">
                            <p>Add to your post</p>
                            <ul class="list">
                                <li class="photo">
                                    <a href=""><i class="fa-solid fa-images"></i></a>
                                </li>
                                <li class="video">
                                    <a href=""><i class="fa-solid fa-video"></i></a>
                                </li>
                                <li class="link">
                                    <a href=""><i class="fa-solid fa-link"></i></a>
                                </li>
                                <li class="tag_friends">
                                    <a href=""><i class="fa-solid fa-user-tag"></i></a>
                                </li>
                            </ul>
                        </div>
                        <button>Post</button>
                    </form>
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
                            <div class="column">
                                <div class="icon"><i class="fas fa-globe-asia"></i></div>
                                <div class="detailes">
                                    <p>Puplic</p>
                                    <span>Anyone on or off Concat</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li class="active">
                            <div class="column">
                                <div class="icon"><i class="fas fa-user-friends"></i></div>
                                <div class="detailes">
                                    <p>Friends</p>
                                    <span>Your friends on Concat</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <div class="detailes">
                                    <p>Specific</p>
                                    <span>Only show to some friends</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-lock"></i></div>
                                <div class="detailes">
                                    <p>Only me</p>
                                    <span>Only you can see your post</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-cog"></i></div>
                                <div class="detailes">
                                    <p>Custom</p>
                                    <span>Include and exclude friends</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <script src="js/post.js"></script>
</body>

</html>
