<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Staff</title>

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
                  <h3>Data Staff</h3>
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
                        Staff
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="/staf/create" class="btn btn-primary btn-sm">Tambah Data Staff</a>
                        <!-- Tambah search -->
                    </div>

                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Nama Lengkap</th>
                                        <th>Job Desk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @forelse ($users as $key => $user)
                                        <tr>
                                            <td class="text-bold-500">
                                                {{ ($users->currentPage() - 1) * $users->perPage() + $key + 1 }}
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-bold-500">{{ $user->name }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td class="text-center">
                                                <a href="/staf/delete/{{ $user->id }}"
                                                    class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">List Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center align-items-center">
                                {{ $users->links() }}
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
  </body>
</html>