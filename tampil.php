<html>
    <head>
        <title>Tampil Data</title>
        <link rel="stylesheet" href="style_dua.css">
    </head>
    <body>

            <?php 

            include'./koneksi.php';

            echo"<a href = 'form.php'>Tambah data</a><br>";

            $sql = "SELECT * FROM buku";
            $result = $conn->query($sql);
            $a = 1;

            while($baris = mysqli_fetch_array($result)){
                echo "<br>";
                echo $a;
                echo "<br>";
                echo "Judul Buku : " . $baris[1] . "<br>";
                echo "Penulis Buku : " . $baris[2] . "<br>";
                echo "Jenis Buku : " . $baris[3] . "<br>";
                echo "Gambar Buku : " . $baris[4] . "<br><br>";                
                echo "<a href = 'ubah_data.php?id_buku=$baris[0]'>Ubah &nbsp</a>";
                echo "<a href = 'hapus.php?id_buku=$baris[0]'>Hapus</a>";
                echo "<br><br>";
                $a++;
            }

            $conn->close();

            ?>
        
    </body>
</html>