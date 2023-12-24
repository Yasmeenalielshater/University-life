<?php
// Assuming you have a MySQL database set up
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact_form(Name, Email, Phone, Message) VALUES ('$Name', '$Email', '$Phone', '$Message')";

if ($conn->query($sql) === TRUE) {
       echo("<h1 style= 'color:blue;'>Thank you for contacting us. you will be contacted</h1>");
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>