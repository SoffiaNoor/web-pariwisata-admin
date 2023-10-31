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

$query = "DELETE FROM booking WHERE NIK='$NIK'";
$hasil = $conn->query($query);

if ($hasil) {
    echo "Data Booking Berhasil Dihapus<br>";
    echo "Silahkan <a href='booking.php'>Kembali</a> ke Daftar Booking";
} else {
    echo "Error deleting data: " . $conn->error;
}

$conn->close();
?>