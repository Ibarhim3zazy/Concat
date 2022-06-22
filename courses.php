<link rel="stylesheet" href="css/courses.css">

<?php require_once 'header.php'; ?>

<div class="couses_container">

 <div class="container">
  <ul class="taps">
   <li class="active" data-cont=".one">library</li>
   <?php
   $field_course_result = $con->query("SELECT DISTINCT field FROM cources ORDER BY id ASC");
   $field_course_num = $con->affected_rows;
   if($field_course_num != 0 && $field_course_result == true){
      $num = 1;
     while ($field_course_row = $field_course_result-> fetch_assoc()){
       $num += 1;
       $str = strtolower(numberTowords($num));
       echo '
       <li data-cont=".'.$str.'">'.$field_course_row['field'].'</li>
       ';
     }
   }
    ?>
   <!-- <li data-cont=".two">Frontend Developer</li>
   <li data-cont=".three">Backend Developer</li>
   <li data-cont=".four">Full Stack</li>
   <li data-cont=".five">Android</li> -->
  </ul>
  <div class="contents">
   <div class="one">
    <div class="conten">
      <div class="flow">
         <a href="addCourse.php"> <i class="fa-solid fa-arrow-right"></i>Add New Course</a>
      </div>
      <div class="flow" style="top: 250px;">
         <a href="addinstructor0.php" target="_blank"> <i class="fa-solid fa-arrow-right"></i>Add New Instructor</a>
      </div>
     <div class="box">
      <a href="resource.php">
       <img src="images/html.jpg" alt="">
       <h2>Html</h2>
      </a>
     </div>
    </div>
   </div>
   <?php
   $field_course_result = $con->query("SELECT DISTINCT field FROM cources ORDER BY id ASC");
   $field_course_num = $con->affected_rows;
   if($field_course_num != 0 && $field_course_result == true){
      $num = 1;
     while ($field_course_row = $field_course_result-> fetch_assoc()){
       $num += 1;
       $str = strtolower(numberTowords($num));
       $field = $field_course_row['field'];
       $roadmap_link_result = $con->query("SELECT * FROM road_map WHERE field='$field';");
       if($roadmap_link_row = $roadmap_link_result-> fetch_assoc()){
          $roadmap_link =$roadmap_link_row['roadmap_link'];
       }else {
         $roadmap_link = 'page_not_found.php';
       }
       echo '
       <div class="'.$str.'">
        <div class="conten">
          <div class="flow">
             <a href="'.$roadmap_link.'" target="_blank"> <i class="fa-solid fa-arrow-right"></i>Roadmap</a>
          </div>
       ';
       $lang_course_result = $con->query("SELECT * FROM cources WHERE field='$field'");
       $lang_course_num = $con->affected_rows;
       if($lang_course_num != 0 && $lang_course_result == true){
         while ($lang_course_row = $lang_course_result-> fetch_assoc()){
           echo '
             <div class="box">
              <a href="resource.php?LangID='.$lang_course_row['language_id'].'">
               <img src="Course___Cover/Lang___Cover/'.$lang_course_row['lang_cover'].'" alt="">
               <h2>'.$lang_course_row['language'].'</h2>
              </a>
             </div>
           ';
         }
       }
       echo '
       </div>
      </div>
       ';
     }
   }

    ?>
  </div>
 </div>
</div>

<script src="js/courses.js"></script>
<?php require 'friendsChat.php'; ?>
