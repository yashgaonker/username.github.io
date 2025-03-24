<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Display the entered information
    echo "<h3>Form Submitted!</h3>";
    echo "<p>Name: " . htmlspecialchars($username) . "</p>";
    echo "<p>Password: " . htmlspecialchars($password) . "</p>";

    // In a real-world application, you should securely hash and store passwords (not just display them!)
}
?>
