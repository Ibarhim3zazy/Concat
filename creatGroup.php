<link rel="stylesheet" href="css/creategroup.css">

<?php require_once 'header.php'; ?>

<div class="form create_group">
 <div class="container">
  <div class="contain">
   <p><a href="group.php">Groups</a> > Create group</p>
   <h2>Create group</h2>
   <div class="admin">
    <img src="user_media/image/bear.jpg" alt="" width="40px" height="40px" style="border-radius: 50%;">
    <div class="admin_name">
     <h3>User name</h3>
     <span>Admin</span>
    </div>
   </div>
   <form action="groupName.php">
    <div class="top">
     <input type="text" name="groupName" placeholder="Group Name" required>
     <div class="select">
      <label for="privacy">Chosse Privacy</label>
      <select name="privacy" id="privacy" required>
       <option value="private">Private</option>
       <option value="puplic">Puplic</option>
      </select>
     </div>
    </div>
    <input type="submit" value="Create">
   </form>
  </div>

  <!-- <input type="button" value="Create"> -->
 </div>
</div>
