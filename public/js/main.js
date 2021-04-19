// Source: https://stackoverflow.com/a/46181
function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

$(document).ready(function() {

    //LOGIN
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

  $(".product").click(function () {
    $(location).attr("href", "/shop/product/" + this.dataset.product_number);
  })

    // REGISTER
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
        var value = $("#pswregister").val();

        if (this.value === value) {
            span.hide();
        } else {
            span.show();
        }
    })

    $("#cvrregister").on("change", function() {
        var span = $(this).next();
        var regex = /^\d{8}$/

        if (this.value.match(regex)) {
            span.hide();
        } else {
            span.show();
        }
    })

    $("#sendtoregister").click(function() {
        $(location).attr("href", "/register");
    })

    $(".product").click(function ()
    {
        $(location).attr("href", "/shop/product/" + this.dataset.id);
    })
})
