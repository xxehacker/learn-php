<?php
//! Get POST data and sanitize
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));

//! echo class_exists('SQLite3') ? "SQLite3 is available" : "SQLite3 is NOT available";

//! Basic validation
if (empty($name) || empty($email)) {
    echo "<h3 style='color:red;'>Please fill in all fields.</h3>";
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3 style='color:red;'>Invalid email format.</h3>";
    exit;
}

try {
    //! Connect to SQLite3 DB (file will be created if it doesn't exist)
    $db = new SQLite3('form.db');

    //! Create table if not exists
    $db->exec('CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )');

    //! Prepare and execute insert
    $stmt = $db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->execute();

    echo '<h2>Form Submitted Successfully!</h2>';
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p style='color:green;'>Data saved in SQLite3 database.</p>";
} catch (Exception $e) {
    echo "<h3 style='color:red;'>Error: " . $e->getMessage() . '</h3>';
}
?>
