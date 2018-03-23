$(function()

{
    $("#email_error_message").hide();
    $("#password_error_message").hide();
    $("#retype_password_error_message").hide();
    
    var error_email = false;
    var error_password = false;
    var error_retype_password = false;

$("#form_username").focusout(function()
{
    check_email();
});
$("#form_password").focusout(function()
{
    check_password();
});

$("#form_retype_password").focusout(function()
{
    check_retype_password();
});

    function check_email()
    {
        var check_email = $()

    }

});
