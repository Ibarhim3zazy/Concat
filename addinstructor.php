<link rel="stylesheet" href="css/addCourse.css">
<link rel="stylesheet" href="css/pop_up.css">
<script>
  if(window.history.replaceState){
  	window.history.replaceState(null, null, window.location.href);
  }
</script>

<?php require_once 'header.php';
$field_category = '';
$lang_category = '';
  if (isset($_POST['field_category']) == true AND isset($_POST['lang_category']) == true ) {
    $field_category = htmlentities($_POST['field_category']);
    $lang_category = htmlentities($_POST['lang_category']);
  }elseif (isset($_POST['field_category_txt']) == true AND isset($_POST['lang_category_txt']) == true) {
    $field_category = htmlentities($_POST['field_category_txt']);
    $lang_category = htmlentities($_POST['lang_category_txt']);
  }
  if ($field_category != '' && $lang_category != '') {
    if (isset($_FILES['lang_cover']['name']) == true){
      $pic_name = $_FILES['lang_cover']['name'];
      /* Choose where to save the uploaded file */
      $location = "Course___Cover/Lang___Cover/".$pic_name;
      /* Save the uploaded file to the local filesystem */
      if ( move_uploaded_file($_FILES['lang_cover']['tmp_name'], $location) ) {
        id_generator($con);
        $language_id = $id_generated;
        $con->query("INSERT INTO cources VALUES(NULL, '$language_id', '$field_category', '$lang_category','$pic_name',NULL);");
      } else {
        echo 'Failure_pic_upload';
      }
    }
  }else if(isset($_POST['language_id']) == true) {
    $language_id = htmlentities($_POST['language_id']);
  }
  if (isset($_POST['instructor_name']) == true && isset($_FILES['course_cover']['name']) == true && isset($_POST['course_path']) == true) {
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
              <input type="hidden" name="language_id" value="'.htmlentities($language_id).'" required>
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

  <form action="addinstructor.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="language_id" value="<?= htmlentities($language_id) ?>" required>
   <div class="middle">
    <div class="text-box">
     <label for="coursename">Instructor Name</label>
     <input type="text" name="instructor_name" id="coursename" required>
    </div>
    <div class="text-box">
     <label for="course_cover">Course Cover</label>
     <input type="file" name="course_cover" id="course_cover" accept="image/jpeg,image/x-png,image/gif" required>
    </div>
    <div class="text-box">
     <label for="path">Course Path "Link"</label>
     <input type="text" name="course_path" id="path" required>
    </div>
   </div>
   <button>ADD</button>
  </form>
 </div>
</div>

<script type="text/javascript" src="js/pop_up.js"></script>
<script src="js/addCourse.js"></script>
<?php require 'friendsChat.php'; ?>
