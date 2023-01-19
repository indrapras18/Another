<?php
include('../../core/koneksi.php');
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: layout/login.php");
}
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$sql = mysqli_query($koneksi, "SELECT * FROM login_admin WHERE id = $id");
$rows = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HealthCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../img/logo.png">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="../../index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../../img/logo.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../../img/logo.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="../../index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../../img/logo.png" alt="" height="22">
                            </span>
                            <span class="logo-lg" style="color:white; font-size:19px;">
                                <img src="../../img/logoWhite.png" alt="" height="30">
                                <strong>HealthCare</strong>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">Dashboard</h4>
                    </div>

                </div>
                <!-- Search input -->
                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" <?php echo "<img src='gambar/$rows[foto]'/>"; ?> </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="profile_admin.php"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                                    Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="layout/logout.php"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                                    Logout</a>
                            </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-spin mdi-cog"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="dashboard.php" class="waves-effect">
                                <i class="dripicons-device-desktop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-list"></i>
                                <span> Tables </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-tenaga-medis.php"><i class="dripicons-user-group"></i>Tenaga Medis</a></li>
                                <li><a href="tables-poli.php"><i class="dripicons-medical"></i>Poli</a></li>
                                <li><a href="tables-pasien.php"><i class="dripicons-user"></i>Pasien</a></li>
                                <li><a href="tables-jadwal.php"><i class="dripicons-to-do"></i>Jadwal</a></li>
                                <li><a href="tables-detail.php"><i class="dripicons-lightbulb"></i>Detail</a></li>
                                <li><a href="tables-faq.php"><i class="dripicons-lightbulb"></i>FAQ</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#FFB167; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-info mt-2">
                                        <?php
                                        $data_user = mysqli_query($koneksi, "select * from tenaga_medis");
                                        $jumlah_user = mysqli_num_rows($data_user);
                                        ?>
                                        <strong style="color:white;"><?php echo $jumlah_user; ?></strong>
                                    </h3> <strong style="color: white;">Tenaga Medis</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#3991E1;  border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-purple mt-2">
                                        <?php
                                        $data_user = mysqli_query($koneksi, "select * from poli");
                                        $jumlah_user = mysqli_num_rows($data_user);
                                        ?>
                                        <strong style="color: white;"><?php echo $jumlah_user; ?></strong>
                                    </h3> <strong style="color: white;">Poli</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#EF716B; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-primary mt-2">
                                        <?php
                                        $data_user = mysqli_query($koneksi, "select * from pasien");
                                        $jumlah_user = mysqli_num_rows($data_user);
                                        ?>
                                        <strong style="color: white;"><?php echo $jumlah_user; ?></strong>
                                    </h3> <strong style="color: white;">Pasien</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color: #0AB885; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-danger mt-2">
                                        <?php
                                        $data_user = mysqli_query($koneksi, "select * from login_admin");
                                        $jumlah_user = mysqli_num_rows($data_user);
                                        ?>
                                        <strong style="color: white;"> <?php echo $jumlah_user; ?> </strong>
                                    </h3> <strong style="color: white;">Admin</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-15">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4"><strong>Admin : <?= $email; ?></strong></h4>
                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">
                                        <tbody>
                                            <tr>
                                                <?php
                                                $sql = mysqli_query($koneksi, "SELECT * from login_admin");
                                                while ($data = mysqli_fetch_array($sql)) {
                                                ?>
                                            <tr>
                                                <td><?= $data['id']; ?></td>
                                                <td> <img class="rounded-circle header-profile-user" <?php echo "<img src='gambar/$data[foto]'/>"; ?></td>
                                                <td><?= $data['username']; ?></td>
                                                <td><?= $data['email']; ?></td>
                                            </tr>
                                        <?php
                                                }
                                        ?>
                                        </tr>
                                        </tbody>

                                    </table>
                                    <div>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        const ctx = document.getElementById('myChart');

                                        new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ['tenaga Medis', 'Poli', 'Pasien', 'Admin'],
                                                datasets: [{
                                                    label: '',
                                                    data: [
                                                        <?php
                                                        $jumlah_teknik = mysqli_query($koneksi, "select * from tenaga_medis");
                                                        echo mysqli_num_rows($jumlah_teknik);
                                                        ?>,
                                                        <?php
                                                        $jumlah_teknik = mysqli_query($koneksi, "select * from poli");
                                                        echo mysqli_num_rows($jumlah_teknik);
                                                        ?>,
                                                        <?php
                                                        $jumlah_teknik = mysqli_query($koneksi, "select * from pasien");
                                                        echo mysqli_num_rows($jumlah_teknik);
                                                        ?>,
                                                        <?php
                                                        $jumlah_teknik = mysqli_query($koneksi, "select * from login_admin");
                                                        echo mysqli_num_rows($jumlah_teknik);
                                                        ?>,
                                                    ],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255,99,132,1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> HealthCare<span class="d-none d-sm-inline-block"> -
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Kelompok 5</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <div class="p-4">
                <h6 class="mt-4">Select Custom Colors</h6>
                <div class="d-flex">

                    <ul class="list-unstyled mb-0">
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                            <label class="form-check-label" for="theme-default">Default</label>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                            <label class="form-check-label" for="theme-orange">Orange</label>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                            <label class="form-check-label" for="theme-teal">Teal</label>
                        </li>
                    </ul>

                    <ul class="list-unstyled mb-0 ms-4">
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                            <label class="form-check-label" for="theme-purple">Purple</label>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                            <label class="form-check-label" for="theme-green">Green</label>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                            <label class="form-check-label" for="theme-red">Red</label>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script type="text/javascript" src="chartjs/Chart.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>