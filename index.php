<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/bear.svg">
    <title> Concat | Welcome In </title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <div class="sign-in-form form" id="form">
                    <img src="images/begin-chat.svg" alt="" width="90px"
                        style="border-radius: 50px 20px; padding: 5px; border: 2px solid #dee9fc;">
                    <h2 class="tittle">Sign In</h2>
                    <div class="input-field  ">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="ID or your email" id="user">
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
                        <input type="password" placeholder="Password" id="password">
                        <div class="any-name">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                    </div>

                    <input type="button" onclick="checkInput(); submit_sign_in()" value="Sign In" class="btn solid">

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
                                <input type="text" placeholder="Name" id="name" name="name">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" id="pass" name="pass">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" placeholder="Phone Number" id="phone" name="phone">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-address-card"></i>
                                <input type="number" placeholder="Age" id="age" name="age">
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
                                <input type="email" placeholder="Email Address" id="email" name="email">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm Your Password" id="confirmPass">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>

                            <div class="input-field">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <input type="text" placeholder="Career" id="career" name="career">
                                <div class="any-name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-venus-mars"></i>
                                <label for="gender"> Gender</label>
                                <select name=" Gender" id="gender">
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
                        <input type="checkbox" id="check">
                        <label for="check"> I agrey to the <a href="">Terms</a> & <a href="">Privacy Policy</a></label>
                    </div>
                    <input type="button" onclick="checkInputs(); submit_sign_up()" value="Sign Up" class="btn solid">
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
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
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
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="images/workchat.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>