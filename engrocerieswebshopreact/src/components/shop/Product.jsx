import React, { useEffect, useState } from "react";
import { useParams } from 'react-router-dom';

const Product = () => {
    let { id } = useParams();
    const storedJwt = localStorage.getItem('token'); 
    const [product, setProduct] = useState({});
    const [loading, setLoading] = useState(true)

    useEffect(() => {          
        fetch("http://localhost:5000/getProductById", {                
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + storedJwt
            },
            body: JSON.stringify({ id })
        }).then(res => res.json())
        .then(json => {
            setProduct(json[0])
            setLoading(false)
        })
    }, [])
    
    return (
        <section id="product">
            <img src={"/images/" + product.image}></img>

            <aside>
                <React.Fragment>
                    <h1>{product.name}</h1>
                    <p>{"item: " + product.id}</p>
                    <h4>{"Pris kr. " + product.price_per_unit + ",-"}</h4>
                    <p>{"Beskrivelse: " + product.description}</p>
                    <input type="number" id="quantity" name="quantity" min="1" max="5"></input>
                    
                    <button className="bestil" type="submit">Bestil</button>
                </React.Fragment>
            </aside>
        </section>
    )
}

export default Product;

