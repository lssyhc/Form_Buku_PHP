<html>
    <head>
        <title>Ubah Data</title>
        <link rel="stylesheet" href="style_dua.css">
    </head>
    <body>
        
        <?php

        include'./koneksi.php';

        $id = $_POST ['id'];
        $judul = $_POST ['judul'];
        $penulis = $_POST ['penulis'];
        $jenis = $_POST ['jenis'];
        $gambar = $_POST ['gambar'];

        $sql = "UPDATE buku SET judul_buku = '$judul', penulis_buku = '$penulis', jenis_buku = '$jenis', gambar_buku = '$gambar' WHERE id_buku = '$id'";
        if($conn->query($sql) === TRUE){
            echo "Ubah data berhasil<br><br>";
            echo "<a href = 'tampil.php'>Kembali</a><br>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close()

        ?>

    </body>
</html>