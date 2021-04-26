import React from "react";
import { NavLink } from 'react-router-dom';

const Dashboard = () => {
    return (
        <section id="dashboard">           
            <NavLink to="/dashboard/applications" activeStyle={{color: 'red'}}>Applications</NavLink>
            <NavLink to="/dashboard/storage" activeStyle={{color: 'red'}}>Storage</NavLink>
            <NavLink to="/dashboard/orders" activeStyle={{color: 'red'}}>Orders</NavLink>
            <NavLink to="/dashboard/createproduct" activeStyle={{color: 'red'}}>Create Product</NavLink>
        </section>
    )
}

export default Dashboard;

        
