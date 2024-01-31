<?php
include_once("conn.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");

header("Location:index.php");
?>