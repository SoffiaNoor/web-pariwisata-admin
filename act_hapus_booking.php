<?php
$NIK = $_REQUEST['NIK'];

$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "web_pariwisata";

$conn = new mysqli($hostmysql, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query = "DELETE FROM booking_uuid WHERE NIK='$NIK'";
$hasil = $conn->query($query);

if ($hasil) {
    session_start();
    $_SESSION["success_message"] = "Data Pelanggan Berhasil Dihapus";
    header("Location: booking.php");
    exit;
} else {
    echo "Error deleting data: " . $conn->error;
}

$conn->close();

?>