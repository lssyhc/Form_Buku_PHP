<html>
    <head>
        <title>Formulir Buku</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>        

        <form class="box" action="tambah.php" method="POST">            
            <h1>Form Buku</h1>                    
            <input type="text" name="judul" placeholder="Judul Buku" autocomplete="off">
            <input type="text" name="penulis" placeholder="Penulis Buku" autocomplete="off">
            <input type="text" name="jenis" placeholder="Jenis Buku" autocomplete="off">
            <input type="text" name="gambar" placeholder="Gambar Buku" autocomplete="off">
            <input type="submit" name="tambah" value="Tambah">
            <a href="cari.php">Cari Data Buku</a>
            <a href="tampil.php">Lihat Data Buku</a>
        </form>    

    </body>
</html>