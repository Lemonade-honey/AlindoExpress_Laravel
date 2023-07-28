<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
</head>

<body>
    <div id="app">
        @include('Includes._navbar')
        <div id="main">
            <header class="mb-3">
              <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
              </a>
            </header>
            <div class="page-heading">
              <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
              <section class="row">
                <div class="col-12 col-lg-12">
                  <div class="row">
                    <div class="col-6 col-lg-4 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start">
                              <div class="stats-icon purple mb-2">
                                <i class="fa-solid fa-box"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">
                                Transaksi Hari Ini
                              </h6>
                              <h6 class="font-extrabold mb-0">{{ $today }}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start">
                              <div class="stats-icon green mb-2">
                                <i class="fa-solid fa-truck-fast"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">Transaksi Bulan Ini</h6>
                              <h6 class="font-extrabold mb-0">{{ $mount }}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                          <div class="card-body px-4 py-4-5">
                            <div class="row">
                              <div
                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start"
                              >
                                <div class="stats-icon blue mb-2">
                                  <i class="iconly-boldProfile"></i>
                                </div>
                              </div>
                              <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Staf Active</h6>
                                <h6 class="font-extrabold mb-0">{{ $staf }}</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
            </div>
            @include('Includes._footer')
          </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
</body>

</html>
