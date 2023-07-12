<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>

    <link rel="stylesheet" href="../assets/css/main/app.css" />
    <link rel="stylesheet" href="../assets/css/main/app-dark.css" />

    <link
      rel="shortcut icon"
      href="../assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="../assets/images/favicon.ico"
      type="image/png"
    />
  </head>

  <body>
    <div id="app">
      @include('Includes._navbar')
      <div id="main" class="layout-navbar">
        <header class="mb-3">
          <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
              <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
              </a>

              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0"></ul>
                <div class="dropdown">
                  <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                      <div class="user-name text-end me-3">
                        <h6 class="mb-0 text-gray-600">John Ducky</h6>
                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                      </div>
                      <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                          <img src="../assets/images/faces/1.jpg" />
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <div id="main-content">
          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <!-- <h3>Data Paket</h3> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-end"
                  >
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page"><a href="/paket">Paket</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Create Invoice</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <h4 class="text-bold-500">Create Invoice</h4>
                </div>
                <div class="card-body">
                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="card-body">
                                            <form class="form" method="POST"
                                                action="{{ route('paket.post-tambah') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">KotaAsal</label>
                                                            <select name="kota-asal" class="form-select" id="kota-asal">
                                                                <option value="Yogyakarta" selected>Yogyakarta</option>
                                                                <option value="lainnya">Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Kota Tujuan</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Masukkan Kota Tujuan"
                                                                name="kota-tujuan"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Jumlah Koli</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Masukkan Jumlah Koli"
                                                                name="jumlah-koli" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Harga/Kg</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Masukkan Harga/Kg"
                                                                name="harga-kg" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Berat Volume (Min berat 50Kg)</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Masukkan Berat Volume"
                                                                name="berat-paket" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Kategori Barang</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Masukkan Kategori"
                                                                name="kategori-paket" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Nama Pengirim</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control"
                                                                placeholder="Nama Pengirim"
                                                                name="nama-pengirim" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column">No hp Pengirim</label>
                                                            <input type="text" id="last-name-column"
                                                                class="form-control" placeholder="No-hp"
                                                                name="hp-pengirim" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="city-column">Nama Penerima</label>
                                                            <input type="text" id="city-column"
                                                                class="form-control" placeholder="Nama"
                                                                name="nama-penerima" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="country-floating">Alamat Penerima</label>
                                                            <textarea type="text" id="country-floating" class="form-control" name="alamat-penerima"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="company-column">No hp Penerima</label>
                                                            <input type="text" id="company-column"
                                                                class="form-control" name="hp-penerima"
                                                                placeholder="No-hp" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-column">Biaya Kirim</label>
                                                            <input type="text" id="email-id-column"
                                                                class="form-control" name="biaya-kirim"
                                                                placeholder="Biaya" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-column">Total</label>
                                                            <input type="text" id="email-id-column"
                                                                class="form-control" name="total-biaya"
                                                                placeholder="Total" />
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-start">
                                                        <a href="/paket" class="btn btn-danger me-2 mb-1">Cancel</a>
                                                        <button type="submit" class="btn btn-primary me-2 mb-1">Buat Invoice</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>
  </body>
</html>
