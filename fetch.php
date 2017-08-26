<?php
$servername= "localhost";
$username="root";
$password="jay@1107";
$dbname="ecom";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
$a= $_POST["email"];
$b= $_POST["password"];
$sql="select email,pword from users";
$result= $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"]==$a && $row["pword"]==$b)
		{
			echo "successfully logged in";
			break;
		}
		else
		{
			echo "Wrong email or password";
			break;
		}
    }
	
}

$conn->close();
?>