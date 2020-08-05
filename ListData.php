<?php
$servername = "12.12.12.2";
$username = "root";
$password = "root";
$dbname = "training";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, nama, umur, alamat FROM pegawai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["nama"] . " Umur: " . $row["umur"]." Alamat:".$row["alamat"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
