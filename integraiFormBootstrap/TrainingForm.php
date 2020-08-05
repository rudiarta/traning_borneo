<?php
    // $servername = "12.12.12.2";
    // $username = "root";
    // $password = "root";
    
    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password);
    
    // // Check connection
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Karyawan</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 jarak-atas">
                <form action="aksi.php" method="POST">
                    <div class="form-goup">
                        <label>Nama:</label>
                        <input style="margin-left: 12px;" name="nama" type="text" />
                    </div>
                    <div class="form-goup">
                        <label>Umur: </label>
                        <input style="margin-left: 14px;" name="umur" type="text" />
                    </div>
                    <div class="form-goup">
                        <label>Alamat: </label>
                        <textarea style="margin-left: 4px;" name="alamat"></textarea>
                    </div>
                        <input style="margin-left: 100px;" type="submit" value="submit" />
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </body>
</html>