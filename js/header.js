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

window.onload = function() {
  setInterval( function () {
    url="general_ajax.php";
    let xmlhttp = GetXmlHttpObject();
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("last_seen=last_seen");
  }
    , 5000);
};
