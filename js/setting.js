let tabs = document.querySelectorAll(".taps li");
let tabsArray = Array.from(tabs);

let divs = document.querySelectorAll(".contents > div");
let divsArray = Array.from(divs);

tabsArray.forEach((ele) => {
 ele.addEventListener("click", function (e) {
  tabsArray.forEach((ele) => {
   ele.classList.remove("active");
  });
  e.currentTarget.classList.add("active");
  divsArray.forEach((div) => {
   div.style.display = 'none';
  });
  document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
 });
});

const error = document.getElementById('pass-error');
function check() {
  var email = document.getElementById('emailnew').value;
  var pass = document.getElementById('pass').value;
   // if (email.lenght == 0 )  {
   //   error.innerHTML = "Email or Password is required";
   //   return false;
   // };
    if (!email.match(/^[a-zA-Z\._\-[0-9]*[@][a-zA-Z]*[\.][a-z]{2,4}$/) ) {
      error.innerHTML = " your email or password is wrong.."
      return false;
    }
   error.innerHTML = "An additional email was adding...";
   return true;
};
