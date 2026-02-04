<?php
// Simple PHP test
echo "<h1>Hello from PHP inside Docker!</h1>";

// Database connection test
$dsn = 'mysql:host=mysql;dbname=mydb;charset=utf8';
$username = 'myuser';
$password = 'mypassword';

try {
    $pdo = new PDO($dsn, $username, $password);
    echo "<p>✅ Connected to MySQL successfully!</p>";
} catch (PDOException $e) {
    echo "<p>❌ Connection failed: " . $e->getMessage() . "</p>";
}
?>
