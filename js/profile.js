const openButton = document.getElementById('openMore');
const more = document.getElementById('more')

openButton.onclick = function openMore() {
    more.style.display = "block";
};

function change_profile_pic() {
document.getElementById("change_prof_pic_submit").submit();
}
function change_cover_pic() {
document.getElementById("change_cover_pic_submit").submit();
}
function addfriend(){
  document.getElementById("form1").submit();
}
