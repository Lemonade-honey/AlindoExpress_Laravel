<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Staff</title>

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
    @include('includes._navbar')
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
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton"
                    style="min-width: 11rem"
                  >
                    <li>
                      <h6 class="dropdown-header">Hello, John!</h6>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"
                        ><i class="icon-mid bi bi-person me-2"></i> My
                        Profile</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"
                        ><i class="icon-mid bi bi-gear me-2"></i> Settings</a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="/dashboard/logout"
                        ><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                        Logout</a
                      >
                    </li>
                  </ul>
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
                  <h3>Data Staff</h3>
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
                  <a href="/dashboard/staf/create" class="btn btn-primary btn-sm"
                    >Tambah Data Staff</a
                  >
                  <!-- Tambah search -->
                </div>

                <div class="card-body">
                  @if(session()->has('success'))
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
                            <td class="text-bold-500">{{ ($users->currentPage() - 1) * $users->perPage() + $key + 1 }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-bold-500">{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td class="text-center">
                              <a href="/dashboard/staf/delete/{{ $user->id }}" class="btn btn-danger">
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

          @include('includes._footer')
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