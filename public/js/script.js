$(document).ready(function(){
    
    $("#login-click").click(function(){
        $("#icon-login").toggleClass('bi-eye-slash-fill');

        var input = $("#password-login");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#regis-click").click(function(){
        $("#icon-regis").toggleClass('bi-eye-slash-fill');

        var input = $("#password-regis");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#confirm-click").click(function(){
        $("#icon-confirm").toggleClass('bi-eye-slash-fill');

        var input = $("#password-confirm");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

});