/**
 * Respond to the following types of client-side requests:
 *  - Simple GET request, with a simple text response (hello from the server-side)
 *  - GET request, sent with text, HTML, JSON responses (with appropriate Content-Type headers)
 *  - GET request, 
 *  - GET request, with customized response based on course parameter in query string
 *  - POST request (with empty request body), with customized response based on whether the request
 *  method is GET or POST
 */

const http = require('http');
const fs = require("fs");

// we're creating a server to listen.
http
.createServer((request, response) => {

    // We want to send a normal JSON message.

    // response.setHeader("Content-Type", "application/json"); // one way of setting up the header 

    // second way of setting up the header
    // response.writeHead(200, {
    //     "Content-Type": "application/json"
    // });

    // const user = {
    //     id: 999,
    //     name: 'Yoda'
    // }
    // response.end(JSON.stringify(user));

    // Now what if we want to send the user debounce.html.
    // Step 1: Read the contents of the file. => Use a file module from node.

    const homepage = fs.readFileSync(`${__dirname}/debounce.html`);
    response.end(homepage);
})
.listen(8000, () => { // we need to specify the port number 
    console.log("Listening to requests on port 8000");
}); 

// You can run the server by doing node server.js
// If we make any changes, we have to restart the server and run again
// We need to configure the header to make sure the response is correct.