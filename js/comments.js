function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function commentlike(commentID, PostID) {
    url="comments_ajax.php";
    let xmlhttp = GetXmlHttpObject();
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        // alert(xmlhttp.responseText.trim());
      }
    }
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("like=1"+"&comment_id="+commentID+"&post_id="+PostID);
    like = document.getElementById('comID' + commentID);
    if (window.getComputedStyle(like, null).color == "rgb(0, 135, 159)") {
      document.getElementById('likeNum' + commentID).innerHTML = parseInt(document.getElementById('likeNum' + commentID).innerHTML) - 1;
      like.style.color = "#0050df";
      r = like.innerHTML.replace("d 👍", "");
      like.innerHTML = r;
    }else {
      document.getElementById('likeNum' + commentID).innerHTML = parseInt(document.getElementById('likeNum' + commentID).innerHTML) + 1;
      like.style.color = "rgb(0, 135, 159)";
      like.innerHTML += 'd 👍';
    }
    return;
};
function CommentDelete(commentID, PostID) {
    url="comments_ajax.php";
    let xmlhttp = GetXmlHttpObject();
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        // alert(xmlhttp.responseText.trim());
      }
    }
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("Delete=1"+"&comment_id="+commentID+"&post_id="+PostID);
    document.getElementById('comm' + commentID).innerHTML = "";
    return;
};
