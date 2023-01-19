@extends('layouts.app')
@section('content')
<div class="container">
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
                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">Dashboard</h4>
                    </div>
                </div>

                <button style="margin-left: 91%" type="button" class="btn btn-success"><a style="color: white; text-decoration: none;" href="/informasi">Add Info</a></button>
                <!-- Search input -->
                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-spin mdi-cog"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="vertical-menu">

            <div data-simplebar class="h-100">
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row pb-5" >
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#FFB167; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-info mt-2">
                                    </h3> <strong style="color: white;">Users</strong><br>
                                    <strong style="color: white">{{ $users }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#3991E1;  border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-purple mt-2">
                                    </h3> <strong style="color: white;">comment</strong><br>
                                    <strong style="color: white">{{ $komen }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color:#EF716B; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-primary mt-2">
                                    </h3> <strong style="color: white;">data information</strong><br>
                                    <strong style="color: white">{{ $inpo }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card text-center" style="background-color: #0AB885; border-radius:10px;">
                                <div class="mb-2 card-body text-muted">
                                    <h3 class="text-danger mt-2">
                                    </h3> <strong style="color: white;">Admin</strong><br>
                                    <strong style="color: white">4</strong>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5">
                            <p>Admin : {{ Auth::user()->email }}</p>
                          </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-15">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="card-title mb-4"><strong>Admin : <?= $email; ?></strong></h4> --}}
                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">
                                        <tbody>
                                            <tr>
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
                                                labels: ['Users', 'Komen', '', 'Admin'],
                                                datasets: [{
                                                    label: '',
                                                    data: [
                                                        {{ $users }},
                                                        {{ $komen }},
                                                        {{ $inpo }}
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
    </div>
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!--Morris Chart-->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
</div>
@endsection