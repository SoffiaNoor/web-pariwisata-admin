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

// Koneksi ke database
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "web_pariwisata";

$conn = new mysqli($hostmysql, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Untuk menyimpan data pelanggan
$query = "UPDATE booking SET Nama='$Nama', Usia='$Usia', TanggalBooking='$TanggalBooking', Email='$Email', NoTelpon='$NoTelpon', KotaAsal='$KotaAsal', Destinasi='$Destinasi', JumlahOrang = '$JumlahOrang' WHERE NIK='$NIK'";

$hasil = $conn->query($query);

if ($hasil) {
    echo "Data Pelanggan Berhasil Diupdate<br>";
    echo "Silahkan <a href='booking.php'>Kembali</a> ke Daftar Booking";
} else {
    echo "Error updating data: " . $conn->error;
}

$conn->close();
?>