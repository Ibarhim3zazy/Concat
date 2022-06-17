<link rel="stylesheet" href="css/feedback.css">

<?php require_once 'header.php'; ?>

<div class="report-container">
  <div class="container">
    <h1>Help Us Improve Concat</h1>
    <form >
      <h2>How can we improve?</h2>
      <input type="text" placeholder="write in short">
      <div class="box-container">
        <label for="detail">Details</label>
        <textarea  rows="8" cols="10" placeholder="Please include as mush info as possible..." id="detail"></textarea>
      </div>
      <div class="box-container">
        <label for="link"><i class="fa-solid fa-link"></i> Add screenshot or video (Recommened)</label>
        <input type="file" id="link">
      </div>
      <p>
        Let us know if you have ideas that can help make our products better. If you need help solving a specific problem, please visit the
        <a href="help.php" target="_blank">Help center</a>
      </p>
      <div class="btns">
        <input type="button"  value="cancle">
        <input type="button"  value="submit" id ="send" >
      </div>
    </form>
  </div>
</div>
