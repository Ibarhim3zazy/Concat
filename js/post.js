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
