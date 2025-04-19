<?php
include '../../storex2_config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {
    echo json_encode([
        "status" => true,
        "message" => "Login berhasil",
        "data" => $data
    ]);
} else {
    echo json_encode([
        "status" => false,
        "message" => "Username atau password salah"
    ]);
}
?>
