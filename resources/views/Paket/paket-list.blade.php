<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Paket</title>

    <link rel="stylesheet" href="../assets/css/main/app.css" />

    <link
      rel="shortcut icon"
      href="../assets/images/logo/favicon.svg"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="../assets/images/logo/favicon.png"
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
                  <h3>Data Paket</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Paket</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <a href="{{ route('paket.create') }}" class="btn btn-primary btn-sm text-center">Tambah Data</a>
                    <form action="" method="get" class="d-flex gap-2">
                      <input
                        type="text"
                        class="form-control float-end"
                        placeholder="Search"
                        name="search"
                      />
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                  </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Resi</th>
                          <th>Tujuan</th>
                          <th>Tanggal</th>
                          <th>Nama Pengirim</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($paket as $key => $value)
                        <tr>
                          <td class="text-bold-500">{{ ($paket->currentPage() - 1) * $paket->perPage() + $key + 1 }}</td>
                          <td>{{ $value->resi }}</td>
                          <td class="text-bold-500">{{ $value->data_paket['kota_asal'] }} - {{ $value->data_paket['kota_tujuan'] }}</td>
                          <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                          <td class="text-capitalize">{{ $value->data_paket['nama_pengirim'] }}</td>
                          <td class="text-capitalize">{{ $value->status_paket }}</td>
                          <td class="text-center">
                            <a href="/paket/{{ $value->resi }}" class="btn btn-warning btn-sm">View</a>
                            {{-- <button type="button" class="btn btn-danger btn-sm">Cancel</button> --}}
                          </td>
                        </tr>
                        @empty
                            
                        @endforelse
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                      {{ $paket->links() }}
                    </div>
                  </div>
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
    <!-- Tautan ke jQuery dan Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>

    <script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="../assets/js/pages/simple-datatables.js"></script>
  </body>
</html>