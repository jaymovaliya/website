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
$a= $_POST["name"];
$b= $_POST["email"];
$c= $_POST["phone"];
$d= $_POST["company"];
$e= $_POST["message"];
$sql = "INSERT INTO feedback(name, email, phone,company,message)
VALUES ('$a','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for contacting Us.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>