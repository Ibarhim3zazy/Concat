    <link rel="stylesheet" href="css/post.css">

    <div class="create_post">
        <div class="container">
            <img src="images/cat-1.jpg" alt="">
            <!-- user name will change so it's variable -->
            <input type="button" value="What's on your mind, User Name?">
            <!-- <hr>
            <div class=" effect">
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
                    <!-- change create box to contain header and close -->
                    <div class="box">
                        <header>Create A Post</header>
                        <!--s change add close and id -->
                        <div class="arrow" id="close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <!--e change -->
                    </div>
                    <!--e change -->
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
                        <textarea placeholder="What's on your mind, User Name?" required id="textarea"></textarea>
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
                        <button id="sharepost">Post</button>
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

    <!-- change design post -->
    <div class="designPost" id="designPost">
        <div class="contain">
            <div class="box_1">
                <div class="image">
                    <a href="profile.php"><img src="images/cat-1.jpg" alt="" width="66px" style="border-radius: 50%;"
                            height="66px"></a>
                    <div class="infoProfile">
                        <div class="userName">
                            <a href="profile.php">
                                User Name
                            </a>
                        </div>
                        <div class="data">
                            <!-- date must be changed -->
                            <a href="">13m <i class="fa-solid fa-clock"></i></a>
                            <i class="fas fa-user-friends"></i>
                        </div>
                    </div>
                </div>
                <span class="more">
                    <i class="fa-solid fa-angle-down"></i>
                </span>
            </div>
            <div class="box_2" id="boxTwo">
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
    </div>
    <script src="js/post.js"></script>
