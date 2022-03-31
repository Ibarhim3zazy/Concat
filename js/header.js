
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
    var ulChat = document.getElementById('ulChat');
    if (getComputedStyle(ulChat, null).display == "flex") {
          ulChat.style.display = "none";
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
    var ul = document.getElementById('ul');
    if (getComputedStyle(ul, null).display == "flex") {
          ul.style.display = "none";
    }

    // Move it where we want it to be
  });
$(document).click(function(e){
  $('#ulChat').fadeOut(300);
});
})(jQuery);

// show account ul
const account = document.getElementById('account');
const ulAcc = document.getElementById('ulAcc');

account.onclick = function openDrop() {
    ulAcc.style.display = "block";
}

function close() {
    ulAcc.style.display = "none";
}

// close account  ul

// $(document).ready(() => {
//     $("#settingClose").click(() => {
//         $('.accountClose').slideToggle("slow");
//     });
// });



// close Notification when you click outside this field
// window.onload = function () {
//     var hidenoti = document.getElementById('ul');
//     document.onclick = function (ul) {
//         if (ul.target !== 'ul') {
//             hidenoti.style.display = 'none';
//         };
//     };
// };
