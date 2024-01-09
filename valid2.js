window.onload = function () {
    document.f1.name.focus();
}

var isValide = true;

function codevalidation() {
    var ucode = document.f1.code;
    var error = document.getElementById("codeError");
    error.innerHTML = " ";
    var letters = /^[A-Z0-9]{3}$/;

    if (!ucode.value.match(letters)) {
        error.innerHTML = "Sector Code is not matching";
        error.style.color = "red";
        return false;
    }
    
    if (ucode.value.match(letters)) {
        error.innerHTML = "Sector Code is accepted";
        error.style.color = "green";
        return true;
    }

    return true;
}

function desvalidation() {
    var udes = document.f1.des;
    var error = document.getElementById("desError");
    error.innerHTML = " ";
    var letters = /^[A-Za-z ]+[A-Za-z]*$/;

    if (udes.value === "") {
        error.innerHTML = "Please enter the Description";
        error.style.color = "red";
        return false;
    }

    if (!udes.value.match(letters)) {
        error.innerHTML = "Description is not matching";
        error.style.color = "red";
        return false;
    }

    error.innerHTML = "Your Description is accepted";
    error.style.color = "green";
    return true;
}




function validate() {
    if (
            codevalidation() &&
            desvalidation()
            )
    {
        return false;
    } else {
        codevalidation();
        desvalidation();
        return true;
    }

}