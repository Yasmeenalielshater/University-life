<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
   
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $Password = $_POST["Password"];
    $Age = $_POST["Age"];

    // Validation and sanitation code here

    // Database insertion
    $sql = "INSERT INTO registration (Name, email, gender,Password, Age)
            VALUES ('$Name',  '$email', '$gender','$Password', '$Age')";

    if ($conn->query($sql) === TRUE) {
        

        echo("<h1 style= 'color:blue;'>your Registration is Done!</h1>");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>