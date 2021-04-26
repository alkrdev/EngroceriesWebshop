require("dotenv").config({});

var mysql = require('mysql');
var express = require('express');
var cors = require("cors");
var jwt = require("express-jwt");
var nodemailer = require("nodemailer");
const { Authenticate, GenerateAccessToken } = require("./Authenticate");

var connection = mysql.createConnection({
	host     : 'localhost',
	user     : 'root',
	password : 'Jagex2233',
	database : 'kkpartner'
});
console.log("MYSQL CONNECTION CREATED")

var app = express();

app.use(express.urlencoded({extended: true}))
app.use(express.json())
app.use(cors())
console.log("EXPRESS CONFIGURED")

app.post('/auth', (request, response) => {
    const { email, password } = request.body

    if (email && password) {
        connection.query('SELECT * FROM users WHERE email = ? AND password = ?', [email, password], (error, results, fields) => {

            if (error) {
                console.error(error)
            }

            if (results.length > 0) {
                response.json({
                    token: GenerateAccessToken(email),
                    fullname: results[0].fullname,
                    firm: results[0].firm
                })

                // response.redirect('/choose')
            } else {
                response.json({ error: "wrongdetails" })
            }
            response.end();
        })
    } else {
        response.send({ error: "missingdetails" })
        response.end();
    }
})




app.get('/products', Authenticate, (request, response) => {
    connection.query('SELECT * FROM products', (error, results, fields) => {
        if (error) {
            console.log(error)
        }

        if (results.length > 0) {
            response.json(results)
        }
        response.end();
    })
})
console.log("ENDPOINTS DEFINED")


app.use(jwt({ secret: process.env.REACT_APP_TOKEN_SECRET, algorithms: ['HS256']}))

app.listen(5000)

console.log("SERVER STARTED")