<?php
include_once("conn.php");

$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id ASC");
?>

<html>

<head>
    <title>Halaman Utama</title>
</head>

<body>
    <a href="add.php">Add New User</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 0;
        while ($data_produk = mysqli_fetch_array($result)) {
            $no++;
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data_produk['id'] . "</td>";
            echo "<td>" . $data_produk['nama_produk'] . "</td>";
            echo "<td>" . $data_produk['keterangan'] . "</td>";
            echo "<td>" . $data_produk['harga'] . "</td>";
            echo "<td>" . $data_produk['jumlah'] . "</td>";
            echo "<td><a href='edit.php?id=$data_produk[id]'>Edit</a> | <a href='delete.php?id=$data_produk[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>