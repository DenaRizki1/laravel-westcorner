<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/tambah">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tambah Data</span></a>
            </li>
            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tambah">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Tambah Data</span></a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>
                </div>
                <div class="container-fluid">
                    @if(session('success'))
                    <p>{{@session('success')}}</p>
                    @endif
                    <form action="/simpan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">

                            <input type="text" name="kd_treatment" class="form-control " id="kd_treatment" value="<?= $kd ?>" hidden>

                        </div>
                        <div class="mb-3">
                            <label for="nama_treatment" class="form-label">Nama Treatment</label>
                            <input type="text" name="nama_treatment" class="form-control @error('nama_treatment') is-invalid @enderror" id="nama_treatment" aria-describedby="emailHelp">
                            @error('nama_treatment')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_treatment" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi_treatment" class="form-control @error('deskripsi_treatment') is-invalid @enderror" id="deskripsi_treatment">
                            @error('deskripsi_treatment')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga_treatment" class="form-label">Harga Treatment</label>
                            <input type="text" name="harga_treatment" class="form-control @error('harga_treatment') is-invalid @enderror" id="harga_treatment">
                            @error('harga_treatment')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="diskon_treatment" class="form-label">Diskon</label>
                            <input type="text" name="diskon_treatment" class="form-control @error('diskon_treatment') is-invalid @enderror" id="diskon_treatment">
                            @error('diskon_treatment')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload File</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto">
                            @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>


    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>