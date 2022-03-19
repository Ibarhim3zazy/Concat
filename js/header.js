
// show notification ul
const noti = document.getElementById('noti');
const ul = document.getElementById('ul');
const body = document.getElementsByTagName('body')

noti.onclick = function open() {
    ul.style.display = "block";
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
