<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css" />

    <link
      rel="shortcut icon"
      href="../../assets/images/logo/favicon.svg"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="../../assets/images/logo/favicon.png"
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
                          <img src="../../assets/images/faces/1.jpg" />
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
            <section class="section">
              @if ($paket != null)
              <div class="card">
                <div class="card-header">
                  <h4 class="text-bold-500">Detail Invoice</h4>
                </div>
                <div class="card-body">
                  <section id="multiple-column-form">
                    <div class="row match-height">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body">
                              <form class="form">
                                <div class="row">
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Kota Asal</label>
                                      <p class="form-control">{{ $paket->data_paket['kota_asal'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Kota Tujuan</label>
                                      <p class="form-control">{{ $paket->data_paket['kota_tujuan'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Jumlah Koli</label>
                                      <p class="form-control">{{ $paket->data_paket['jumlah_koli'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Harga/Kg</label>
                                      <p class="form-control">{{ $paket->data_paket['harga_kilo'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Berat Volume (Min berat 50Kg)</label>
                                      <p class="form-control">{{ $paket->data_paket['berat_volume'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Kategori Barang</label>
                                      <p class="form-control">{{ $paket->data_paket['kategori'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Nama Pengirim</label>
                                      <p class="form-control">{{ $paket->data_paket['nama_pengirim'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="last-name-column">No hp Pengirim</label>
                                      <p class="form-control">{{ $paket->data_paket['hp_pengirim'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="city-column">Nama Penerima</label>
                                      <p class="form-control">{{ $paket->data_paket['nama_penerima'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="country-floating">Alamat Penerima</label>
                                      <textarea class="form-control disavled" disabled>{{ $paket->data_paket['alamat_penerima'] }}</textarea>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="company-column">No hp Penerima</label>
                                      <p class="form-control">{{ $paket->data_paket['hp_penerima'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="email-id-column">Biaya Kirim</label>
                                      <p class="form-control">{{ $paket->biaya_paket['biaya_kirim'] }}</p>
                                    </div>
                                  </div>

                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="email-id-column">Total</label>
                                      <p class="form-control">{{ $paket->biaya_paket['biaya_total'] }}</p>
                                    </div>
                                  </div>

                                  <div class="col-12 d-flex justify-content-start mt-3 mb-4">
                                    <a href="paket.html" class="btn btn-primary me-3 mb-1">Cetak Invoice</a>
                                  </div>

                                  <div class="container-vendor">
                                    <p class="mb-0">Status Invoice</p>
                                    <div class="border border-dark-6 rounded p-3">
                                      <div class="d-flex">
                                        <p>Status : </p><span class="link-success text-capitalize">{{ $paket->status_paket }}</span>
                                      </div>
                                      @if (Auth::user()->role == 'admin')
                                        <div class="d-flex gap-3">
                                          <a href="#" class="btn btn-success btn-sm">Selesai</a>
                                          <a href="#" class="btn btn-danger btn-sm">Batal</a>
                                        </div>
                                      @endif
                                    </div>

                                    <p class="mb-0 mt-3">Vendor Invoice</p>
                                    <div class="border border-dark-6 rounded p-3">
                                      <p class="me-3 mb-1">Vendor Set Empty</p>
                                      <a href="#" class="btn btn-secondary btn-sm">Set Vendor</a>
                                    </div>
                                    <p class="mb-0 mt-3">Update Invoice</p>
                                    <div class="border border-dark-6 rounded p-3">
                                      <ol>
                                        @foreach ($paket->history_paket as $data)
                                          <li>{{ $data }}</li>
                                        @endforeach
                                      </ol>
                                    </div>
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
              @else
                  <h2 class="text-center">Data Tidak Ditemukan</h2>
              @endif
            </section>
          </div>

          <footer>
            <div class="footer clearfix mb-0 text-muted">
              <div class="float-start">
                <p>2021 &copy; Alindo Express</p>
              </div>
              <div class="float-end">
                <p>
                  Crafted with
                  <span class="text-danger"
                    ><i class="bi bi-heart-fill icon-mid"></i
                  ></span>
                  by <a href="https://ahmadsaugi.com">Mahatech</a>
                </p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/app.js"></script>
  </body>
</html>