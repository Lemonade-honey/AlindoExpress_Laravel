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
                      <li class="breadcrumb-item active" aria-current="page">Detail Invoice</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
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
                                      <p class="form-control text-capitalize">{{ $paket->data_paket['kota_asal'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Kota Tujuan</label>
                                      <p class="form-control text-capitalize">{{ $paket->data_paket['kota_tujuan'] }}</p>
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
                                      <p class="form-control text-capitalize">{{ $paket->data_paket['kategori'] }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="first-name-column">Nama Pengirim</label>
                                      <p class="form-control text-capitalize">{{ $paket->data_paket['nama_pengirim'] }}</p>
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
                                      <p class="form-control text-capitalize">{{ $paket->data_paket['nama_penerima'] }}</p>
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
                                    <a href="#" class="btn btn-primary me-3 mb-1">Cetak Invoice</a>
                                  </div>

                                  <div class="container-vendor">
                                    <p class="mb-0">Status Invoice</p>
                                    <div class="border border-dark-6 rounded p-3">
                                      <div class="d-flex">
                                        @if ($paket->status_paket == 'proses')
                                          <p>Status : <span class="link-primary text-capitalize">{{ $paket->status_paket }}</span></p>
                                        @elseif ($paket->status_paket == 'selesai')
                                          <p>Status : <span class="link-success text-capitalize">{{ $paket->status_paket }}</span></p>
                                        @else
                                          <p>Status : <span class="link-danger text-capitalize">{{ $paket->status_paket }}</span></p>
                                        @endif
                                      </div>
                                      @if (Auth::user()->role == 'admin')
                                        <div class="d-flex gap-3">
                                          @if ($paket->status_paket == 'proses')
                                          <a href="/paket/{{ $paket->resi }}/selesai" class="btn btn-success btn-sm">Selesai</a>
                                          @elseif($paket->status_paket == 'selesai')
                                          <a href="/paket/{{ $paket->resi }}/proses" class="btn btn-primary btn-sm">Proses</a>
                                          @endif
                                          <a href="/paket/{{ $paket->resi }}/batal" class="btn btn-danger btn-sm">Batal</a>
                                        </div>
                                      @endif
                                    </div>

                                    <p class="mb-0 mt-3">Vendor Invoice</p>
                                    <div class="border border-dark-6 rounded p-3">
                                      @if ($paket->vendor_paket != null)
                                        <table>
                                          <tr>
                                            <td>Nama Vendor</td>
                                            <td>:</td>
                                            <td>{{ $paket->vendor_paket['nama-vendor'] }}</td>
                                          </tr>
                                          <tr>
                                            <td>Kota Vendor</td>
                                            <td>:</td>
                                            <td>{{ $paket->vendor_paket['kota-vendor'] }}</td>
                                          </tr>
                                          <tr>
                                            <td>Harga Vendor</td>
                                            <td>:</td>
                                            <td>{{ $paket->vendor_paket['harga-vendor'] }}</td>
                                          </tr>
                                        </table>
                                        <a href="/paket/{{ $paket->resi }}/vendor" class="btn btn-primary btn-sm mt-2">Edit Vendor</a>
                                      @else
                                      <p class="me-3 mb-1">Vendor Set Empty</p>
                                      <a href="/paket/{{ $paket->resi }}/vendor" class="btn btn-primary btn-sm mt-2">Set Vendor</a>
                                      @endif
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

          @include('Includes._footer')
        </div>
      </div>
    </div>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>
  </body>
</html>
