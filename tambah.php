<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="style_dua.css">
    </head>
    
    <body>
        
        <?php

        include'./koneksi.php';

        $judul = $_POST ['judul'];
        $penulis = $_POST ['penulis'];
        $jenis = $_POST ['jenis'];
        $gambar = $_POST ['gambar'];

        $sql = "INSERT INTO buku (judul_buku, penulis_buku, jenis_buku, gambar_buku) VALUE ('$judul', '$penulis', '$jenis', '$gambar')";
        if($conn->query($sql) === TRUE){
            echo "Simpan berhasil <br><br>";
            echo "<a href = 'form.php'>Kembali</a><br>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close()

        ?>

    </body>
</html>