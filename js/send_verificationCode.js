function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function sending_verificationCode(){
  if (document.getElementById('email').innerHTML.trim() != "") {
      let userMail = document.getElementById("email").innerHTML.trim();
      url="send_verificationCode_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "Email successfully sent") {
            window.location.href = "../Concat/entercode3.php";
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("email="+userMail);
  };
};
