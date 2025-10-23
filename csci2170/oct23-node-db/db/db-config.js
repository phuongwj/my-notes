// db-config.js
const mysq = require ('mysql');

module.exports = mysql.createConnection({
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "",
    "port": ""
})