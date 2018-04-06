function validateEmail(email){
    var expression = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return expression.test(String(email).toLowerCase());
}

function validatePassword(password){
    var expression = /^\w{6,30}$/;
    return expression.test(String(password).toLowerCase());
}

function bindValidation(inputId, popupId, validationMethodName){
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

            if($(popup).hasClass("show"))
                canSubmitForm(false);
            else
                canSubmitForm(true);

        });
    });
}

function canSubmitForm(state){
    $("#submitRegister").prop('disabled', !state);
}


bindValidation("#emailInput", "emailValidationPopup", validateEmail);
bindValidation("#passwordInput", "passwordValidationPopup", validatePassword);


var event = new Event('input');
$("#emailInput").dispatchEvent(event);
$("#passwordInput").dispatchEvent(event);
