const db = require("./database"); // Link to your database.js

db.all("SELECT * FROM users", (err, rows) => {
  if (err) {
    console.error(err.message);
  } else {
    console.log(rows); // This will print the data from the users table
  }
});
