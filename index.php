<?php
$servername = "172.19.0.2";
$username = "root";
$password = "bertal";
$dbname = "trucorp-db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. "Nama: " . $row["Nama"]. "Alamat: " . $row["Alamat"] . "Jabatan: " . $row["Jabatan"] . "<br>";
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>

