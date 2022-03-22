
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

const textarea = document.getElementById("textarea")

sharepost.addEventListener('click', () => {
    boxTwo.appendChild(textarea);
});
