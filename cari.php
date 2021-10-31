<html>
    <head>
        <title>Cari Data Buku</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" action="cari.php" method="POST">            
            <h1>Cari Data Buku</h1>
            <input type="text" name="cari" placeholder="Masukkan judul buku" autocomplete="off">
            <input type="submit" name="submit" value="CARI">
            <?php

                include './koneksi.php';            

                if(isset($_POST['cari'])){
                    $cari = $_POST['cari'];
                    $sql = "SELECT * FROM buku where judul_buku LIKE '%".$cari."%'";
                    $result = $conn->query($sql);
                    while($baris = mysqli_fetch_array($result)){
                        echo "<br>";
                        echo "<br>";
                        echo "<p>Judul Buku : $baris[1]</p><br>";
                        echo "<p>Penulis Buku : $baris[2]</p><br>";
                        echo "<p>Jenis Buku : $baris[3]</p><br>";
                        echo "<p>Gambar Buku : $baris[4]</p><br><br>";
                    }
                }
                
            ?>
            <a href="form.php">Kembali</a>
        </form>        
    </body>
</html>