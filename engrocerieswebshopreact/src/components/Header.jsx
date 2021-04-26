import React from "react";
import { NavLink } from 'react-router-dom';

const Header = () => {
    return (                
        <header>
            <div id="logo">
                <img src="http://engrocerieswebshop.test/img/long.png" width="230px" alt="logo"></img>
            </div>
                <form method="POST" action="<?= url('filtered') ?>">
                    <input type="text" name="query" id="search"></input> 
                </form> 


            <div className="navcontainer">
                <NavLink to="/dashboard" activeStyle={{color: 'red'}}>Dashboard</NavLink>
                <NavLink to="/shop" activeStyle={{color: 'red'}}>Shop</NavLink>  

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
