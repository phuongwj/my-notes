/**
 * DISCUSSION ON NODE.JS
 * Oct 14, 2025 (code below is continued from our discussions on Oct 9)
 * REVISIONS:
 * (1) Server instance created using http.createServer() was assigned to a constant (`server`).
 * (2) The listen() method was called on the newly created server instance (`server`).
 * 
 * Respond to the following types of client-side requests:
    - Simple GET request, with a simple text response (hello from the server-side) ✅
    - GET request, sent with text, HTML, JSON responses (with appropriate Content-Type headers) ✅
    - GET request sent with query string: ?course=2170 (TO-DO, Oct 14 ⚠️)
    - GET request, with customized response based on course parameter in query string (TO-DO, Oct 14 ⚠️)
    - POST request (with empty request body), with customized response based on whether the request method is GET or POST (TO-DO, Oct 14 ⚠️)
 */
const http = require('http'); // http module to create server and listen to requests
const fs = require('fs'); // file system module to read from and write into files

const url = require('url');
const qs = require('querystring');

const filepath = `${__dirname}/templates/home.html`;
let homepage = fs.readFileSync(filepath, "utf-8");
const tempResponse =
    "<!doctype html>\
<html lang='en'>\
    <head><title>Welcome!</title></head>\
    <body><h1>Hello from the server-side</h1></body>\
</html>\
";

const server = http.createServer((request, response) => {

    // GET Request in the form: localhost:8000/?course=2170
    // (1) request.url -> gives us access to the URL
    // (2) Process the URL, get access to the query string, etc.ko
    let queryStringParams = url.parse(request.url).query;
    let params = qs.parse(queryStringParams);

    if (params.course) {
        response.end(homepage.replace(/%name%/g, params.name));
    } else {
        response.end(tempResponse);
    }
});

server.listen(8000, () => {
    console.log("listening to requests on port 8000");
});

