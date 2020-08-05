<?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if($id !== ''){  
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

        $sql = "SELECT id, nama, umur, alamat FROM pegawai WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $nama = $row['nama'];
                $umur = $row['umur'];
                $alamat = $row['alamat'];
            }
        } else {
            echo "0 results";
        }

?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Form Update Karyawan</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 jarak-atas">
                    <form action="aksiUpdate.php" method="POST">
                        <div class="form-goup">
                            <input type="hidden" name="id" value="<?php echo$id ?>" />
                            <label>Nama:</label>
                            <input style="margin-left: 12px;" name="nama" type="text" value="<?php echo$nama ?>" />
                        </div>
                        <div class="form-goup">
                            <label>Umur: </label>
                            <input style="margin-left: 14px;" name="umur" type="text" value="<?php echo$umur ?>" />
                        </div>
                        <div class="form-goup">
                            <label>Alamat: </label>
                            <textarea style="margin-left: 4px;" name="alamat"><?php echo$alamat ?></textarea>
                        </div>
                            <input style="margin-left: 100px;" type="submit" value="submit" />
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </body>
    </html>
<?php
    }
    echo"<a href='http://localhost/'>Kembali</a>";
?>