<link rel="stylesheet" href="css/addCourse.css">

<?php require_once 'header.php'; ?>

<div class="addCourse-container">
 <div class="container">

  <form action="courses.php" method="get">
   <div class="middle">
    <div class="text-box">
     <label for="coursename">Instructor Name</label>
     <input type="text" name="name" id="coursename" required>
    </div>
    <div class="text-box">
     <label for="course_cover">Course Cover</label>
     <input type="file" name="course_cover" id="course_cover" accept="image/jpeg,image/x-png,image/gif">
    </div>
    <div class="text-box">
     <label for="path">Course Path "Link"</label>
     <input type="text" name="path" id="path" required>
    </div>
   </div>
   <button>ADD</button>
  </form>
 </div>
</div>

<script src="js/addCourse.js"></script>
<?php require 'friendsChat.php'; ?>
