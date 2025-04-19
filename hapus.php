<?php
include '../../storex2_config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['idproduk'] ?? '';

    $query = "DELETE FROM produk WHERE idproduk = '$id_produk'";

    if (mysqli_query($conn, $query)) {
        echo json_encode(["status" => true, "message" => "Produk berhasil dihapus"]);
    } else {
        echo json_encode(["status" => false, "message" => "Gagal menghapus produk"]);
    }
} else {
    echo json_encode(["status" => false, "message" => "Akses ditolak"]);
}
?>
