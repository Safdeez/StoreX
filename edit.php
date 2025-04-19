<?php
include '../../storex2_config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['idproduk'] ?? '';
    $nama_produk = $_POST['nama_produk'] ?? '';
    $kategori = $_POST['kategori'] ?? '';
    $stok = $_POST['stok'] ?? 0;
    $harga = $_POST['harga'] ?? 0;

    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk',
                kategori = '$kategori',
                stok = '$stok',
                harga = '$harga'
              WHERE idproduk = '$id_produk'";

    if (mysqli_query($conn, $query)) {
        echo json_encode(["status" => true, "message" => "Produk berhasil diupdate"]);
    } else {
        echo json_encode(["status" => false, "message" => "Gagal mengupdate produk"]);
    }
} else {
    echo json_encode(["status" => false, "message" => "Akses ditolak"]);
}
?>
