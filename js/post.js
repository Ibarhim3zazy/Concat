const container = document.querySelector(".wrapper")
const privacy = container.querySelector(".privacy")

const  arrowBack = container.querySelector(".arrow-back");

privacy.addEventListener("click", () => {
    container.classList.add("active")
});
arrowBack.addEventListener("click", () => {
        container.classList.remove("active")
    });

const pup = document.querySelector(".pop_post");

pup.addEventListener("click", () => {
    // pup.style.display = 'none';
})
function showPost() {
    pup.style.display = 'block';
}



// change pop up  start 
const openPost = document.getElementById("openPost");
const createPost = document.getElementById("createPost");
const close = document.getElementById("close");

openPost.addEventListener('click', () => {
    createPost.classList.add('show');
});

close.addEventListener('click', () => {
    createPost.classList.remove('show');
}
);




// const like = document.getElementById("like")

// like.addEventListener('click', () => {
//     like.classList.add('active')
// })


const sharepost = document.getElementById("sharepost");

const boxTwo = document.getElementById("boxTwo");

const textarea = document.getElementById("textarea")

sharepost.addEventListener('click', () => {
    boxTwo.appendChild(textarea);
});

