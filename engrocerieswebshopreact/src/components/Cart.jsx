import React from "react";

const Cart = () => {
    return (
        <section>
            <article>
                <h2>Kunde Login</h2>
                <form>
                    <input type="text" name="email" id="email" placeholder="Email"></input>
                    <span id="emailvalidate" className="hidden">Please enter a valid Email address</span>

                    <input type="password" name="psw" id="psw" placeholder="Kode"></input>

                    <button type="submit">Log Ind</button>
                </form>
            </article>
            <aside>
                <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte
                    til kundens dør</p>
                <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
                <button>Bliv Kunde</button>
            </aside>
        </section>
    );
}

export default Cart;