import React from "react";

const CreateProduct = () => {
    return (
        <section id="create-product">
            <article>
                <form enctype="multipart/form-data" method="post" action="<?=url('create-product')?>">
                    <div>
                        <label for="image">Vælg et billede</label>
                        <input type="file" name="image" id="image" accept="image/jpeg,image/png"></input>
                    </div>
                    <div>
                        <label>
                            VareNummer
                        </label>
                        <input type="number" maxlength="8" name="product_number"></input>
                        <label>
                            Navn på produktet
                        </label>
                        <input type="text" name="product_name"></input>
                        <label>
                            Produkt Beskrivelse
                        </label>
                        <input class="description-box" type="text" name="description"></input>
                        <label>
                            Pris per enhed
                        </label>
                        <input type="number" step=".01" name="price_per_unit"></input>

                        <button type="submit">Opret Produkt</button>
                    </div>
                </form>
            </article>
        </section>
    )
}

export default CreateProduct;
    
