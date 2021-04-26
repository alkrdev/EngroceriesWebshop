var jsonwebtoken = require("jsonwebtoken");

function GenerateAccessToken(entry) {
    return jsonwebtoken.sign({ entry: entry }, process.env.REACT_APP_TOKEN_SECRET, { expiresIn: "1800s" });
}

function Authenticate(req, res, next) {
    const authHeader = req.headers['authorization'];
    const token = authHeader && authHeader.split(' ')[1];
    if (token == null)
        return res.sendStatus(401);
    jsonwebtoken.verify(token, process.env.REACT_APP_TOKEN_SECRET, (err, user) => {
        if (err)
            return res.json({ error: "expiredtoken" });
        req.user = user;
        next();
    });
}

exports.Authenticate = Authenticate;
exports.GenerateAccessToken = GenerateAccessToken;
