<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "web_app_users_db";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) !== TRUE) {
    die("Error creating database: " . $conn->error);
}

// Select the database
mysqli_select_db($conn, $dbName);

$tableSql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL UNIQUE
)";


if ($conn->query($tableSql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}

if (isset($_POST["submit"])) {

    $name = $_POST["fname"]; // Get name from form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to insert new name into table
    $tabesql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($tabesql) === true) {
        echo "New record created successfully"; // Success message
    } else {
        echo "Error: " . $tabesql . "<br>" . $conn->error; // Show error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Small Web Application - Registration Page</title>
</head>
<body>

<h2>Sign Up</h2>

<!-- Form to add new name -->
<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="fname" id="name"><br><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>