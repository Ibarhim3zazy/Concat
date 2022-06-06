<?php  require("connection.php"); require_once 'general_ajax.php';
if (!isset($_SESSION)) session_start();

if (isset($_POST['group_name']) && isset($_POST['admin_id']) && isset($_POST['group_type'])) {
  id_generator($con);
  $group_id = $id_generated;
  $group_name = htmlentities($_POST['group_name']);
  $admin_id= htmlentities($_POST['admin_id']);
  $type = htmlentities($_POST['group_type']);
  createGroup($con,$admin_id,$group_id,$group_name,$type);
}

  // creating group
  function createGroup($con,$admin_id,$group_id,$group_name,$type)
  {
    if ($type == 'puplic') {
      $type = 1;
    }else {
      $type = 0;
    }
    $createGroupResult = $con->query("INSERT INTO create_group VALUES(NULL, '$admin_id', '$group_id', '$group_name','$type','1','defulte_cover.jpg',NULL,NULL,NULL);");
    if ($createGroupResult == true) {
      echo $group_id;
    }else {
      echo $createGroupResult;
    }
  }

  // view group basic information
  function GetGroupInfo($con,$group_id)
  {
      $result_group_info= $con->query("SELECT * FROM create_group WHERE group_id='$group_id' LIMIT 1;");
      $num_group_info = $con->affected_rows;
      if($num_group_info != 0 && $result_group_info == true){
        $GLOBALS['row_group_info'] = $result_group_info-> fetch_assoc();
        return $GLOBALS['row_group_info'];
      }else {
        echo '<script>window.location = "index.php"</script>';
        die();
      }
  }

  // check user if he a group member
  function CheckUserGroupMember($con,$group_id)
  {
    $group_id = $_GET['group_id'];
    $user_id = $_SESSION['user_id'];
    $result_group_member= $con->query("SELECT * FROM group_members WHERE group_id='$group_id' AND group_members_id='$user_id' LIMIT 1;");
    $num_group_member = $con->affected_rows;
    if($num_group_member != 0 && $result_group_member == true){
      $GLOBALS['row_group_member'] = $result_group_member-> fetch_assoc();
      return $GLOBALS['row_group_member'];
    }
  }

  // get group member numbers
  function GroupMemberNum($con,$group_id)
  {
    $group_id = $_GET['group_id'];
    $result_group_members= $con->query("SELECT accept FROM group_members WHERE group_id='$group_id' AND accept='1';");
    $GLOBALS['group_members_num'] = $con->affected_rows;
    return $GLOBALS['group_members_num'];
  }

  // member join to group
  function JoinMemberGroup($con,$group_id,$member_id,$type = 1)
  {
    $createMemberJoin = $con->query("INSERT INTO group_members VALUES(NULL, '$group_id', '$member_id', '$type');");
    if ($createMemberJoin != true) {
      echo $createMemberJoin;
    }
  }

  // member leave from group
  function RemoveGroupMember($con,$group_id,$member_id)
  {
    $RemoveGroupMember = $con->query("DELETE FROM group_members WHERE group_id='$group_id' AND group_members_id='$member_id';");
    if ($RemoveGroupMember != true) {
      echo 'Contact With wibsite';
    }
  }
 ?>
