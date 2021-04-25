import React from "react";

const Header = () => {
    return (                
        <header>
            <div id="logo">
                <img src="http://engrocerieswebshop.test/img/long.png" width="230px"> </img>
            </div>
                <form method="POST" action="<?= url('filtered') ?>">
                    <input type="text" name="query" id="search"></input> 
                </form> 


            <div class="navcontainer">
                <div class="nav" type="submit" name="dashboard" id="dashboard" value="dashboard">
                    <a href="<?= url('dashboard')?>">
                        <button class="dashboard">Dashboard</button>
                    </a>
                </div>

                <div class="nav" type="submit" name="shop" id="shop" value="shop">
                    <a href="<?= url('shop')?>">
                        <button class="shop">shop </button>
                    </a>
                </div>

                <div id="profilebutton">            
                    <form action="<?= url('logout')?>" method="post">
                        <input type="submit" value="Log ud"/>
                    </form>
                </div>
            </div>
        </header>
    );
}

export default Header;
