function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function submitCreateGroup(){
  if (document.getElementById('groupName').value != "" &&
  document.getElementById('admin_id').value != "") {
    let group_name = document.getElementById("groupName").value;
    let admin_id = document.getElementById("admin_id").value;
    let group_type = document.getElementById("privacy").value;
    url="group_ajax.php";
    let xmlhttp = GetXmlHttpObject();
    xmlhttp.onreadystatechange=function()
    {
    	if (xmlhttp.readyState==4 && xmlhttp.status==200){
        // alert(xmlhttp.responseText.trim());
          result_group_id = xmlhttp.responseText.trim();
          // result_creat_group = response.slice(0,response.indexOf("t?r?u?e?"));
          // result_group_id = response.slice(response.indexOf("t?r?u?e?") + 8);
          if (!isNaN(result_group_id.trim()) && result_group_id.trim() != "") {
          window.location.href = "../Concat/groupName.php?group_id="+result_group_id;
        }
      }
    }
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("group_name="+group_name+"&admin_id="+admin_id+"&group_type="+group_type);
  };
};
