
///////////////////////
const pup = document.querySelector(".pop_post");

function showPost() {
    pup.style.opacity = '1';
    pup.style.pointerEvents = 'auto';
}

$(document).ready(() => {
    $("#btn_close_post").click(() => {
        $(".pop_post").slideToggle("slow");
    });
});


///////////////////////

// edit

// edit
const container = document.querySelector(".wrapper")
const privacy = container.querySelector(".privacy")

const  arrowBack = container.querySelector(".arrow-back");

privacy.addEventListener("click", () => {
    container.classList.add("active")
});
arrowBack.addEventListener("click", () => {
        container.classList.remove("active")
    });







// change pop up  start






const sharepost = document.getElementById("sharepost");

const boxTwo = document.getElementById("boxTwo");

const textarea = document.getElementById("textarea");

sharepost.addEventListener('click', () => {
    boxTwo.appendChild(textarea);
});


// create post

function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function posting(){
  if (document.getElementById('textarea').value != "") {
      let post_content = document.getElementById("textarea").value;
      url="post_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "Not_Signed") {
            window.location.href = "../Concat/log_in.php";
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("creating_post=true"+"&post_content="+post_content);
  };
};
