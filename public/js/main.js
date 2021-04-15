// Source: https://stackoverflow.com/a/46181
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function() {
    $("#email").on("change", function() {
        if (validateEmail(this.value)) {
            $("#emailvalidate").hide();
        } else {
            $("#emailvalidate").show();
        }
    })
    
    $("#pswregister").on("change", function() {
        var regex = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[!"#\$%&'\(\)\*\+,-\.\/:;<=>\?@[\]\^_`\{\|}~])[a-zA-Z0-9!"#\$%&'\(\)\*\+,-\.\/:;<=>\?@[\]\^_`\{\|}~]{8,}$/
        var span = $(this).next();

        if (this.value.match(regex)) {
            span.hide();
        } else {
            span.show();
        }
    })

    $("#pswregisterrepeat").on("change", function() {
        var span = $(this).next();
    })

    $("#emailregister").on("change", function() {
        var span = $(this).next();
    })

    $("#cvrregister").on("change", function() {
        var span = $(this).next();
    })



    $("#psw").on("change", function() {
        // Password validation?
    })
})