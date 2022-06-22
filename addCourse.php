<link rel="stylesheet" href="css/addCourse.css">
<link rel="stylesheet" href="css/pop_up.css">

<?php require_once 'header.php'; ?>

<div class="addCourse-container">
 <div class="container">

  <form id="add_course" onsubmit="return false;" action="addinstructor.php" method="post" enctype="multipart/form-data">
   <div class="together">
    <div class="department sec">
     <div class="select-box">

      <div class="options-container  ">
       <div class="option">
        <input type="radio" class="radio" id="automobiles"name="field_category" value="Front-end">
        <label for="automobiles">Front-end</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="film" name="field_category" value="Back-end">
        <label for="film">Back-end</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="science" name="field_category" value="Android">
        <label for="science">Android</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="art" name="field_category" value="iOS">
        <label for="art">iOS</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="music" name="field_category" value="Desktop_programming">
        <label for="music">Desktop programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="travel" name="field_category" value="Game_programming">
        <label for="travel">Game programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="sports" name="field_category" value="Graphics">
        <label for="sports">Graphics</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="news" name="field_category" value="Systems_programming">
        <label for="news">Systems programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Internet_of_Things" name="field_category" value="Internet_of_Things">
        <label for="Internet_of_Things">Internet of Things</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Robotics" name="field_category" value="Robotics">
        <label for="Robotics">Robotics</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Data_science" name="field_category" value="Data_science">
        <label for="Data_science">Data science</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Machine_learning" name="field_category" value="Machine_learning">
        <label for="Machine_learning">Machine learning</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Cloud_computing" name="field_category" value="Cloud_computing">
        <label for="Cloud_computing">Cloud computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Numerical_computing" name="field_category" value="Numerical_computing">
        <label for="Numerical_computing">Numerical computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Virtual_augmented" name="field_category" value="Virtual_augmented">
        <label for="Virtual_augmented">Virtual/augmented reality</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Enterprise_business_computing" name="field_category" value="Enterprise_business_computing">
        <label for="Enterprise_business_computing">Enterprise business computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="Industrial_automation" name="field_category" value="Industrial_automation">
        <label for="Industrial_automation">Industrial automation</label>
       </div>
      </div>

      <div class="selected" id="selected">Select Field</div>

      <div class="search-box">
       <input type="text" id="search" placeholder="Start Typing...">
      </div>

     </div>
     <div class="or">OR
     </div>
     <div class="text-box">
      <label for="field_category_txt">Enter Field Name</label>
      <input type="text" name="field_category_txt" id="field_category_txt">
     </div>
     <br>
     <div class="text-box">
      <label for="field_category_txt">Enter roadmap link</label>
      <input type="text" name="roadmap_link" id="roadmap_link">
     </div>

    </div>
    <div class="lang sec">

     <div class="select-box">
      <div class=" lang-container ">
       <div class="lang-option">
        <input type="radio" class="radio" id="html" name="lang_category" value="HTML">
        <label for="html">HTML</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="css" name="lang_category" value="CSS">
        <label for="css">CSS</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="java" name="lang_category" value="Java">
        <label for="java">Java</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="javascript" name="lang_category" value="JavaScript">
        <label for="javascript">JavaScript</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="jquary" name="lang_category" value="jQuray">
        <label for="jquary">jQuray</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="python" name="lang_category" value="Python">
        <label for="python">Python</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="go" name="lang_category" value="Go">
        <label for="go">Go</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="perl" name="lang_category" value="Perl">
        <label for="perl">Perl</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="csharp" name="lang_category" value="Swift">
        <label for="csharp">Swift</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="c_plusplus" name="lang_category" value="c_plusplus">
        <label for="c_plusplus">C++</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="R" name="lang_category" value="R">
        <label for="R">R</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="PHP" name="lang_category" value="PHP">
        <label for="PHP">PHP</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="TypeScript" name="lang_category" value="TypeScript">
        <label for="TypeScript">TypeScript</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Scala" name="lang_category" value="Scala">
        <label for="Scala">Scala</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Shell" name="lang_category" value="Shell">
        <label for="Shell">Shell</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="PowerShell" name="lang_category" value="PowerShell">
        <label for="PowerShell">PowerShell</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Haskell" name="lang_category" value="Haskell">
        <label for="Haskell">Haskell</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Kotlin" name="lang_category" value="Kotlin">
        <label for="Kotlin">Kotlin</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Visual_Basic" name="lang_category" value="Visual_Basic">
        <label for="Visual_Basic">Visual Basic .NET</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="SQL" name="lang_category" value="SQL">
        <label for="SQL">SQL</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Delphi" name="lang_category" value="Delphi">
        <label for="Delphi">Delphi</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="MATLAB" name="lang_category" value="MATLAB">
        <label for="MATLAB">MATLAB</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Groovy" name="lang_category" value="Groovy">
        <label for="Groovy">Groovy</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Lua" name="lang_category" value="Lua">
        <label for="Lua">Lua</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Rust" name="lang_category" value="Rust">
        <label for="Rust">Rust</label>
       </div>
       <div class="lang-option">
        <input type="radio" class="radio" id="Ruby" name="lang_category" value="Ruby">
        <label for="Ruby">Ruby</label>
       </div>
      </div>
      <div class="lang-selected" id="lang-selected">Select Language</div>

      <div class="searchBox">
       <input type="text" id="search" placeholder="Start Typing...">
      </div>

     </div>
     <div class="or">OR</div>
     <div class="text-box">
      <label for="lang_category_txt">Enter Language Name</label>
      <input type="text" name="lang_category_txt" id="lang_category_txt">
     </div>
     <br>
     <div class="text-box">
     <label for="lang_cover">Language Cover *required</label>
     <input type="file" name="lang_cover" id="lang_cover" accept="image/jpeg,image/x-png,image/gif">
    </div>
    </div>
   </div>
   <button onclick="courseSubmit()">ADD</button>
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
