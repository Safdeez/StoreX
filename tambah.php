<?php
include '../../storex2_config/db.php';

$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$query = "INSERT INTO produk (nama_produk, kategori, stok, harga) 
            VALUES ('$nama_produk', '$kategori', '$stok', '$harga')";

if (mysqli_query($conn, $query)) {
    echo json_encode(["status" => true, "message" => "Produk berhasil ditambahkan"]);
} else {
    echo json_encode(["status" => false, "message" => "Gagal menambahkan produk"]);
}
?>
