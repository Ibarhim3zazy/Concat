<link rel="stylesheet" href="css/search.css">

<?php require_once 'header.php'; require_once 'general_ajax.php';

if (isset($_GET['Search'])) {
  $SearchWord = $_GET['Search'];
}
?>

<div class="search-container">
  <div class="container">
    <ul class="taps">
      <li class="active" data-cont = ".one"><i class="fa-solid fa-user-group"></i>  People</li>
      <li data-cont = ".two"><i class="fa-solid fa-users"></i> Groups</li>
      <li data-cont=".three"><i class="fa-solid fa-book"></i> Courses</li>
    </ul>
    <div class="contents">
      <div class="one">
        <div class="conten">
          <?php
          $result= $con->query("SELECT * FROM sign_up_general WHERE name LIKE '%$SearchWord%' OR email LIKE '%$SearchWord%.com' OR mobile_num LIKE '$SearchWord' LIMIT 20;");
          $num_Search = $con->affected_rows;
          if($num_Search != 0 && $result == true){
            while ($row_Search = $result-> fetch_assoc()) {
              echo '
              <div class="box">
              <div class="back">
                <img src="cover___pic/'.$row_Search['cover_pic'].'" alt="">
              </div>
              <div class="pic">
                <img src="profile___pic/'.$row_Search['personal_pic'].'" alt="">
              </div>
              <a href="profile.php?friend_id='.$row_Search['user_id'].'">'.$row_Search['name'].'</a>
              </div>
              ';
            }
          }
           ?>
        </div>
      </div>
      <div class="two">
        <div class="conten">
          <?php
          $result_group_search= $con->query("SELECT * FROM create_group WHERE group_name LIKE '%$SearchWord%' AND visible='1' LIMIT 20;");
          $num_Search = $con->affected_rows;
          if($num_Search != 0 && $result_group_search == true){
            while ($row_Search = $result_group_search-> fetch_assoc()) {
              echo '
              <div class="box">
              <div class="back">
                <img src="group___pic/'.$row_Search['group_pic'].'" alt="">
              </div>
              <a href="groupName.php?group_id='.$row_Search['group_id'].'">'.$row_Search['group_name'].'</a>
              </div>
              ';
            }
          }
           ?>
        </div>
      </div>
      <div class="three">
        <div class="conten">
          <div class="no_result" style="display:none">
            <i class="fa-solid fa-book"></i>
            <p>
              Sorry , we didn't find any courses matching this search.
            </p>
          </div>
          <div class="box" >
            <a href="https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" target="_blank">
             <img src="images/html.jpg" alt="check ur network plz">
             <h2>Elzero Web School</h2>
            </a>
          </div>
          <div class="box" >
            <a href="https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" target="_blank">
             <img src="images/html.jpg" alt="check ur network plz">
             <h2>Elzero Web School</h2>
            </a>
          </div>
          <div class="box" >
            <a href="https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" target="_blank">
             <img src="images/html.jpg" alt="check ur network plz">
             <h2>Elzero Web School</h2>
            </a>
          </div>
          <div class="box" >
            <a href="https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" target="_blank">
             <img src="images/html.jpg" alt="check ur network plz">
             <h2>Elzero Web School</h2>
            </a>
          </div>
          <div class="box" >
            <a href="https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" target="_blank">
             <img src="images/html.jpg" alt="check ur network plz">
             <h2>Elzero Web School</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="up" href="#">
    <i class="fa-solid fa-angles-up"></i>
  </a>
</div>

<script src="js/search.js"></script>
<?php require 'friendsChat.php'; ?>
