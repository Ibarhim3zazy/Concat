 <link rel="stylesheet" href="css/setting.css">

<?php require_once 'header.php'; ?>

<div class="setting-container">
  <div class="container">
    <ul class="taps">
      <li class="active" data-cont=".personal">Personal Information</li>
      <li data-cont=".password">Password</li>
      <li data-cont=".manage">Manage your profile</li>
      <li data-cont=".blocking">Blocking</li>
      <li data-cont=".newEmail">add new email</li>
        </ul>
    <div class="contents">
      <div class="personal">
        <div class="conten">
          <div class="box">
            <form class="info form"  method="post">
              <div class="content">
              <h1>Basic Information</h1>
              <div class="min-box">
                <h3>Name</h3>
                <div class="center">
                  <input type="text"  placeholder="First User name ">
                  <input type="text" placeholder="last user name" >
                </div>
              </div>
              <div class="min-box">
                <h3>Primary Email</h3>
                <input type="email" placeholder="email@email.com" disabled>
              </div>
              <div class="min-box">
                <h3>An additional Email</h3>
                <div class="center-box">
                  <input type="email" placeholder="email@email.com" disabled >
                  <button type="button" name="button"><i class="fa-solid fa-trash"></i></button>
                  <!-- <div class="center-box">

                    <input type="button" value="Verified" class="notactive" >
                    <div class="minbox resendCode" >
                      <input type="button" value="Resend verification code" class="resend">
                      <div class="enterCode">
                        <p>Enter your one-time verification code that was sent to your mobile device:</p>
                      <div class="code">
                        <input type="text"  >
                        <input type="button" value="Submit" class="active">
                      </div>
                      </div>
                    </div>
                  </div> -->


                </div>
              </div>
              <div class="min-box">
                <h3>phone Number</h3>
                <input type="text" placeholder="01298291011" disabled>
              </div>
              <!-- <div class="min-box">
                <h3>Add phone number</h3>
                <div class="center-box">
                  <input type="text" placeholder="new phone number..">
                  <input type="button" value="Verified" class="notactive verified ">
                  <div class="minbox resendCode">
                    <input type="button" value="Resend verification code" class="resend">
                    <div class="enterCode">
                      <p>Enter your one-time verification code that was sent to your mobile device:</p>
                    <div class="code">
                      <input type="text"  >
                      <input type="button" value="Submit" class="notactive">
                    </div>
                    </div>
                  </div>
                </div>

              </div> -->

                </div>
                <div class="submit">
                  <input type="button"  value="Cancel">
                  <input type="button"  value="Save" class="active-btn">
                </div>
            </form>

          </div>
        </div>
      </div>
      <div class="password">
        <div class="conten">
          <div class="box">
            <form class="form pass"method="post">
              <div class="content">
                <h1>Change Password</h1>
                <input type="password" placeholder="current password">
                <input type="password" placeholder="new password">
                <input type="password" placeholder="re-type new password">
              </div>
              <div class="submit">
                <input type="button"  value="Cancel">
                <input type="button"  value="Save" class="notactive">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="manage">
        <div class="conten">
          <div class="box">
            <form class="form manage"  method="post">
              <div class="content">
                <h1>About</h1>
                <div class="min-box">
                  <h3><i class="fa-solid fa-user-pen"></i> Edit Bio</h3>
                  <textarea name="name">
                     σƙҽყ..
                     ιƚ'ʂ σƙҽყ ɳσƚ ƚσ Ⴆҽ σƙҽყ♡..
                   </textarea >
                </div>
                <div class="min-box">
                  <h3><i class="fa-solid fa-house-chimney"></i> Live in</h3>
                  <input type="text"  value="Mansourah, Ad Daqahliyah, Egypt">
                </div>
                <div class="min-box">
                  <h3><i class="fa-solid fa-location-dot"></i> Form</h3>
                  <input type="text" value="Egypt">
                </div>
                <div class="min-box">
                  <h3> <i class="fa-solid fa-graduation-cap"></i> Study at</h3>
                  <input type="text" name="" value=" Faculty of Physical Education, Zagazig University">
                </div>
                <div class="min-box">
                  <h3> <i class="fa-solid fa-graduation-cap"></i> Degree</h3>
                  <input type="text" name="" value=" Master's in Computer Science">
                </div>
                <div class="min-box">
                  <h3> <i class="fa-solid fa-briefcase"></i> Work at</h3>
                  <input type="text" name="" value=" Health Square Fitness Club, RAK - Best Gym in RAK">
                </div>
                <div class="min-box">
                  <h3><i class="fa-solid fa-signal"></i> status</h3>
                  <select class="statue select" name="">
                    <option value="single">Single</option>
                    <option value="in a relation">in a relation</option>
                    <option value="engaged">engaged</option>
                    <option value="married">married</option>
                    <option value="divorced">divorced</option>
                    <option value="separated">separated</option>
                  </select>
                </div>
                <div class="min-box">
                  <h3> <i class="fa-solid fa-lock"></i></i> Lock profile</h3>
                  <input type="button"  class="lock" value="Lock">
                </div>
              </div>
              <div class="submit">
                <input type="button"  value="Cancel">
                <input type="button"  value="Save" class="notactive">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="blocking">
        <div class="conten">
          <div class="box">
            <form class="form block"  method="post">
              <div class="content">
                <h1>Blocking List</h1>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch2.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch3.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch2.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch2.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch2.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
                <div class="min-box">
                  <div class="prof">
                    <img src="images/picsearch2.jpg" alt="">
                    <h3>Selena Gomez</h3>
                  </div>
                  <input type="button"  value="Unblock">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="newEmail">
        <div class="conten">
          <div class="box">
            <form class="form mail" >
              <div class="content">
                <span id="pass-error"> </span>
                <h1>Add an additional email address :</h1>
                <input type="email"  placeholder="enter" id="emailnew" required>

                <p>
                  adding a current email to your Concat account can help you log in and receive notifications as well as reset your password easily. <br>

                  To save this setting, please enter your Concat password.
                </p>
                <input type="password" id="pass" required>

              </div>
              <div class="submit">
                <input type="button"  value="Cancel" >
                <input type="button"  value="Add Email" class="active"  onclick="check()">
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>


<?php require 'friendsChat.php'; ?>

<script src="js/setting.js" charset="utf-8"></script>
