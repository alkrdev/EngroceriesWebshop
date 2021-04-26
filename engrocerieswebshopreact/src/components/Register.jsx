import React from "react";

// Source: https://stackoverflow.com/a/46181
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

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

const Register = () => {
    return (
        <section id="register">
            <article>
                <h2>Registrering</h2>
                <form action="<?= url('register') ?>" method="post">
                    <input type="text" name="name" id="name" placeholder="Navn" required></input>

                    <input type="password" name="psw" id="pswregister" placeholder="Kode" required></input>
                    <span>error_message</span>
                    <span class="validate">Koden skal indeholde følgende:
                            <br>- 8 tegn</br>
                            <br>- mindst ét stort bogstav</br>
                            <br>- mindst ét lille bogstav</br>
                            <br>- mindst ét tal</br>
                            <br>- mindst ét symbol</br></span>

                    <input type="password" name="psw-repeat" id="pswregisterrepeat" placeholder="Kode igen" required></input>
                    <span class="validate">Gentag koden præcist</span>

                    <input type="number" maxlength="8" name="phone-number" id="phone-number" placeholder="Telefon" required></input>

                    <input type="email" name="email" id="emailregister" placeholder="Email" required></input>
                    <span class="validate">Venligst indtast en korrekt email</span>

                    <input type="number" maxlength="4" name="zip-code" id="zip-code" placeholder="Post Nummer" required></input>

                    <input type="text" name="address" id="address" placeholder="Addresse" required></input>

                    <input type="text" name="cvr" id="cvrregister" placeholder="CVR Nummer" required></input>
                    <span class="validate">CVR Nummeret skal være 8 cifre</span>

                    <button type="submit" name="registration-submit" id="registration-submit" value="Register">Indsend Ansøgning</button>
                </form>
            </article>

            <aside>
                <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte
                    til
                    kundens dør</p>
                <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
            </aside>
        </section>
    )
}

export default Register;

    
