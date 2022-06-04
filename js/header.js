var ulChat = document.getElementById('ulChat');
var ul = document.getElementById('ul');
var ulAcc = document.getElementById('ulAcc');

// notification ul

(function($) {

  $("#notification").click(function(e){
    e.stopPropagation();
    var div = $("#ul");

    // Make it visible off-page so
    // we can measure it
    div.css({
      "display": "flex"
    });
    if (getComputedStyle(ulChat, null).display == "flex") {
          ulChat.style.display = "none";
    }else if (getComputedStyle(ulAcc, null).display == "flex") {
      ulAcc.style.display = "none";
    }
    // Move it where we want it to be
  });
$(document).click(function(e){
  $('#ul').fadeOut(300);
});
})(jQuery);

// messages ul

(function($) {

  $("#messages").click(function(e){
    e.stopPropagation();
    var div = $("#ulChat");

    // Make it visible off-page so
    // we can measure it
    div.css({
      "display": "flex"
    });
    if (getComputedStyle(ul, null).display == "flex") {
          ul.style.display = "none";
    }else if (getComputedStyle(ulAcc, null).display == "flex") {
      ulAcc.style.display = "none";
    }

    // Move it where we want it to be
  });
$(document).click(function(e){
  $('#ulChat').fadeOut(300);
});
})(jQuery);

// account ul

(function($) {

  $("#account").click(function(e){
    e.stopPropagation();
    var div = $("#ulAcc");

    // Make it visible off-page so
    // we can measure it
    div.css({
      "display": "flex"
    });
    if (getComputedStyle(ulChat, null).display == "flex") {
          ulChat.style.display = "none";
    }else if (getComputedStyle(ul, null).display == "flex") {
      ul.style.display = "none";
    }
    // Move it where we want it to be
  });
$(document).click(function(e){
  $('#ulAcc').fadeOut(300);
});
})(jQuery);

// close Notification when you click outside this field
// window.onload = function () {
//     var hidenoti = document.getElementById('ul');
//     document.onclick = function (ul) {
//         if (ul.target !== 'ul') {
//             hidenoti.style.display = 'none';
//         };
//     };
// };

function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};

function load_messages_nofi() {
  myid = document.getElementById('user_id').value;
  msgs_limit = 200;
  url="general_ajax.php";
  let xmlhttp = GetXmlHttpObject();
  xmlhttp.onreadystatechange=function()
  {
    var old_name = 0;
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      // alert(xmlhttp.responseText.trim());
      result_array = xmlhttp.responseText.trim();
      if (result_array != "") {
        document.getElementById('ulChat').innerHTML = '<li><button id="messageClose"><i class="fa-solid fa-xmark"></i></button>Messages</li>';
      }else {
        document.getElementById('ulChat').innerHTML = '<a href="message.php"><li style="width: 360px;"><button id="messageClose"><i class="fa-solid fa-xmark"></i></button>You Have\'nt New Message</li><a>';
      }
      result_array = result_array.split("e?n?d?m?e?s?s?a?g?e?r?o?w?").reverse();
      result_array.forEach((item, i) => {
        result_user_name = item.slice(0,item.indexOf("u?s?e?r?n?a?m?e?f?o?r?n?o?t?i?"));
        result_user_msg = item.slice(item.indexOf("u?s?e?r?n?a?m?e?f?o?r?n?o?t?i?") + 30,item.indexOf("s?e?n?d?e?r?m?e?s?s?a?g?e?"));
        result_user_time_msg = item.slice(item.indexOf("s?e?n?d?e?r?m?e?s?s?a?g?e?") + 26,item.indexOf("s?e?n?d?e?r?m?e?s?s?a?g?e?t?i?m?e?"));
        result_user_pic = item.slice(item.indexOf("s?e?n?d?e?r?m?e?s?s?a?g?e?t?i?m?e?") + 34,item.indexOf("s?e?n?d?e?r?p?i?c?f?o?r?n?o?t?f?i?"));
        result_user_id = item.slice(item.indexOf("s?e?n?d?e?r?p?i?c?f?o?r?n?o?t?f?i?") + 34);
        if (result_user_name != "" && old_name !== result_user_name) {
          old_name = result_user_name;
          document.getElementById('ulChat').innerHTML += '<li><img src="profile___pic/'+result_user_pic+'"alt="" width="55px" height="55px"style="border-radius: 50%;"><a href="message.php?receiver_id='+result_user_id+'"><div class="box"><div class="top"><div class="name">'+result_user_name+'</div><div class="time">'+result_user_time_msg+'</div></div><div class="message">'+result_user_msg+'</div></div></a><span class="new"></span></li>';
        }
      });
      }
    }
  xmlhttp.open("POST",url,true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("myid="+myid+"&msgs_limit="+msgs_limit);
}

// load last seen
function last_seen_fun() {
  url="general_ajax.php";
  let xmlhttp = GetXmlHttpObject();
  xmlhttp.open("POST",url,true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("last_seen=last_seen");
}

// make last seen live
window.onload = function() {
  setInterval( function () {
    last_seen_fun()
  }
    , 5000);
};
