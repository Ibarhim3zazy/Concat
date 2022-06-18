const selected = document.querySelector(".selected");
const optionscontainer = document.querySelector(".options-container");
const optionlist = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
 optionscontainer.classList.toggle("active");

 searchBox.value = "";
 filterlist("");

 if (optionscontainer.classList.contains("active")) {
  searchBox.focus();
 }
});

optionlist.forEach(o => {
 o.addEventListener("click", () => {
  selected.innerHTML = o.querySelector("label").innerHTML;
  optionscontainer.classList.remove("active");
 });
});



const langSelected = document.querySelector(".lang-selected");
const optionsLang = document.querySelector(".lang-container");
const langlist = document.querySelectorAll(".lang-option");

langSelected.addEventListener("click", () => {
 optionsLang.classList.toggle("active");

 langSearchBox.value = "";
 filterList("");

 if (optionsLang.classList.contains("active")) {
  langSearchBox.focus();
 }
});

langlist.forEach(o => {
 o.addEventListener("click", () => {
  langSelected.innerHTML = o.querySelector("label").innerHTML;
  optionsLang.classList.remove("active");
 });
});

// search box
const searchBox = document.querySelector(".search-box input");

searchBox.addEventListener("keyup", function (e) {
 filterlist(e.target.value);

});

const filterlist = searchTerm => {
 searchTerm = searchTerm.toLowerCase();
 optionlist.forEach(option => {
  let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
  if (label.indexOf(searchTerm) != -1) {
   option.style.display = "block";
  } else {
   option.style.display = "none";
  };
 });
};


const langSearchBox = document.querySelector(".searchBox input");

langSearchBox.addEventListener("keyup", function (e) {
 filterList(e.target.value);
});

const filterList = searchterm => {
 searchterm = searchterm.toLowerCase();
 langlist.forEach(oPtion => {
  let labeL = oPtion.firstElementChild.nextElementSibling.innerText.toLowerCase();
  if (labeL.indexOf(searchterm) != -1) {
   oPtion.style.display = "block";
  } else {
   oPtion.style.display = "none";
  };
 });
};
