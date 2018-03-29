$(document).ready(function() {

$('#email').on('blur', function() {
    var input = $(this);
    var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var is_email = pattern.test(input.val());
    if(is_email){
        input.removeClass("invalid").addClass("valid");
        input.next('.komunikat').text("Wprowadzono poprawny email.").removeClass("blad").addClass("ok");
    }
    else{
        input.removeClass("valid").addClass("invalid");
        input.next('.komunikat').text("Wprowadź poprawny email!").removeClass("ok").addClass("blad");
    }
});

$('#submit button').click(function(event){
        var name = $('#name');
        var email = $('#email');
        var message = $('#message');
        
        if(name.hasClass('valid') && email.hasClass('valid') && message.hasClass('valid')){
            alert("Pomyślnie wysłano formularz.");	
        }
        else {
            event.preventDefault();
            alert("Uzupełnij wszystkie pola!");	
});
});