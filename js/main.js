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


    $("#psw").on("change", function() {
        // Password validation?
    })
})