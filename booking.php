<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/images/logo.png">
    <title>
        Raja Ampat Admin
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<style>
    .fixed-bottom-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        color: white;
        text-align: center;
        padding: 10px 0;
        z-index: 1;
    }

    .sidenav {
        z-index: 999 !important;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
    }

    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .swing-animation {
        animation: swing 2s infinite ease-in-out;
        max-width: 100px;
    }

    @keyframes swing {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }
</style>

<body class="g-sidenav-show" style="background: linear-gradient(45deg, #034c5a, #01353f);">
    <div class="loader-container">
        <img src="assets/images/logo.png" class="swing-animation" alt="Loading..." />
    </div>
    <?php
    //koneksi ke database
    $hostmysql = "localhost";
    $username = "root";
    $password = "";
    $database = "web_pariwisata";
    $currentDate = date("Y-m-d");
    //memilih database
    $conn = new mysqli("localhost", "root", "", "web_pariwisata");

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    ?>
    <div class="position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/web-pariwisata-admin/home.php">
                <img src="./assets/images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bolder">Raja Ampat</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/web-pariwisata-admin/home.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text font-weight-bold ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/web-pariwisata-admin/booking.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text font-weight-bold ms-1">Booking List</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <div class="card card-plain shadow-none opacity-0" id="sidenavCard">
                <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg"
                    alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0">Need help?</h6>
                        <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="px-3">Tiket Pengunjung Raja Ampat
                                </h3>
                                <hr class="ms-3 mt-0"
                                    style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-info" href="insert_booking.php"
                                    style="float:right;background-color:#0c859b">
                                    <span>Tambah Data</span>
                                    <i class="fa fa-plus ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <?php
                            if (isset($_SESSION["success_message"])) {
                                echo '<div class="alert alert-success text-white font-weight-bolder shadow m-2" style="border-radius:1rem">' . $_SESSION["success_message"] . '</div>';
                                unset($_SESSION["success_message"]);
                            }

                            if (isset($_SESSION["error_age"]) || isset($_SESSION["error_jumlahOrang"]) || isset($_SESSION["error_nik"]) || isset($_SESSION["error_notelpon"])) {
                                echo '<div class="alert alert-danger text-white font-weight-bolder shadow m-2" style="border-radius:1rem">';
                                if (isset($_SESSION["error_age"])) {
                                    echo $_SESSION["error_age"] . '<br>';
                                    unset($_SESSION["error_age"]);
                                }

                                if (isset($_SESSION["error_jumlahOrang"])) {
                                    echo $_SESSION["error_jumlahOrang"] . '<br>';
                                    unset($_SESSION["error_jumlahOrang"]);
                                }

                                if (isset($_SESSION["error_nik"])) {
                                    echo $_SESSION["error_nik"] . '<br>';
                                    unset($_SESSION["error_nik"]);
                                }

                                if (isset($_SESSION["error_notelpon"])) {
                                    echo $_SESSION["error_notelpon"] . '<br>';
                                    unset($_SESSION["error_notelpon"]);
                                }
                                echo '</div>';
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">
                                                NIK</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">
                                                Nama Lengkap</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">
                                                Tanggal Booking</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">
                                                Status</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">
                                                Destinasi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $batas = 8;
                                        $halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
                                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                                        $previous = $halaman - 1;
                                        $next = $halaman + 1;

                                        $data = mysqli_query($conn, "select * from booking_uuid");
                                        $jumlah_data = mysqli_num_rows($data);
                                        $total_halaman = ceil($jumlah_data / $batas);

                                        $data_booking = mysqli_query($conn, "select * from booking_uuid limit $halaman_awal, $batas");
                                        $nomor = $halaman_awal + 1;
                                        while ($d = mysqli_fetch_array($data_booking)) {
                                            ?>
                                            <tr>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            <?php echo $d['NIK'] ?>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">
                                                                <?php echo $d['Nama'] ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        <?php
                                                        $tanggalBooking = $d['TanggalBooking'];
                                                        // Convert the date to the desired format
                                                        $formattedDate = date("l, j F Y", strtotime($tanggalBooking));
                                                        echo $formattedDate;
                                                        ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <?php if ($d['TanggalBooking'] >= $currentDate) {
                                                        ?>
                                                        <span class="badge bg-gradient-info w-50 me-4">
                                                            <i class="bg-info"></i>
                                                            <span class="text-xs">
                                                                <?php
                                                                echo 'Aktif';
                                                                ?>
                                                            </span>
                                                        </span>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <span class="badge bg-gradient-warning w-50 me-4">
                                                            <i class="bg-info"></i>
                                                            <span class="text-xs">
                                                                <?php
                                                                echo 'Tidak Aktif';
                                                                ?>
                                                            </span>
                                                        </span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">
                                                                <?php echo $d['Destinasi'] ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <a href="detail_booking.php?NIK=<?php echo $d['NIK']; ?>"
                                                        class="text-gray-400 hover:text-amber-400  mr-2">
                                                        <i class="fa fa-eye text-sm" method="POST"></i>
                                                    </a>
                                                    <a href="edit_booking.php?NIK=<?php echo $d['NIK']; ?>"
                                                        class="text-gray-400 hover:text-amber-400 mx-2">
                                                        <i class="fas fa-edit text-sm" method="POST"></i>
                                                    </a>
                                                    <!-- Update the "Trash" icon link to open the modal and pass the 'NIK' value -->
                                                    <a class="text-gray-400 hover-text-amber-400" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal"
                                                        data-dataid="<?php echo $d['NIK']; ?>">
                                                        <i class="fa fa-trash text-sm"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="deleteModal" tabindex="-1"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="act_hapus_booking.php" method="POST">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title font-weight-bolder" id="deleteModalLabel">Confirm
                                                                    Deletion</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this data?
                                                                <input type="hidden" name="NIK" id="delete_NIK">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <a href="act_hapus_booking.php?NIK=<?php echo $d['NIK']; ?>"
                                                                    class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end pt-4">
                                        <?php if ($halaman > 1): ?>
                                            <li class="page-item">
                                                <a class="page-link" href="booking.php?halaman=<?php echo $previous; ?>"
                                                    tabindex="-1">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        <?php else: ?>
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:;" tabindex="-1">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $total_halaman; $i++): ?>
                                            <li class="page-item <?php echo ($i == $halaman) ? 'active' : ''; ?>">
                                                <a class="page-link" href="booking.php?halaman=<?php echo $i; ?>"
                                                    style="<?php echo ($i == $halaman) ? 'color:white;background-color:#0c859b;border:none' : ''; ?>">
                                                    <?php echo $i; ?>
                                                </a>
                                            </li>
                                        <?php endfor; ?>

                                        <?php if ($halaman < $total_halaman): ?>
                                            <li class="page-item">
                                                <a class="page-link" href="booking.php?halaman=<?php echo $next; ?>">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        <?php else: ?>
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var dataId = button.data('dataid');
            var modal = $(this);
            modal.find('#delete_NIK').val(dataId);
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var dataId = button.data('dataid');
            var modal = $(this);
            modal.find('.modal-body span').text(dataId);
            modal.find('#button_hapus').attr('href', 'act_hapus_booking.php?NIK=' + dataId);
        });
    </script>
    <script>
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>
</body>

</html>