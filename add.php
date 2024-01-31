<html>

<head>
    <title>Tambahkan Produk</title>
</head>

<body>
    <a href="index.php">Kembali ke halaman utama</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="ket"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        include_once("conn.php");

        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES('$nama','$ket','$harga','$jumlah')");

        echo "Produk telah ditambahkan. <a href='index.php'>Cek Produk</a>";
    }
    ?>
</body>

</html>