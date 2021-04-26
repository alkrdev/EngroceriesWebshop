import React from 'react';  
import ReactDOM from 'react-dom';  
import { Route, Link, BrowserRouter as Router } from 'react-router-dom'  
import './index.css';  

import Header from "./components/Header.jsx";

import App from './App';  
import Shop from './components/Shop.jsx'  
import Dashboard from './components/Dashboard.jsx'  

ReactDOM.render(  
  <Router>  
    <div>   
      <Header />
      <Route exact path="/" component={App} />  
      <Route path="/shop" component={Shop} />  
      <Route path="/dashboard" component={Dashboard} />  
    </div>  
  </Router>,
  document.getElementById('root')
);

