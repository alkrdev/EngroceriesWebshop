import React from "react";

// $("#email").on("change", function() {
//     if (validateEmail(this.value)) {
//         $("#emailvalidate").hide();
//     } else {
//         $("#emailvalidate").show();
//     }
// })

// $("#psw").on("change", function() {
//     // Password validation?
// })

const Login = () => {
    return (
        <React.Fragment>
            <span></span>
            <h1>Velkommen til Engroceries A/S</h1>
            <p>Vi kan tilbyde vores kunder de mest populære produkter på markedet, til de skarpeste priser.</p>
            <section>
                    <article>
                        <h2>Kunde Login</h2>
                        <span class="loginerror"></span>
                        <form action="<?= url('login')?>" method="post">
                            <input type="text" name="email" id="email" placeholder="Email"></input>
                            <span id="emailvalidate" class="validate">Please enter a valid Email address</span>

                            <input type="password" name="psw" id="psw" placeholder="Kode"></input>

                            <button type="submit" name="login-submit" id="login-submit" value="Login">Log Ind</button>
                        </form>
                    </article>
                    
                    <aside>
                        <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                        <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte til
                            kundens dør</p>
                        <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
                        
                        <a href="<?= url('register')?>">
                            <button>Bliv Kunde</button>
                        </a>
                    </aside>
            </section>
        </React.Fragment>
    )
}

export default Login;

       