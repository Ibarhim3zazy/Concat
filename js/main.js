// Main javascript
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
});

// validate-sign-in-form '

// const form = document.getElementById('form');
//
const user = document.getElementById('user');
const pass = document.getElementById("password");

// input.addEventListener('click', (e) => {
//     checkInput();
// })

function checkInput() {
    // get the values from the inputs
    const userValue = user.value.trim();
    const passValue = pass.value.trim();

    if (userValue === "") {
        // show error
        // add error class
        setErrorFor(user, ' This field can not be empty');
    } else {
        //add  success class
        setSuccessFor(user);
    }

    if (passValue.length < 6  || passValue.length > 20) {
        setErrorFor(pass , 'Your pass must be between 6 and 20 char')
    } else {
        setSuccessFor(pass);
    }
}

function setErrorFor(input, message) {
    const input_field = input.parentElement; // .input-field
    const small = input_field.querySelector('small');

    // add error message inside small
    small.innerText = message;

    //add error class

    input_field.className = 'input-field error'
}

function setSuccessFor(input) {
    const input_field = input.parentElement;
    input_field.className = 'input-field success'
}


// form sign up

// const form2 = document.getElementById("signIn");
const nameuser = document.getElementById("name");
const password = document.getElementById("pass")
const phone = document.getElementById("phone");
const b_date = document.getElementById("b_date");
const email = document.getElementById("email");
const confirmPass = document.getElementById("confirmPass");
const gender = document.getElementById("gender");
const caddress = document.getElementById("caddress");


// form2.addEventListener('submit', (e) => {
//     e.preventDefault();
//     checkInputs();
// })

function checkInputs() {
  // get the values from the inputs
    const nameValue = nameuser.value.trim();
    const passwordValue = password.value.trim();
    const phoneValue = phone.value.trim();
    const b_dateValue = b_date.value.trim();
    const emailValue = email.value.trim();
    const confirmPassValue = confirmPass.value.trim();
    const genderValue = gender.value.trim();
    const caddressValue = caddress.value.trim();
    

    if (nameValue === "") {
        // show error
        // add error class
        setErrorFor(nameuser, ' This field can not be empty');
    } else {
        //add  success class
        setSuccessFor(nameuser);
    }

    if (passwordValue.length < 6  || passwordValue.length > 20) {
        setErrorFor(password , 'Your pass sould be between 6 and 20 char')
    } else {
        setSuccessFor(password)
    }

    if (confirmPassValue === "") {
        setErrorFor(confirmPass, 'Your Confrim Pass can not be empty');
    } else if  (password.value !== confirmPass.value){
        setErrorFor(confirmPass, 'Your Confrim Pass does not match');
    } else {
        setSuccessFor(confirmPass)
    }


    if (phoneValue === "") {
        setErrorFor(phone, 'Your phone should not be empty ')
    } else if (isNaN(phoneValue)) {
        setErrorFor(phone, 'Your phone should not contain string')
    } else {
        setSuccessFor(phone)
    }

    if (b_dateValue === "") {
        setErrorFor(b_date, 'Your Age is invalid')
    }else {
        setSuccessFor(b_date)
    }

    let at = emailValue.indexOf("@");
    let dot = emailValue.lastIndexOf(".")

    if (at < 1 || dot < at + 2 ||dot+2 >= emailValue.length ) {
        setErrorFor(email,'Your Email is invalid');
    } else {
        setSuccessFor(email);
    }



    if (genderValue === "") {
        setErrorFor(gender,'this field can not be empty')
    } else {
        setSuccessFor(gender)
    }

    if (caddressValue === "") {
        setErrorFor(caddress,'this field can not be empty')
    } else {
        setSuccessFor(caddress);
    }
    if (document.getElementById('check').checked != true) {
      document.querySelector('.pop_up .contan p').innerHTML = "Please check agree to the Terms & Privacy Policy";
      document.getElementsByClassName('pop_up')[0].style.display = 'block';
    }
}
// sign_up >>>>>>> ajax

function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function submit_sign_up(){
  if (nameuser.parentElement.classList.contains('success') == true &&
    password.parentElement.classList.contains('success') == true &&
    phone.parentElement.classList.contains('success') == true &&
    email.parentElement.classList.contains('success') == true &&
    gender.parentElement.classList.contains('success') == true &&
    b_date.parentElement.classList.contains('success') == true &&
    caddress.parentElement.classList.contains('success') == true &&
    document.getElementById('check').checked == true &&
    password.value === confirmPass.value) {
      // get the values from the inputs
      const nameValue = nameuser.value.trim();
      const passwordValue = password.value.trim();
      const phoneValue = phone.value.trim();
      const b_dateValue = b_date.value.trim();
      const emailValue = email.value.trim();
      const confirmPassValue = confirmPass.value.trim();
      const genderValue = gender.value.trim();
      const caddressValue = caddress.value.trim();
      url="sign_up_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          // alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "success") {
            setTimeout(function () {
              location.reload();
            }, 2000);
          }else if(xmlhttp.responseText.trim() == "email_exists"){
            setErrorFor(document.getElementById("email"),'This email is used');
            document.querySelector('.pop_up .contan p').innerHTML = 'This email is used, Please Change it or press <a href="forgetPass1.php">Forget Password!</a>';
            document.getElementsByClassName('pop_up')[0].style.display = 'block';
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("name="+nameValue+"&email="+emailValue+"&pass="+passwordValue+"&phone="+phoneValue+"&b_date="+b_dateValue+"&caddress="+caddressValue+"&gender="+genderValue);
  };
};

// log_in >>>>>>> ajax

function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function submit_sign_in() {
  if (user.parentElement.classList.contains('success') == true &&
    pass.parentElement.classList.contains('success') == true) {
      let user=document.getElementById("user").value;
      let pass=document.getElementById("password").value;
      url="sign_in_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          // alert(xmlhttp.responseText.trim());
          if (xmlhttp.responseText.trim() == "first_login") {
            window.location.href = "../Concat/FirstPage.php";
          }else if (xmlhttp.responseText.trim() == "index") {
            window.location.href = "../Concat/home.php";
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("name="+user+"&pass="+pass);
  };
};
