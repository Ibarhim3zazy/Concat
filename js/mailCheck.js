function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function mailCheck(){
  if (document.getElementById('email') != "") {
      let userMail = document.getElementById("email").value;
      url="forgotpass_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          // alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "true") {
            window.location.href = "../Concat/resetNewPass2.php?email="+userMail;
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("email="+userMail);
  };
};
