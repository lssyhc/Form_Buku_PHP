<html>
    <head>
        <title>Hapus Data</title>
        <link rel="stylesheet" href="style_dua.css">
    </head>
    <body>
        
        <?php

        include'./koneksi.php';

        $id = $_GET['id_buku'];

        $sql = "DELETE FROM buku WHERE id_buku = '$id'";

        if($conn->query($sql) === TRUE){
            echo "Data berhasil dihapus<br><br>";
            echo "<a href = 'tampil.php'>Kembali</a><br>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close()

        ?>

    </body>
</html>