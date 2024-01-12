<?php
// Assuming you have a database connection established
$mysqli = new mysqli("localhost", "root", "", "login");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Check if the email is unique
    $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
    $result = $mysqli->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Email is already registered.";
        exit();
    }
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Remove the extra comma in the VALUES section
    $insertUserQuery = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

    if ($mysqli->query($insertUserQuery) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $insertUserQuery . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>