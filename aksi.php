<?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

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

    $sql = "INSERT INTO pegawai (nama, umur, alamat) VALUES ('".$nama."', ".$umur.", '".$alamat."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo "<a href='/'> Kembali </a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
?>