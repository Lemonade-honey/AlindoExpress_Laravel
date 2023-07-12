<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vendor Invoice</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css" />
    <link rel="stylesheet" href="../../assets/css/main/app-dark.css" />

    <link
      rel="shortcut icon"
      href="../../assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="../../assets/images/favicon.ico"
      type="image/png"
    />
  </head>

  <body>
    <div id="app">
      @include('Includes._navbar')
      <div id="main" class="layout-navbar">
        <header>
          <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
              <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
              </a>
            </div>
          </nav>
        </header>
        <div id="main-content">
          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Vendor Invoice</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-end"
                  >
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="/">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Vendor
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <h4 class="text-bold-500">{{ $paket->data_paket['kota_asal'] }} ---> {{ $paket->data_paket['kota_tujuan'] }}</h4>
                </div>
                <div class="card-body">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <section id="basic-horizontal-layouts">
                    <div class="col-md-6 col-12">
                      <form class="form form-horizontal" method="POST">
                        @csrf
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label>Nama Vendor</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Masukkan Nama Vendor"
                                name="nama-vendor"
                              />
                            </div>
                            <div class="col-md-4">
                              <label>Kota Vendor</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Masukkan kota"
                                name="kota-vendor"
                              />
                            </div>

                            <div class="col-md-4">
                              <label>Harga Vendor</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input
                                type="number"
                                class="form-control"
                                name="harga-vendor"
                              />
                            </div>

                            <div
                              class="col-sm-12 d-flex justify-content-end mt-3">
                              <a href="/paket/{{ $paket->resi }}/vendor/delete" class="btn btn-danger btn-sm me-1 mb-1 text">Hapus</a>
                              <button type="submit" class="btn btn-primary btn-sm me-1 mb-1">Update</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </div>

          @include('Includes._footer')
        </div>
      </div>
    </div>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/app.js"></script>
  </body>
</html>
