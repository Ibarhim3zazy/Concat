const form = document.getElementById("form")
const email = document.getElementById("email")
const pass = document.getElementById("password")
const coPassword = document.getElementById("co_password") 

form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInput();
    
})  

function checkInput() {
    // get the values from the inputs
    const emailValue = email.value.trim();
    const passValue = pass.value.trim();
    const coPass = coPassword.value.trim();

    let at = emailValue.indexOf("@"); // email
    let dot = emailValue.lastIndexOf(".")

    if (at < 1 || dot < at + 2 ||dot+2 >= emailValue.lenght ) {
        setErrorFor(email,'Your Email is invalid')
    } else {
        setSuccessFor(email);
    }

    if (passValue.length < 6  || passValue.length > 20) { // pass
        setErrorFor(pass , 'Your pass sould be between 6 and 20 char')
    } else {
        setSuccessFor(pass)
    }

    if (coPass === "") { // confirm pass
        setErrorFor(coPassword, 'Your Confrim Pass can not be empty');
    } else if  (passValue !== coPass){
        setErrorFor(coPassword, 'Your Confrim Pass does not match');
    } else {
        setSuccessFor(coPassword)
    }
}

function setErrorFor(input, message) {
    const enter = input.parentElement; // .input-field
    const small = enter.querySelector('small')

    // add error message inside small 
    small.innerText = message

    //add error class

    enter.className = 'enter error'
}

function setSuccessFor(input) {
    const enter = input.parentElement;
    enter.className = 'enter success'
}