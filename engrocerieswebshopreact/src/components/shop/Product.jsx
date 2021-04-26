import React from "react";
import { useParams } from 'react-router-dom';

const Product = () => {
    let { id } = useParams();
    
    return (
        <section id="product">
            <img src="/images/2eb.jpg"></img>

            <aside>
                <h1>name</h1>
                <p>{"item: " + id}</p>
                <h4>Pris kr. price_per_unit,-</h4>
                <p>Beskrivelse: description</p>
                <input type="number" id="quantity" name="quantity" min="1" max="5"></input>
                
                <button className="bestil" type="submit">Bestil</button>
            </aside>
        </section>
    )
}

export default Product;

