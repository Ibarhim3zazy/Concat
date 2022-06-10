<link rel="stylesheet" href="css/addCourse.css">

<?php require_once 'header.php'; ?>

<div class="addCourse-container">
 <div class="container">

  <form action="addinstructor.php" method="post">
   <div class="together">
    <div class="department sec">
     <div class="select-box">

      <div class="options-container  ">
       <div class="option">
        <input type="radio" class="radio" id="automobiles" name="category" value="Front-end">
        <label for="automobiles">Front-end</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="film"  name="category" value="Back-end">
        <label for="film">Back-end</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="science"  name="category" value="Android">
        <label for="science">Android</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="art"  name="category" value="iOS">
        <label for="art">iOS</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="music"  name="category" value="Desktop_programming">
        <label for="music">Desktop programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="travel"  name="category" value="Game_programming">
        <label for="travel">Game programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="sports"  name="category" value="Graphics">
        <label for="sports">Graphics</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="news"  name="category" value="Systems_programming">
        <label for="news">Systems programming</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Internet_of_Things">
        <label for="tutorials">Internet of Things</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Robotics">
        <label for="tutorials">Robotics</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Data_science">
        <label for="tutorials">Data science</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Machine_learning">
        <label for="tutorials">Machine learning</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Cloud_computing">
        <label for="tutorials">Cloud computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Numerical_computing">
        <label for="tutorials">Numerical computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Virtual_augmented">
        <label for="tutorials">Virtual/augmented reality</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Enterprise_business_computing">
        <label for="tutorials">Enterprise business computing</label>
       </div>
       <div class="option">
        <input type="radio" class="radio" id="tutorials"  name="category" value="Industrial_automation">
        <label for="tutorials">Industrial automation</label>
       </div>
      </div>

      <div class="selected">
       Select Field
      </div>

      <div class="search-box">
       <input type="text" name="text" id="search" placeholder="Start Typing...">
      </div>

     </div>
     <div class="or">OR
     </div>
     <div class="text-box">
      <label for="text">Enter Field Name</label>
      <input type="text" name="text" id="text">
     </div>

    </div>
    <div class="lang sec">

     <div class="select-box">
      <div class=" lang-container ">
       <div class=" lang-option">
        <input type="radio" class="radio" id="html"  name="category_b" value="HTML">
        <label for="html">HTML</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="css"  name="category_b" value="CSS">
        <label for="css">CSS</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="java"  name="category_b" value="Java">
        <label for="java">Java</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="javascript"  name="category_b" value="JavaScript">
        <label for="javascript">JavaScript</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="jquary"  name="category_b" value="jQuray">
        <label for="jquary">jQuray</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="python"  name="category_b" value="Python">
        <label for="python">Python</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="go"  name="category_b" value="Go">
        <label for="go">Go</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="perl"  name="category_b" value="Perl">
        <label for="perl">Perl</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Swift">
        <label for="csharp">Swift</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="c_plusplus">
        <label for="csharp">C++</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="R">
        <label for="csharp">R</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="PHP">
        <label for="csharp">PHP</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="TypeScript">
        <label for="csharp">TypeScript</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Scala">
        <label for="csharp">Scala</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Shell">
        <label for="csharp">Shell</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="PowerShell">
        <label for="csharp">PowerShell</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Haskell">
        <label for="csharp">Haskell</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Kotlin">
        <label for="csharp">Kotlin</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Visual_Basic">
        <label for="csharp">Visual Basic .NET</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="SQL">
        <label for="csharp">SQL</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Delphi">
        <label for="csharp">Delphi</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="MATLAB">
        <label for="csharp">MATLAB</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Groovy">
        <label for="csharp">Groovy</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Lua">
        <label for="csharp">Lua</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Rust">
        <label for="csharp">Rust</label>
       </div>
       <div class=" lang-option">
        <input type="radio" class="radio" id="csharp"  name="category_b" value="Ruby">
        <label for="csharp">Ruby</label>
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
     <div class="text-box">
     <label for="lang_cover">Language Cover</label>
     <input type="file" name="lang_cover" id="lang_cover" accept="image/jpeg,image/x-png,image/gif">
    </div>
    </div>
   </div>
   <button>ADD</button>
  </form>
 </div>
</div>

<script src="js/addCourse.js"></script>
<?php require 'friendsChat.php'; ?>
