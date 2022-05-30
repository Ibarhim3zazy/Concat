function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function sending_verificationCode(){
  if (document.getElementById('email').value.trim() != "") {
      let userMail = document.getElementById("email").value.trim();
			let pass = document.getElementById("password").value.trim();
			let con_pass = document.getElementById("co_password").value.trim();
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
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("email="+userMail+"&pass="+pass+"&con_pass="+con_pass);
  };
};
