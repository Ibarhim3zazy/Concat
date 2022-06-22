<link rel="stylesheet" href="css/resource.css">

<?php require_once 'header.php'; ?>


<div class="resource_container">
 <div class="container">
   <?php
   if (isset($_GET['LangID']) == true) {
     $language_id = $_GET['LangID'];
     $instructor_course_result = $con->query("SELECT * FROM instructor_course WHERE language_id='$language_id';");
     $num = $con->affected_rows;
     if($num != 0 && $instructor_course_result == true){
       while ($instructor_course_row = $instructor_course_result-> fetch_assoc()) {
          echo '
          <div class="box">
           <a href="'.$instructor_course_row['course_link'].'" target="_blank">
            <img src="Course___Cover/instructor___Cover/'.$instructor_course_row['course_cover'].'" alt="check ur network plz">
            <h2>'.$instructor_course_row['instructor_name'].'</h2>
           </a>
           <div class="social">
            <button id="like" onclick="clkbtn()">
             <i class=" fa-solid fa-thumbs-up"></i> Like
            </button>
            <button>
             <a href="comments.php"><i class="fa-solid fa-comments"></i> Comment</a>
            </button>
            <button id="add" onclick="addbtn()">
             <i class="fa-solid fa-book-medical"></i> Add To Library
            </button>
           </div>
          </div>
          ';
       }
     }else {
       echo 'No Courses Found 😔';
     }
   }
    ?>
 </div>
</div>
<script src="js/resource.js"></script>
<?php require 'friendsChat.php'; ?>
