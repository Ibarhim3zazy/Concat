function viewProfile(val) {
  var form_id = val.getAttribute("data-id-form");
  document.getElementById(form_id).submit();
}
