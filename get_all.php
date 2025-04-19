<?php
include '../../storex2_config/db.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode([
    "status" => true,
    "message" => "Data produk berhasil diambil",
    "data" => $data
]);
?>
