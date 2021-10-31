<html>
    <head>
        <title>Ubah Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

            include'./koneksi.php';
            $id_buku = $_GET["id_buku"];

            $sql = "SELECT * FROM buku WHERE id_buku =" . $id_buku;
            $result = $conn->query($sql);

            $result = $result->fetch_assoc();

        ?>

        <form class="box" action="ubah.php" method="POST">
            <h1>Ubah Data</h1>
            <input type="hidden" name="id" value="<?= $result['id_buku']?>" autocomplete="off">
            <input type="text" name="judul" value="<?= $result['judul_buku']?>" autocomplete="off">
            <input type="text" name="penulis" value="<?= $result['penulis_buku']?>" autocomplete="off">
            <input type="text" name="jenis" value="<?= $result['jenis_buku']?>" autocomplete="off">
            <input type="text" name="gambar" value="<?= $result['gambar_buku']?>">
            <input type="submit" name="tambah" value="Ubah">
            <a href="tampil.php">Kembali</a>
        </form>
    </body>
</html>

