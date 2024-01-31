<?php
include_once("conn.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $ket = $_POST['ket'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama', keterangan='$ket', harga='$harga', jumlah='$jumlah' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");


while ($data_produk = mysqli_fetch_array($result)) {
    $nama = $data_produk['nama_produk'];
    $ket = $data_produk['keterangan'];
    $harga = $data_produk['harga'];
    $jumlah = $data_produk['jumlah'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="ket" value=<?php echo $ket; ?>></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga; ?>></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>