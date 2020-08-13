<?php
    $id = isset($_POST['id']) ? $_POST['id'] : '';    
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    $servername = "188.166.225.114";
    $username = "root";
    $password = "latihanvps123";
    $dbname = "training";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE pegawai SET nama='$nama', umur=$umur, alamat='$alamat' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Update record successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    echo "<a href='/'> Kembali </a>";
?>