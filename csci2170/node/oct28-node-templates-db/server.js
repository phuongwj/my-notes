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
    // there's actually a lot of kinds of parsing:
    // - query.parsing, path.parsing, url.parsing, all kinds 
    
    if (dir === '/' || dir === '/todo') {
        res.writeHead(200, {'Content-Type': 'text/html'});

        // Your logic and code here
        // (1) Read from db (load DB with db.csv contents)
        db.query("SELECT * FROM list", (err, res) => {
            if (err) {
                console.error(err);
                return;
            }

            // result.forEach(row => {
            //     console.log(row.list_item);
            // }) 
            // the results of the map method here is going to be an array.
            let items = result.map((row) => {
                let updatedTodoItem = todoItem.replace('%{ITEM}%', row.list_item);
                updatedTodoItem = todoItem.replace('%{DONE}%', row.done);
                return updatedTodoItem;
            });
            // console.log(items);
            
            // items will give us the list but there will be commas in between 
            // because items is an array. therefore we need to use the method:
            // .join('') - this is used to concatenate all elements of an array 
            // into a single string, with an empty string '' as the separator 
            // between the elements.
            res.end(todoResponse.replace('%{LIST}%', items.join('')));
        })

        // (2) Assemble the list items and their status into list items (item.html)
        // (3) Assemble the list and return the response (todo.html)
        // (4) Return todo.html

        res.end('<h1>Welcome Home!</h1>');
    } else {
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.end('<h1>ERROR 404 - Page Not Found</h1>');
    }
});

server.listen(PORT, HOST, () => {
    console.log(`Server running at http://${HOST}:${PORT}`);
});