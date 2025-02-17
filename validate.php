<?php
session_start(); // Start the session
include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); // Prevent SQL Injection
    $stmt->execute();
    $resultSet = $stmt->get_result();

    if ($resultSet->num_rows > 0) {
        $_SESSION['username'] = $username; // Store username in session
        header("Location: info.php"); // Redirect to info.php
        exit();
    } else {
        echo "<script>alert('WRONG INFORMATION');</script>";
        echo "<script>window.location.href='login.php';</script>";
        exit();
    }
}
?>
