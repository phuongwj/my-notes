// db.js
const db = require('./db-config.js');

// SELECT QUERY
// select * from users

try {
    db.query(
        "select * from users",
        (err, results) => {
            if (err) throw err;

            console.table(results);
        }
    )
} catch (err) {
    console.error(`OOPS SOMETHING WENT WRONG ${err}`);
}