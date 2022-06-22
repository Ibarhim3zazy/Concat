<link rel="stylesheet" href="css/addCourse.css">
<link rel="stylesheet" href="css/pop_up.css">
<script>
  if(window.history.replaceState){
  	window.history.replaceState(null, null, window.location.href);
  }
</script>

<?php require_once 'header.php';
  if (isset($_POST['instructor_name']) == true && isset($_FILES['course_cover']['name']) == true && isset($_POST['lang_category']) == true &&  isset($_POST['course_path']) == true) {
    $language_id = htmlentities($_POST['lang_category']);
    $instructor_name = htmlentities($_POST['instructor_name']);
    $pic_name = htmlentities($_FILES['course_cover']['name']);
    $course_path = htmlentities($_POST['course_path']);
    /* Choose where to save the uploaded file */
    $location = "Course___Cover/instructor___Cover/".$pic_name;
    /* Save the uploaded file to the local filesystem */
    if ( move_uploaded_file($_FILES['course_cover']['tmp_name'], $location) ) {
      id_generator($con);
      $course_id = $id_generated;
      $addinstructorResult = $con->query("INSERT INTO instructor_course VALUES(NULL, '$language_id', '$course_id', '$instructor_name','$pic_name', '$course_path',NULL);");
      if ($addinstructorResult = true) {
        echo '
        <div class="pop_up_ok" id="addAnotherCourse" style="display:block;">
            <form class="contan" method="post">
              <p>Press OK To add another Instructor and press cancel to move to courses page</p>
              <div class="ok">
                <input type="submit" value="OK!" class="bttn">
                <a href="courses.php" class="bttn">Cancel!</a>
              </div>
            </form>
          </div>
        ';
      }
    } else {
      echo 'Failure_pic_upload';
    }

  }
 ?>
<div class="addCourse-container">
 <div class="container">

  <form action="addinstructor0.php" id="add_course" onsubmit="return false;" method="POST" enctype="multipart/form-data">
    <div class="select-box">

     <div class="options-container  ">
       <?php
       $lang_course_result = $con->query("SELECT DISTINCT language FROM cources");
       $lang_course_num = $con->affected_rows;
       if($lang_course_num != 0 && $lang_course_result == true){
         while ($lang_course_row = $lang_course_result-> fetch_assoc()){
           $lang = $lang_course_row['language'];
           $lang_id_result = $con->query("SELECT * FROM cources WHERE language='$lang'");
           $lang_id_num = $con->affected_rows;
           if($lang_id_num != 0 && $lang_id_result == true){
             if ($lang_id_row = $lang_id_result-> fetch_assoc()){
               echo '
               <div class="option">
                <input type="radio" class="radio" id="'.$lang.'" name="lang_category" value="'.$lang_id_row['language_id'].'">
                <label for="'.$lang.'">'.$lang.'</label>
               </div>
               ';
             }
           }
         }
       }
        ?>
     </div>

     <div class="selected" id="selected">Select Language</div>

     <div class="search-box">
      <input type="text" id="search" placeholder="Start Typing...">
     </div>

    </div>

   <div class="middle">
    <div class="text-box">
     <label for="coursename">Instructor Name</label>
     <input type="text" name="instructor_name" id="coursename">
    </div>
    <div class="text-box">
     <label for="course_cover">Course Cover</label>
     <input type="file" name="course_cover" id="course_cover" accept="image/jpeg,image/x-png,image/gif">
    </div>
    <div class="text-box">
     <label for="path">Course Path "Link"</label>
     <input type="text" name="course_path" id="path">
    </div>
   </div>
   <button onclick="InstructorSubmit()">ADD</button>
  </form>
 </div>
</div>
<div class="pop_up_ok">
    <div class="contan">
        <p></p>
        <div class="ok">
            <a href="javascript:" onclick="document.getElementsByClassName('pop_up_ok')[0].style.display = 'none';">OK!</a>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/pop_up.js"></script>
<script src="js/addCourse.js"></script>
<?php require 'friendsChat.php'; ?>
