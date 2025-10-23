const http = require('http');
const port = 8000;
const fs = require('fs');
const qs = require('querystring');

function validateUser(user) {
    let loggedIn = false;

    const users = fs.readFileSync(
        `${__dirname}/users.csv`,
        'utf-8'
    );

    if ((user.username == users.split(',')[1]) && (user.password == users.split(',')[2])) {
        loggedIn = true;
    }

    return loggedIn;
}

/**
const server = http.createServer(
    (req, res) => {
        // res.end("Hello world!");
        let loggedIn = false;
        let responseDoc;
        let chunk, userInfo;

        // This initialization only happens when there's a 
        // data load.
        // So if the variable chunk is being declared but if it's
        // never been initialized, it's just going to give undefined.
        // req.on("data", (chunk) => {
        //     console.log(chunk);
        // })

        // Say we change the above to data:
        req.on("data", (data) => {
            // console.log(data);
            chunk = data.toString();
        })

        req.on("end", () => {
            userInfo = qs.parse(chunk);
            // console.log(userInfo);
            loggedIn = validateUser(userInfo);
            console.log(loggedIn);
        })

        if (loggedIn) {
            responseDoc = fs.readFileSync(
                `${__dirname}/templates/loggedin.html',
                'utf-8`
            );
        } else {
            responseDoc = fs.readFileSync(
                `${__dirname}/templates/home.html`,
                'utf-8'
            );
        }

        res.writeHead(200, {
            'Content-Type': 'text/html'
        });
        res.end(responseDoc);
    }
)
*/

const server = http.createServer((req, res) => {
    console.log(req.url);
})

server.listen(port, "localhost", () => {
    console.log(`Listening on ${port}`);
})
