import React from "react";

const Product = () => {
    return (
        <section id="product-section">
            <article id="product-article">
                <div id="product-image">
                    <img src="<?= '/images/' . $product['image']  ?>"></img>
                </div>
            </article>

            <aside id="product-aside">
                <h1>name</h1>
                <p>product_number</p>
                <h4>Pris kr. price_per_unit,-</h4>
                <p>Beskrivelse: description</p>
                <form action="/action_page.php">
                    <label for="quantity"> Vælg antal :</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="5"></input>
                    <button class="bestil" type="submit"> Bestil </button>
                </form>
            </aside>
        </section>
    )
}

export default Product;

