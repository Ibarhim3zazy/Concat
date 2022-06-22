function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function entery_clear(type) {
	if (type == "prof") {
		document.getElementById("stud_mail").value = "";
		document.getElementById("prof_mail").value = "";
		document.getElementById("stud_College_id").value = "";
		userMail = document.getElementById("user_mail").value.trim();
	}
	if (type == "stud") {
		document.getElementById("prof_mail").value = "";
		document.getElementById("user_mail").value = "";
		document.getElementById("prof_College_id").value = "";
		userMail = document.getElementById("stud_mail").value.trim();
	}
	if (type == "user") {
		document.getElementById("stud_mail").value = "";
		document.getElementById("user_mail").value = "";
		userMail = document.getElementById("prof_mail").value.trim();
	}
}
function sending_verificationCode(type){
	if (document.getElementById('user_mail').value.trim() != "") {
		userMail = document.getElementById("user_mail").value.trim();
	}else if (document.getElementById('stud_mail').value.trim() != "") {
		userMail = document.getElementById("stud_mail").value.trim();
	}else {
		userMail = document.getElementById("prof_mail").value.trim();
	}
  if (userMail != "") {
			if (document.getElementById('prof_College_id').value.trim() != "") {
				College_id = document.getElementById("prof_College_id").value.trim();
			}else if (document.getElementById('stud_College_id').value.trim() != "") {
				College_id = document.getElementById("stud_College_id").value.trim();
			}else {
				College_id = 0;
			}
      url="send_verificationCode_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
					// alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "Email successfully sent") {
            window.location.href = "../Concat/entercode.php";
          }else {
          	alert(xmlhttp.responseText.trim());
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("email="+userMail+"&type="+type+"&College_id="+College_id);
  };
};
