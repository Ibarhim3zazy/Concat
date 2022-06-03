 <link rel="stylesheet" href="css/setting.css">

<?php require_once 'header.php'; ?>

<div class="setting-container">
  <div class="container">
    <ul class="taps">
      <li class="active" data-cont=".personal">Personal Information</li>
      <li data-cont=".password">Password</li>
      <li data-cont=".manage">Manage your profile</li>
      <li data-cont=".blocking">Blocking</li>
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
                <h3>Add Another Email</h3>
                <div class="vertical">
                  <input type="email" placeholder="enter new email" >
                  <input type="password" placeholder="password">
                </div>
              </div>
              <div class="min-box">
                <h3>phone Number</h3>
                <input type="text" placeholder="01298291011" disabled>
              </div>
              <div class="min-box">
                <h3>Add phone number</h3>
                <div class="center-box">
                  <input type="text" placeholder="new phone number..">
                  <input type="button" value="Verified" class="notactive">
                  <div class="minbox">
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

              </div>

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

            </form>
          </div>
        </div>
      </div>

      <div class="blocking">
        <div class="conten">
          <div class="box">
            <form class="form block"  method="post">

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<?php require 'friendsChat.php'; ?>

<script src="js/setting.js" charset="utf-8"></script>
