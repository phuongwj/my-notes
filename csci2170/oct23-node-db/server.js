const http = require ('http');
const fs = require ('fs');
const qs = require ('querystring');
const path = require ('path');
const port = 8000;

function validateUser(user) {
    const file = fs.readFileSync(`${__dirname}/users.csv`,'utf-8');
    const users = file.split('\r\n'); 

    // console.log(users.split("\n")[0].split(",")[1]);
    // console.log(users.split("\n")[0].split(",")[2]);
    // console.log(user.username === users.split("\n")[0].split(",")[1]);
    // console.log(user.password === users.split("\n")[0].split(",")[2]);

    // console.log(users.split("\n")[0].split(",")[2]);
    // console.log(user.password);

    for(row of users) {
        const userDetails = row.split(',');
        if ( (user.username == userDetails[1]) && (user.password == userDetails[2])) {
            console.log("HUH");
            return true;
        }
    };

    return false;
}

/** 
const server = http.createServer((req, res) => {
    const pathParts = path.parse(req.url);
    console.log(pathParts);

    if (pathParts.dir.includes("/api/thing")) {
        res.end(`Base = ${pathParts.base}`);
    }
});
*/


const server = http.createServer((req, res) => {
    // let loggedIn = false;
    let responseDoc;
    let chunk, userInfo;

    if (path.parse(req.url).base !== "favicon.ico") {
        req.on("data", (data) => {
            chunk = data.toString();
        });

        req.on("end", () => {
            userInfo = qs.parse(chunk);
            console.log(userInfo);
            let loggedIn = validateUser(userInfo);

            console.log(`I'm logged in ${loggedIn}`);

            if (loggedIn) {
                responseDoc = fs.readFileSync(`${__dirname}/templates/loggedin.html`,'utf-8');
            } else {
                responseDoc = fs.readFileSync(`${__dirname}/templates/home.html`,'utf-8');
            }

            res.writeHead(200, {
                'Content-Type': 'text/html'
            });

            res.end(responseDoc);
        });
    }
});

server.listen(port, 'localhost', () => {
    console.log(`Listening on ${port}`);
});
