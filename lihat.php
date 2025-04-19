<?php
include '../../storex2_config/db.php';

$query = "SELECT * FROM transaksi";
$result = mysqli_query($conn, $query);

$transactions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $transactions[] = $row;
}

echo json_encode(["status" => true, "data" => $transactions]);
?>
