<?php
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Usia = $_POST['Usia'];
$TanggalBooking = $_POST['TanggalBooking'];
$Email = $_POST['Email'];
$NoTelpon = $_POST['NoTelpon'];
$KotaAsal = $_POST['KotaAsal'];
$Destinasi = $_POST['Destinasi'];
$JumlahOrang = $_POST['JumlahOrang'];

$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "web_pariwisata";
$conn = new mysqli("localhost", "root", "", "web_pariwisata");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query = "INSERT INTO booking (NIK, Nama, Usia, TanggalBooking, Email, NoTelpon, KotaAsal, Destinasi, JumlahOrang)
VALUES ('$NIK', '$Nama', '$Usia', '$TanggalBooking', '$Email', '$NoTelpon', '$KotaAsal', '$Destinasi', '$JumlahOrang')";

if ($conn->query($query) === TRUE) {
    echo "Data Booking Berhasil Disimpan<br>";
    echo "Silahkan <a href='booking.php'>View Detail</a> ke Daftar Booking";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>