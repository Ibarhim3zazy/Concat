<link rel="stylesheet" href="css/addCourse.css">

<?php require_once 'header.php'; ?>

<div class="addCourse-container">
 <div class="container">

  <form action="courses.php" method="get">
   <div class="together">
    <div class="department sec">
     <div class="select-box">

      <div class="options-container  ">
       <div class="option">
        <input type="radio" class="radio" id="automobiles" name="category">
        <label for="automobiles">Automobiles</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="film" name="category">
        <label for="film">Film & Animation</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="science" name="category">
        <label for="science">Science & Technology</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="art" name="category">
        <label for="art">Art</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="music" name="category">
        <label for="music">Music</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="travel" name="category">
        <label for="travel">Travel & Events</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="sports" name="category">
        <label for="sports">Sports</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="news" name="category">
        <label for="news">News & Politics</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials" name="category">
        <label for="tutorials">Tutorials</label>
       </div>
      </div>

      <div class="selected">
       Select Department
      </div>

      <div class="search-box">
       <input type="text" name="text" id="search" placeholder="Start Typing...">
      </div>

     </div>
     <div class="or">OR
     </div>
     <div class="text-box">
      <label for="text">Enter Department Name</label>
      <input type="text" name="text" id="text">
     </div>

    </div>
    <div class="lang sec">

     <div class="select-box">
      <div class=" lang-container ">
       <div class=" lang-option">
        <input type="radio" class="radio" id="html" name="category">
        <label for="html">HTML</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="css" name="category">
        <label for="css">Css</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="java" name="category">
        <label for="java">Java</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="javascript" name="category">
        <label for="javascript">Javascript</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="jquary" name="category">
        <label for="jquary">jQuray</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="python" name="category">
        <label for="python">Python</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="go" name="category">
        <label for="go">Go</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="perl" name="category">
        <label for="perl">Perl</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp" name="category">
        <label for="csharp">C#</label>
       </div>
      </div>

      <div class=" lang-selected">
       Select Language
      </div>

      <div class="searchBox">
       <input type="text" name="text" id="search" placeholder="Start Typing...">
      </div>

     </div>
     <div class="or">OR</div>
     <div class="text-box">
      <label for="text">Enter Language Name</label>
      <input type="text" name="text" id="text">
     </div>
    </div>
   </div>
   <div class="middle">
    <div class="text-box">
     <label for="coursename">Course Name</label>
     <input type="text" name="name" id="coursename" required>
    </div>
    <div class="text-box">
     <label for="cover">Course Cover</label>
     <input type="file" name="cover" id="cover">
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
