<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student";

$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
//print_r($_POST); // To check the code ..
$name = $_POST['name'];
$email = $_POST['email'];
$contacts = $_POST['contacts'];

  $sql = "INSERT INTO student1 VALUES (null,'$name','$email','$contacts')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
