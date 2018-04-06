$.getScript("validatorRules.js", function(){});

$(document).ready(function() {
    $('#emailInput').bind('input', function() {
        var popup = document.getElementById("emailValidationPopup");
        if(!validateEmail($(this).val())) {        
            if(!$(popup).hasClass("show"))
                popup.classList.toggle("show");
        }
        else{
            if($(popup).hasClass("show"))
                $(popup).removeClass("show");
        }
    });
});


$(document).ready(function() {
    $('#passwordInput').bind('input', function() {
        var popup = document.getElementById("passwordValidationPopup");
        if(!validatePassword($(this).val())) {        
            if(!$(popup).hasClass("show"))
                popup.classList.toggle("show");
        }
        else{
            if($(popup).hasClass("show"))
                $(popup).removeClass("show");
        }
    });
});

/*
function testValidate(id)
{
    id = document.getElementById(id);
}
*/