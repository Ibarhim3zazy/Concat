$(document).ready(() => {
  $("#btn_close").click(() => {
    $(".chatBox").slideToggle("slow");
  });
});

$(document).ready(() => {
  $("#search_close").click(() => {
    $(".friends").slideToggle("slow");
  });
});

const search_open = document.getElementById("search_open");
const friends = document.getElementById("friends");

search_open.onclick = function opensearch() {
  friends.style.display = "block";
};

const box = document.getElementById("chat1");
const chatopen = document.getElementById("contain");

box.onclick = function openchats() {
  chatopen.style.display = "block";
};
