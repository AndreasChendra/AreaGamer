$(document).ready(function () {

    $("#login-click").click(function () {
        $("#icon-login").toggleClass('bi-eye-slash-fill');

        var input = $("#password-login");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#regis-click").click(function () {
        $("#icon-regis").toggleClass('bi-eye-slash-fill');

        var input = $("#password-regis");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#confirm-click").click(function () {
        $("#icon-confirm").toggleClass('bi-eye-slash-fill');

        var input = $("#password-confirm");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#new-click").click(function () {
        $("#icon-new").toggleClass('bi-eye-slash-fill');

        var input = $("#new-password");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('#productType').appendTo("body");
    $('#createStore').appendTo("body");

    $("#formCart #selectAll").click(function() {
        $("#formCart input[type='checkbox']").prop('checked', this.checked);
    });
    
    $('#warning').modal('show');
});