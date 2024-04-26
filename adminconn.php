<?php
include("connection.php");
if(isset($_POST["submit"]))

// Database configuration
$host = "localhost:3307";
$username = "root";
$password = "";
$database = "admin";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin_table WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>
