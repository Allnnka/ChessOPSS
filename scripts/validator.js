function validateEmail(email){
    var expression = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return expression.test(String(email).toLowerCase());
}

function validatePassword(password){
    var expression = /^\w{6,30}$/;
    return expression.test(String(password).toLowerCase());
}

function bindValidationToInput(inputId, popupId, validationMethodName){
    $(document).ready(function() {
        $(inputId).bind("input", function() {
            var popup = document.getElementById(popupId);
            if(!validationMethodName($(this).val())) {        
                if(!$(popup).hasClass("show"))
                    popup.classList.toggle("show");
            }
            else{
                if($(popup).hasClass("show"))
                    $(popup).removeClass("show");
            }
        });
    });
}

var validationInputs = ["#emailInput", "#passwordInput"];
var validationPopups = ["emailValidationPopup", "passwordValidationPopup"];
var validationMethods = [validateEmail, validatePassword];

function isValidated(){
    for(i = 0; i < validationInputs.length; i++){
        if(!validationMethods[i]($(validationInputs[i]).val())){
            var popup = document.getElementById(validationPopups[i]);
            if(!$(popup).hasClass("show"))
                popup.classList.toggle("show");
            return false;
        }
    }
    return true;
}

$(document).ready(function() {
    $('#registerForm').on('submit', function(e) {
        if(!isValidated()){
            e.preventDefault();
            console.log("not valid.");
        }
    });
});

$(document).ready(function() {
    for(i = 0; i < validationInputs.length; i++){
        bindValidationToInput(validationInputs[i], validationPopups[i], validationMethods[i]);
    }
});