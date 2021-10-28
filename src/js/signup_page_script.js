function showHidePassword1() {
    var inputPassword1 = document.getElementById("password1");
    if (inputPassword1.type === "password") {
        inputPassword1.type = "text";
    } else {
        inputPassword1.type = "password";
    }
}

function showHidePassword2() {
    var inputPassword2 = document.getElementById("password2");
    if (inputPassword2.type === "password") {
        inputPassword2.type = "text";
    } else {
        inputPassword2.type = "password";
    }
}