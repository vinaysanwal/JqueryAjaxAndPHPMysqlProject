<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student";

$conn = new mysqli($servername, $username, $password,$database);
$sql = "SELECT * from student1";
$result = $conn->query($sql);

echo "<table><tr><th>id</th><th>name</th><th>email</th><th>contacts</th></tr></table>";
if ($result) {
    while($row = $result->fetch_assoc()) {
      echo "<tr><th>$row[id]</th><th>$row[name]</th><th>$row[email]</th><th>$row[contacts]</th></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
