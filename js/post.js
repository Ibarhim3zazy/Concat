// const container = document.querySelector(".wrapper")
// const privacy = container.querySelector(".privacy")

// const  arrowBack = container.querySelector(".arrow-back");

// privacy.addEventListener("click", () => {
//     container.classList.add("active")
// });
// arrowBack.addEventListener("click", () => {
//         container.classList.remove("active")
//     });

// const pup = document.querySelector(".pop_post");

// pup.addEventListener("click", () => {
//     // pup.style.display = 'none';
// })
// function showPost() {
//     pup.style.display = 'block';
// }


<<<<<<< HEAD
// edit

=======
// edit  
>>>>>>> f909711d22531c9a9e8efacae502d1b0f3d8219f
const container = document.querySelector(".wrapper")
const privacy = container.querySelector(".privacy")

const  arrowBack = container.querySelector(".arrow-back");

privacy.addEventListener("click", () => {
    container.classList.add("active")
});
arrowBack.addEventListener("click", () => {
        container.classList.remove("active")
    });

// const pup = document.querySelector(".pop_post")





// function close() {

// }

<<<<<<< HEAD
// change pop up  start
=======


// change pop up 
>>>>>>> f909711d22531c9a9e8efacae502d1b0f3d8219f
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
<<<<<<< HEAD
=======


sharepost.addEventListener('click', () => {
    boxTwo.appendChild(textarea);
});

>>>>>>> f909711d22531c9a9e8efacae502d1b0f3d8219f
