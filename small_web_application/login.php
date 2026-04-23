<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$user = "root";
$password = "";
$dbName = "web_app_users_db";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$db_connect = mysqli_select_db($conn, $dbName);

if(!$db_connect){
    echo "<script>alert('No data found, please register instead.');</script>"
    header("Location: registration_page.php");
    exit();
}

?>