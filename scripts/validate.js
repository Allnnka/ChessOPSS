$(document).ready(function() {
    $("#rejestracja").validate({
        rules: {
            email:{
                email: true,
                minlength: 3,
                required: true
            },
            password:{
                requried: true,
                minlength: 8
            },
            confirmPassword:{
                requried: true,
                equalTo: "#password"
            }
        },
        messages: {
            email:{
                required: "Email jest wymagany!",
                minlength: "Email musi zawierac conajmniej 3 znaki"
            },
            confirmPassword:{
                equalTo: "Hasla nie są takie same!",
                required: "To pole jest wymagane"
            }
         }
    });
});
