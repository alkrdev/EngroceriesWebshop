import React, { useEffect, useState } from "react";

// $(".product").click(function ()
// {
//     $(location).attr("href", "/shop/product/" + this.dataset.id);
// })

const Shop = () => {
    const storedJwt = localStorage.getItem('token'); 
    const [products, setProducts] = useState([])
    const [loading, setLoading] = useState(true);

    useEffect(() => {        
        if (storedJwt == null || storedJwt == "") {
            //console.log("NOT LOGGED IN, PUSHED TO LOG IN")
            
        } else {
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
        }
    }, [])

    return (
        <section id="shop">
            <div id="toolbar">
                <h2>Sorter efter:</h2>
                <form id="order-by" action="<?= url('highPrice')?>" method="post">
                    <button className="price-sort"  type="submit" name="shophigh" id="shophigh" value="shophigh">Pris: Høj til lav</button>
                </form>
                <form id="order-by" action="<?= url('lowPrice')?>" method="post">
                    <button className="price-sort"  type="submit" name="lowPrice" id="lowPrice" value="lowPrice" >Pris: Lav til Høj </button>
                </form>
                <form id="order-by" action="<?= url('az')?>" method="post">
                    <button className="price-sort"  type="submit" name="az" id="az" value="az">A-Z</button>
                </form>
                <form id="order-by" action="<?= url('za')?>" method="post">
                    <button className="price-sort"  type="submit" name="az" id="az" value="az">Z-A</button>
                </form>
            </div>

            <div className="productcontainer">

                <div className="product" data-id="<?=$product['product_number']?>">
                    <img src="/images/2eb.jpg" alt="productimage"></img>
                    <div id="productdescription">
                        <h2> name </h2>
                        <p>description...</p>
                        <p className="price">Pris kr. price_per_unit,- </p>
                        <p> Varenr: product_number </p>
                    </div>
                </div>                
            </div>
        </section>
    )
}

export default Shop;


            