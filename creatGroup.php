<link rel="stylesheet" href="css/creategroup.css">

<?php require_once 'header.php';
  GetPersonalInfo($con)
?>

<div class="form create_group">
 <div class="container">
  <div class="contain">
   <p><a href="group.php">Groups</a> > Create group</p>
   <h2>Create group</h2>
   <div class="admin">
    <img src="profile___pic/<?= $row['personal_pic'] ?>" alt="" width="40px" height="40px" style="border-radius: 50%;">
    <div class="admin_name">
     <h3><?= $row['name'] ?></h3>
     <span>Admin</span>
    </div>
   </div>
   <div id="creating_group">
    <div class="top">
     <input type="text" id="groupName" placeholder="Group Name" required>
     <input type="hidden" id="admin_id" value="<?= $row['user_id'] ?>">
     <div class="select">
      <label for="privacy">Chosse Privacy</label>
      <select name="privacy" id="privacy" required>
       <option value="private">Private</option>
       <option value="puplic">Puplic</option>
      </select>
     </div>
    </div>
    <input type="button" value="Create" onclick="submitCreateGroup()" >
   </div>
  </div>

  <!-- <input type="button" value="Create"> -->
 </div>
</div>
<script type="text/javascript" src="js/group.js"></script>
