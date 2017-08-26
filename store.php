<?php
$servername = "localhost";
$username = "root";
$password = "jay@1107";
$dbname = "ecom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a= $_POST["username"];
$b= $_POST["email"];
$c= $_POST["password"];
$sql = "INSERT INTO users(username, email, pword)
VALUES ('$a','$b','$c')";

if ($conn->query($sql) === TRUE) {
    echo "Congratulations! You are successfully registerd in our website";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>