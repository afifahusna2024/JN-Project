const sqlite3 = require("sqlite3").verbose();
const db = new sqlite3.Database("./users.db"); // Database file (this will be created in your project folder)

// Create the 'users' table if it doesn't exist
db.serialize(() => {
  db.run(
    "CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, email TEXT, password TEXT)"
  );
});

module.exports = db;
