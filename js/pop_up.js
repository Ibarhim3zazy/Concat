function courseSubmit() {
  if (document.getElementById('selected').innerHTML != 'Select Field' && document.getElementById('lang-selected').innerHTML != 'Select Language' && document.getElementById('lang_cover').value != '' ||
    document.getElementById('field_category_txt').value != '' && document.getElementById('lang_category_txt').value != '' && document.getElementById('lang_cover').value != '') {
      document.getElementById('add_course').submit();
  }else {
    document.querySelector('.pop_up_ok .contan p').innerHTML = "Please check that you Selected or entered a correct course and language name and course cover";
    document.getElementsByClassName('pop_up_ok')[0].style.display = 'block';
  }
}
