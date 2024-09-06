<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for phpMyAdmin is 'root'
$password = "";     // Default password is empty
$dbname = "sports_event_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $sport = mysqli_real_escape_string($conn, $_POST['sport']);

    // Insert the data into the database
    $sql = "INSERT INTO registrations (name, email, phone, sport) 
            VALUES ('$name', '$email', '$phone', '$sport')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Thank you for registering for the sports event.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
