const http = require('http');
const path = require('path');
const fs = require('fs');
const db = require ('./db/config.js');
const PORT = 8000;
const HOST = 'localhost';

const todoResponse = fs.readFileSync(`${__dirname}/templates/todo.html`, 'utf-8');
const todoItem = fs.readFileSync(`${__dirname}/templates/item.html`, 'utf-8');

const server = http.createServer((req, res) => {
    // dir returns the dir component of the path
    //  --> (e.g., /todo, /api, etc.)
    // name returns the name of the resource
    //  --> (e.g., if path is /api/1, it will return 1)
    const { dir, name } = path.parse(req.url);
    
    if (dir === '/' || dir === '/todo') {
        res.writeHead(200, {'Content-Type': 'text/html'});

        // Your logic and code here
        // (1) Read from db (load DB with db.csv contents)
        db.query("SELECT * FROM list", (err, result) => {
            if (err) {
                console.error(err);
                return;
            }

            // result.forEach(row => {
            //     console.log(row.list_item);
            // });
            let items = result.map((row) => {
                // %{ITEM}% %{DONE}%
                let updatedTodoItem = todoItem.replace('%{ITEM}%', row.list_item);
                updatedTodoItem = updatedTodoItem.replace('%{DONE}%', row.done);
                return updatedTodoItem;
            });
            // console.log(items);

            res.end(todoResponse.replace('%{LIST}%', items.join('')));
        });

        // (2) Assemble the list items and their status into list items (item.html)
        // (3) Assemble the list and return the response (todo.html)
        // (4) Return todo.html

        // res.end(todoResponse);
    } else {
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.end('<h1>ERROR 404 - Page Not Found</h1>');
    }
});

server.listen(PORT, HOST, () => {
    console.log(`Server running at http://${HOST}:${PORT}`);
});