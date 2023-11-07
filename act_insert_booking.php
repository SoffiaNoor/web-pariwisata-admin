<?php
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Usia = (int) $_POST['Usia'];
$TanggalBooking = $_POST['TanggalBooking'];
$Email = $_POST['Email'];
$NoTelpon = $_POST['NoTelpon'];
$KotaAsal = $_POST['KotaAsal'];
$Destinasi = $_POST['Destinasi'];
$JumlahOrang = (int) $_POST['JumlahOrang'];

if ($Usia < 18) {
    session_start();
    $_SESSION["error_age"] = "Anda harus berumur 18 tahun atau lebih!";
    header("Location: booking.php");
    exit;
} elseif (!preg_match('/^[0-9]{16}$/', $NIK)) {
    session_start();
    $_SESSION["error_nik"] = "NIK harus sepanjang 16 digit!";
    header("Location: booking.php");
    exit;
} elseif ($JumlahOrang < 1) {
    session_start();
    $_SESSION["error_jumlahOrang"] = "Jumlah orang minimal 1!";
    header("Location: booking.php");
    exit;
} elseif (!preg_match('/^\d{10,12}$/', $NoTelpon)) {
    session_start();
    $_SESSION["error_notelpon"] = "Nomor Telepon yang ada masukkan tidak tepat!";
    header("Location: booking.php");
    exit;
} else {
    $hostmysql = "localhost";
    $username = "root";
    $password = "";
    $database = "web_pariwisata";

    $conn = new mysqli($hostmysql, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $query = "INSERT INTO booking_uuid (NIK, Nama, Usia, TanggalBooking, Email, NoTelpon, KotaAsal, Destinasi, JumlahOrang, CreatedOn) VALUES ('$NIK', '$Nama', $Usia, '$TanggalBooking', '$Email', '$NoTelpon', '$KotaAsal', '$Destinasi', $JumlahOrang, NOW())";

    $hasil = $conn->query($query);

    if ($hasil) {
        session_start();
        $_SESSION["success_message"] = "Data Pelanggan Berhasil Ditambahkan";
        header("Location: booking.php");
        exit;
    } else {
        echo "Error menambahkan data: " . $conn->error;
    }

    $conn->close();
}
?>