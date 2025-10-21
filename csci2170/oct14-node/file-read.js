const fs = require('fs');

const filepath = `${__dirname}/templates/home.html`;

console.log("before file read");
let homepage = fs.readFileSync(filepath, "utf-8");
console.log(homepage);

let name = "Yoda";
let tempResponse = homepage.replace(/%name%/g, name);
console.log(tempResponse);


// These lines of code are basically the line 7 above.
// fs.readFile(filepath, "utf-8", (err, data) => {

//     // Handles the error right at the top
//     if (err) {
//         console.error(err);
//     }

//     console.log(data);
// })

// => If we don't put in utf-8, we will end up getting something like this:
// <Buffer 3c 21 44 4f 43 54 59 50 45 20 68 74 6d 6c 3e 0d 0a 3c 68 74 6d 6c 20 6c 61 6e 67 3d 22 65 6e 22 3e 0d 0a 3c 68 65 61 64 3e 0d 0a 20 20 20 20 3c 6d 65 ... 187 more bytes>
// So we have to remember to put "utf-8"

console.log("after file read");