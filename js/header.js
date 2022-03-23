
// show notification ul
const noti = document.getElementById('noti');
const ulnoti = document.getElementById('ul');
const body = document.getElementsByTagName('body')

noti.onclick = function open() {
    ulnoti.style.opacity = "1";
    ulnoti.style.pointerEvents = "all";
};

// show account ul
const account = document.getElementById('account');
const ulAcc = document.getElementById('ulAcc');

account.onclick = function openDrop() {
    ulAcc.style.display = "block";
}

function close() {
    ulAcc.style.display = "none";
}


// show chat ul
const chat = document.getElementById('chat');
const ulChat = document.getElementById('ulChat')

chat.onclick = function openChat() {
    ulChat.style.display = "block";
};





// $(document).ready(() => {
//     $("#header").click(() => {
//         $('#ul').slideToggle("slow");
//     });
// });




// close notification ul 


$(document).ready(() => {
    $("#closeNotif").click(() => {
        $('.notiUl').slideToggle("slow");
    });
});


// close message chat ul 

$(document).ready(() => {
    $("#messageClose").click(() => {
        $('.closechat').slideToggle("slow");
    });
});


// close account  ul

$(document).ready(() => {
    $("#settingClose").click(() => {
        $('.accountClose').slideToggle("slow");
    });
});



// close Notification when you click outside this field
// window.onload = function () {
//     var hidenoti = document.getElementById('ul');
//     document.onclick = function (ul) {
//         if (ul.target !== 'ul') {
//             hidenoti.style.display = 'none';
//         };
//     };
// };