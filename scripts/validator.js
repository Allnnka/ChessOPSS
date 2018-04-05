function validateEmail(email) {
    var expression = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return expression.test(String(email).toLowerCase());
}

function validatePassword(password) {
    var expression = /^\w{6,30}$/;
    return expression.test(String(password).toLowerCase());
}


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