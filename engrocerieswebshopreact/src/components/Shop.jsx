import React, { useEffect, useState } from "react";

const Shop = () => {
    const storedJwt = localStorage.getItem('token'); 
    const [products, setProducts] = useState([])
    const [loading, setLoading] = useState(true);

    useEffect(() => {      
        fetch("http://localhost:5000/products", {                
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + storedJwt
            }
        }).then(res => res.json())
        .then(json => {
            setProducts(json)
            setLoading(false)
        })
    }, [])

    return (
        <section id="shop">
            <div id="toolbar">
                <h2>Sorter efter:</h2>
                <button className="price-sort"  type="submit" name="shophigh" id="shophigh" value="shophigh">Pris: Høj til lav</button>
                <button className="price-sort"  type="submit" name="lowPrice" id="lowPrice" value="lowPrice" >Pris: Lav til Høj </button>
                <button className="price-sort"  type="submit" name="az" id="az" value="az">A-Z</button>
                <button className="price-sort"  type="submit" name="az" id="az" value="az">Z-A</button>
            </div>

            <div className="productcontainer">
                {!loading ? products.map((product) => {
                    return <div key={product.id} className="product" onClick={() => window.location.href = '/shop/product/' + product.id}>
                        <img src={"/images/" + product.image} alt="productimage"></img>
                        <div>
                            <h2>{product.name}</h2>
                            <p>{product.description.length > 25 ? product.description.substring(0, 45) + "..." : product.description}</p>
                            <p>{"Pris kr. " + product.price_per_unit + ",-"}</p>
                            <p>{"Varenr: " + product.product_number}</p>
                        </div>
                    </div>  
                }) : <React.Fragment></React.Fragment>}              
            </div>
        </section>
    )
}

export default Shop;


            