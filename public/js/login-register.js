// Get the modal
var login = document.getElementById('login');
var register = document.getElementById('register');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == login) {
        login.style.display = "none";
    } else if(event.target == register){
        register.style.display = "none";
    }
}

function showRegister() {
    document.getElementById("login").style.display = 'none';
    document.getElementById("register").style.display = 'block';

}

function showLogin() {
    document.getElementById("login").style.display = 'block';
    document.getElementById("register").style.display = 'none';

}

var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Password không trùng khớp.");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;