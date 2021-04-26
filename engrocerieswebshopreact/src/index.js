import React from "react";  
import ReactDOM from "react-dom";  
import { Route, BrowserRouter as Router } from "react-router-dom"  
import "./index.css";  

import Header from "./components/Header.jsx";

import App from "./App";  
import Shop from "./components/Shop.jsx"  
import Dashboard from "./components/Dashboard.jsx"  
import Applications from "./components/dashboard/Applications.jsx"
import Storage from "./components/dashboard/Storage.jsx"
import Orders from "./components/dashboard/Orders.jsx"
import Createproduct from "./components/dashboard/CreateProduct.jsx"


ReactDOM.render(  
  <Router>  
    <Header />
    <Route exact path="/" component={App} />  
    <Route path="/shop" component={Shop} />  
    <Route path="/dashboard" component={Dashboard} />  
    <Route path="/dashboard/applications" component={Applications} />
    <Route path="/dashboard/storage" component={Storage} />
    <Route path="/dashboard/orders" component={Orders} />
    <Route path="/dashboard/createproduct" component={Createproduct} />
  </Router>,
  document.getElementById("root")
);

