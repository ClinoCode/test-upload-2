<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Pelanggan Harian - Sekayu Catering</title>

    <!-- Custom fonts for this template -->
    <link href="{{ url('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../../../style.css"> --}}

    <!-- Custom styles for this page -->
    <link href="{{ url('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ url('users/img/Logo-sekayu-ID.png') }}" sizes="64x64">
    
   <style>
  
  
  .dropdown-menu.show {
      display: flex;
}

.filter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border: 1px solid #ccc;
}

.garis  {
    border-top: 3px solid #ccc;
}
</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">{{ $user->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ url('admin/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card mb-4 mt-4">
                        <div class="card-body">
                            <h1 class="h3 mb-1 text-gray-800">Detail Pesanan</h1>
                            <p>Pesanan yang sudah siap silahkan ceklis dan tekan tombol simpan perubahan</p>
                            <div class="table-responsive">
                                
                                <div class='filter mb-4'>
                                    <div>Data yang ditampilkan {{$jumlahData}}</div>
                                    <form action="{{ route('filter.pesanan') }}" method="POST">
                                     @csrf
                                    <div class="dropdown dropdown-filter">
                                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filter
                                   </button>
                                     <div class="dropdown-menu dropdown-menu-right flex-horizontal" aria-labelledby="dropdownMenuButton">
                                    <div class="kanan">
                                    <h6 style="margin-bottom: -8px;" class="text-center">Hari</h6>
                                     <hr class='garis'>
                                     <div class="dropdown-item" >
                                    <input type="checkbox" value='Semua' name="hari[]" />&nbsp; Semua
                                    </div>
                                    <div class="dropdown-item" >
                                    <input type="checkbox" value='Senin' name="hari[]" />&nbsp; Senin
                                    </div>
                                    <a class="dropdown-item" href="#">
                                    <input type="checkbox" value='Selasa' name="hari[]" />&nbsp; Selasa
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <input type="checkbox" value='Rabu' name="hari[]" />&nbsp; Rabu
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        <input type="checkbox" value='Kamis' name="hari[]" />&nbsp; Kamis
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        <input type="checkbox" value='Jumat' name="hari[]" />&nbsp; Jumat
                                    </a>
                                    </div>
                                <div>
                            <h6 style="margin-bottom: -8px;" class="text-center">Tipe</h6>
                            <hr class='garis'>
                                <a class="dropdown-item" href="#">
                                <input type="checkbox"value='Makan Siang' name="tipe[]" />&nbsp; Makan Siang
                                </a>
                                <a class="dropdown-item" href="#">
                                <input type="checkbox" value='Makan Malam' name="tipe[]" />&nbsp; Makan Malam
                                </a>
                               
                                 </div>
                                    </div>
  
                                <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                                
                                </form>
                                </div>
                                
                                  <form method="POST" action="{{ route('pesanan.updateStatus') }}">
                                                        @csrf
                                                        @method('PUT')
                                 <button type="submit" class="btn btn-primary float-right" id="submitBtn" onclick="return confirm('Apakah Anda yakin ingin menyimpan perubahan?')">
                                                            Simpan Perubahan
                                                        </button>
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                   
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Order ID</th>
                                            <th>Nama</th>
                                            <th>Menu</th>
                                            
                                            <th>Alergi/Catatan</th>
                                            <th>Tipe</th>
                                            <th>Hari & Tanggal</th>
                                            <th>Batch</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $pesanan)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $pesanan->id}} " id="flexCheckDefault" name="id[]">
                                                </div>
                                                </td>
                                                <td>{{ $pesanan->order_id }}</td>
                                                <td>{{ $pesanan->nama }}</td>
                                                <td>{{ $pesanan->menu }}</td>
                                                <td>{{ $pesanan->alergi }}</td>
                                                <td>{{ $pesanan->tipe }}</td>
                                                <td>{{ $pesanan->hari }}, {{ $pesanan->tanggal }}</td>
                                                <td>{{ $pesanan->batch }}</td>
                                                 <td>{{ $pesanan->status }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>

                </div>





            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sekayu Catering Chef 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  
    <script src="{{ url('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    
    

    


    <!-- Page level custom scripts -->
    <script src="{{ url('admin/js/demo/datatables-demo.js') }}"></script>

    <script src="{{ url('main.js') }}"></script>
//   <script>
//     document.addEventListener("DOMContentLoaded", function() {
//         const checkboxes = document.querySelectorAll(".form-check-input");
//         const submitBtn = document.getElementById("submitBtn");

//         function updateSubmitButtonVisibility() {
//             const checkedCount = document.querySelectorAll(".form-check-input:checked").length;
//             submitBtn.style.display = checkedCount > 0 ? "block" : "none";
//         }

//         checkboxes.forEach(checkbox => {
//             checkbox.addEventListener("change", updateSubmitButtonVisibility);
//         });

//         // Panggil fungsi pertama kali untuk mengatur tombol secara awal
//         updateSubmitButtonVisibility();
//     });
// </script>

    <!-- Letakkan skrip ini pada bagian bawah halaman atau dalam file JavaScript terpisah -->
</body>

</html>
