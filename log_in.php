<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/log_in.css">
    <link rel="icon" href="images/bear.svg">
    <title> Concat | Welcome In </title>
</head>

<body>
  <?php
  if (!isset($_SESSION)) session_start();
    if (isset($_SESSION['user_id']) == true){
      header("location: index.php");
    }
   ?>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <div class="sign-in-form form" id="form">
                    <img src="images/begin-chat.svg" alt="" width="90px"
                        style="border-radius: 50px 20px; padding: 5px; border: 2px solid #dee9fc;">
                    <h2 class="tittle">Sign In</h2>
                    <div class="input-field  ">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="ID or your email" id="user" tabindex="10">
                        <div class="any-name">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                    </div>
                    <div class="check">
                        <a href="forgetPass1.php">Forgetten Password?</a>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" tabindex="20">
                        <div class="any-name">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                    </div>

                    <input type="button" onclick="checkInput(); submit_sign_in()" value="Sign In" class="btn solid" tabindex = "30">

                    <div class="links">
                        <a href="">Terms</a>
                        <a href="">Privacy Policy</a>
                        <a href=""> Help</a>
                        <a href="">Security</a>
                    </div>
                </div>


                <div class="sign-up-form form" id="signIn">
                    <img src="images/welcome.svg" alt="" width="90px"
                        style="border-radius: 50px 20px; padding: 5px; border: 2px solid #dee9fc;">
                    <h2 class="tittle">Sign Up</h2>
                    <div class="container-fo">
                        <div class="right">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Name" id="name" name="name" tabindex="50">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" id="pass" name="pass" tabindex="70">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" placeholder="Phone Number" id="phone" name="phone" tabindex="90">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-address-card"></i>
                                <input type="date" id="b_date" name="b_date" tabindex="110" value="00 00 00">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                        </div>
                        <div class="left">
                            <div class="input-field">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" tabindex="60" placeholder="Email Address" id="email" name="email">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" tabindex="80" placeholder="Confirm Your Password"
                                    id="confirmPass">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <input type="text" tabindex="100" placeholder="Current Address" id="caddress" name="caddress">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-venus-mars"></i>
                                <label for="gender"> Gender</label>
                                <select name="Gender" id="gender" tabindex="140" tabindex = "130">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accept">
                        <input type="checkbox" id="check" tabindex="160">
                        <label for="check"> I agree to the <a href="">Terms</a> & <a href="">Privacy Policy</a></label>
                    </div>
                    <input type="button" onclick="checkInputs(); submit_sign_up()" value="Sign Up" class="btn solid" tabindex= "170">
                </div>

            </div>
        </div>
        <div class="panels">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Are You New Here ?</h3>
                    <p>
                        Welcome to CONCAT. The website of Mansoura University, Faculty of Quality Education, Met Ghamr
                        Branch.
                        It is a social communication site that includes the faculty members, doctor , student and
                        especially
                        graduates, where we aim to achieve the greatest communication between us.
                    </p>
                    <button class="btn transparent" id="sign-up-btn" tabindex = "40">Sign Up</button>
                </div>
                <img src="images/buildingWebsite.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>
                        We aim to give recent graduates to be in a relationship with the college, continue their
                        education, and find work and
                        courses through the offers that companies give them.
                    </p>
                    <button class="btn transparent" id="sign-in-btn" tabindex = "150">Sign In</button>
                </div>
                <img src="images/workchat.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <div class="pop_up">
        <div class="contan">
            <p></p>
            <div class="ok">
                <a href="javascript:" onclick="document.getElementsByClassName('pop_up')[0].style.display = 'none';
">OK!</a>
            </div>
        </div>
    </div>
    <script src="js/log_in.js"></script>
</body>

</html>
