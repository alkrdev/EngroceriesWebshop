import React, { useState, useEffect } from "react";
import { Link } from 'react-router-dom';

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
    const [error, setError] = useState("");
    const [user, setUser] = useState("");
    const [pass, setPass] = useState("");

    const HandleLogin = async (e) => {
        e.preventDefault();

        var hashedPass = await sha256(pass);

        fetch("http://localhost:5000/auth", {
            method: "POST",
            headers: {
                "Content-type": "application/json"
            },
            body: JSON.stringify({
                email: user,
                password: hashedPass
            })
        })
        .then(res => res.json())
        .then(json => {
            if (json.error === "wrongdetails") {
                setError("Brugernavn eller Kode er forkert")
            } else if (json.error === "missingdetails") {
                setError("Venligst udfyld begge felter") 
            } else {
                localStorage.setItem('token', json.token);
                window.location.href = '/dashboard';
            }
        })
    }    

    async function sha256(message) {
        // encode as UTF-8
        const msgBuffer = new TextEncoder('utf-8').encode(message);
    
        // hash the message
        const hashBuffer = await window.crypto.subtle.digest('SHA-256', msgBuffer);
    
        // convert ArrayBuffer to Array
        const hashArray = Array.from(new Uint8Array(hashBuffer));
    
        // convert bytes to hex string
        return hashArray.map(b => ('00' + b.toString(16)).slice(-2)).join('');
    }

    useEffect(() => {
        
    }, [])

    return (
        <React.Fragment>
            <span></span>
            <h1>Velkommen til Engroceries A/S</h1>
            <p>Vi kan tilbyde vores kunder de mest populære produkter på markedet, til de skarpeste priser.</p>
            <section>
                    <article>
                        <h2>Kunde Login</h2>
                        <span className="loginerror">{error}</span>
                        <form onSubmit={HandleLogin}>
                            <input type="text" name="email" onChange={(e) => setUser(e.target.value)} placeholder="Email"></input>
                            <span id="emailvalidate" className="validate">Please enter a valid Email address</span>

                            <input type="password" onChange={(e) => setPass(e.target.value)} placeholder="Kode"></input>

                            <button type="submit" name="login-submit" id="login-submit" value="Login">Log Ind</button>
                        </form>
                    </article>
                    
                    <aside>
                        <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                        <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte til
                            kundens dør</p>
                        <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
                        
                        <Link to="/register">Apply</Link>
                    </aside>
            </section>
        </React.Fragment>
    )
}

export default Login;

       