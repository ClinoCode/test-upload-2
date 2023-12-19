@extends('admin.dashboard.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Paket Menu</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPaket }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Transaksi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahTransaksi }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPending }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comment fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Berhasil</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSuccess }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <!--<div class="row">-->

            <!-- Area Chart -->
        <!--    <div class="col-xl-8 col-lg-7">-->
        <!--        <div class="card shadow mb-4">-->
                    <!-- Card Header - Dropdown -->
        <!--            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">-->
        <!--                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>-->
        <!--                <div class="dropdown no-arrow">-->
        <!--                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"-->
        <!--                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>-->
        <!--                    </a>-->
        <!--                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"-->
        <!--                        aria-labelledby="dropdownMenuLink">-->
        <!--                        <div class="dropdown-header">Dropdown Header:</div>-->
        <!--                        <a class="dropdown-item" href="#">Action</a>-->
        <!--                        <a class="dropdown-item" href="#">Another action</a>-->
        <!--                        <div class="dropdown-divider"></div>-->
        <!--                        <a class="dropdown-item" href="#">Something else here</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
                    <!-- Card Body -->
        <!--            <div class="card-body">-->
        <!--                <div class="chart-area">-->
        <!--                    <canvas id="myAreaChart"></canvas>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

            <!-- Pie Chart -->
        <!--    <div class="col-xl-4 col-lg-5">-->
        <!--        <div class="card shadow mb-4">-->
                    <!-- Card Header - Dropdown -->
        <!--            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">-->
        <!--                <h6 class="m-0 font-weight-bold text-primary">Transaksi Status</h6>-->

        <!--            </div>-->
                    <!-- Card Body -->
        <!--            <div class="card-body">-->
        <!--                <div class="chart-pie pt-4 pb-2">-->
        <!--                    <canvas id="myChart"></canvas>-->
        <!--                </div>-->
        <!--                <div class="mt-4 text-center small">-->
        <!--                    <span class="mr-2">-->
        <!--                        <i class="fas fa-circle text-primary"></i>Berhasil-->
        <!--                    </span>-->
        <!--                    <span class="mr-2">-->
        <!--                        <i class="fas fa-circle text-warning"></i> Pending-->
        <!--                    </span>-->
        <!--                    <span class="mr-2">-->
        <!--                        <i class="fas fa-circle text-danger"></i> Gagal-->
        <!--                    </span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="card">
            <div class="card-body">
                <h4 class="h4 mb-2 text-gray-800">Daftar Pesanan</h4>
                <h6> hari ini adalah {{ $currentDay }}</h6>
                <h5> Berikut ini adalah daftar pesanan yang sudah siap:</h5>



                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Nama</th>
                                <th>Menu</th>
                                <th>Alergi/Catatan</th>
                                <th>Tipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $pesanan)
                                <tr>
                                    <td>{{ $pesanan->order_id }}</td>
                                    <td>{{ $pesanan->nama }}</td>
                                    <td>{{ $pesanan->menu }}</td>
                                    <td>{{ $pesanan->alergi }}</td>
                                    <td>{{ $pesanan->tipe }}</td>

                                    <td>
                                        <a href="{{ route('dashboard.show', $pesanan->id) }}" class="btn btn-warning">
                                            <i class="fa fa-user"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    // <script>
    //     var ctx = document.getElementById('myChart').getContext('2d');
    //     var myChart = new Chart(ctx, {
    //         type: 'doughnut',
    //         data: {

    //             datasets: [{
    //                 label: 'Dataset 1',
    //                 data: [{{ $jumlahSuccess }}, {{ $jumlahPending }},
    //                     {{ $jumlahExpire }}
    //                 ], // Isi dengan data Anda
    //                 backgroundColor: ['rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)',
    //                     'rgba(255, 99, 132, 0.6)'
    //                 ], // Ganti dengan warna latar belakang yang Anda inginkan
    //                 borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
    //                     'rgba(255, 99, 132, 1)'
    //                 ], // Ganti dengan warna border yang Anda inginkan
    //                 borderWidth: 1
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             maintainAspectRatio: false
    //         }
    //     });

    //     var ctx = document.getElementById("myAreaChart");
    //     var myLineChart = new Chart(ctx, {
    //         type: 'line',
    //         data: {
    //             labels: <?php echo json_encode($dataTanggal); ?>,
    //             datasets: [{
    //                 label: "Pendapatan",
    //                 lineTension: 0.3,
    //                 backgroundColor: "rgba(78, 115, 223, 0.05)",
    //                 borderColor: "rgba(78, 115, 223, 1)",
    //                 pointRadius: 3,
    //                 pointBackgroundColor: "rgba(78, 115, 223, 1)",
    //                 pointBorderColor: "rgba(78, 115, 223, 1)",
    //                 pointHoverRadius: 3,
    //                 pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
    //                 pointHoverBorderColor: "rgba(78, 115, 223, 1)",
    //                 pointHitRadius: 10,
    //                 pointBorderWidth: 2,
    //                 data: <?php echo json_encode($dataGross_amount); ?>,
    //             }],
    //         },
    //         options: {
    //             maintainAspectRatio: false,
    //             layout: {
    //                 padding: {
    //                     left: 10,
    //                     right: 25,
    //                     top: 25,
    //                     bottom: 0
    //                 }
    //             },
    //             scales: {
    //                 xAxes: [{
    //                     time: {
    //                         unit: 'date'
    //                     },
    //                     gridLines: {
    //                         display: false,
    //                         drawBorder: false
    //                     },
    //                     ticks: {
    //                         maxTicksLimit: 7
    //                     }
    //                 }],
    //                 yAxes: [{
    //                     ticks: {
    //                         maxTicksLimit: 5,
    //                         padding: 10,
    //                         // Include a dollar sign in the ticks
    //                         callback: function(value, index, values) {
    //                             return '$' + number_format(value);
    //                         }
    //                     },
    //                     gridLines: {
    //                         color: "rgb(234, 236, 244)",
    //                         zeroLineColor: "rgb(234, 236, 244)",
    //                         drawBorder: false,
    //                         borderDash: [2],
    //                         zeroLineBorderDash: [2]
    //                     }
    //                 }],
    //             },
    //             legend: {
    //                 display: false
    //             },
    //             tooltips: {
    //                 backgroundColor: "rgb(255,255,255)",
    //                 bodyFontColor: "#858796",
    //                 titleMarginBottom: 10,
    //                 titleFontColor: '#6e707e',
    //                 titleFontSize: 14,
    //                 borderColor: '#dddfeb',
    //                 borderWidth: 1,
    //                 xPadding: 15,
    //                 yPadding: 15,
    //                 displayColors: false,
    //                 intersect: false,
    //                 mode: 'index',
    //                 caretPadding: 10,
    //                 callbacks: {
    //                     label: function(tooltipItem, chart) {
    //                         var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
    //                         return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
    //                     }
    //                 }
    //             }

    //         }

    //     });
    // </script>


    <!-- /.container-fluid -->
@endsection
