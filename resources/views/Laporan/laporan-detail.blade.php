<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan</title>

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
                  <h3>Laporan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb"class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page"><a href="/laporan">Laporan</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Detail Laporan</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <a href="/laporan/{{ $date }}/download" class="btn btn-primary btn-sm text-center">Cetak Laporan</a>
                  </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Kode Resi</th>
                          <th>Tanggal Pembuatan</th>
                          <th>Kota Tujuan</th>
                          <th>Total Biaya</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        @forelse ($paket as $key => $value)
                        <tr>
                            <td class="text-bold-500">{{ $key + 1 }}</td>
                            <td>{{ $value->resi }}</td>
                            <td>{{ date('D m Y', strtotime($value->created_at)) }}</td>
                            <td class="text-bold-500">{{ $value->data_paket['kota_tujuan'] }}</td>
                            <td class="text-center">{{ $value->biaya_paket['biaya_total'] }}</td>
                            <td class="text-center">{{ $value->status_paket }}</td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="6">Tidak ada Transaksi pada bulan ini</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
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
  </body>
</html>
