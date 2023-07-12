<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Paket</title>

    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/main/app.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/main/app-dark.css" />

    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/shared/iconly.css" />
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
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="/staf">Staff</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Data Staff</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-bold-500">Tambah Data Staff</h4>
                            </div>
                            <div class="card-body">
                                <section id="basic-horizontal-layouts">
                                    <div class="col-md-6 col-12">
                                        {{-- Form Start --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif
                                        <form class="form form-horizontal" method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Full Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="name" value="{{ old('name') }}"
                                                            placeholder="Full Name" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email" value="{{ old('email') }}"
                                                            placeholder="Email" />
                                                    </div>
                                                    <div class="d-flex mb-3">
                                                        <div class="col-md-4">
                                                            <label>Job Desk</label>
                                                        </div>
                                                        <select class="form-select" id=""
                                                            aria-label="label select example" name="role">
                                                            <option value="staf" selected>Staff</option>
                                                            <option value="kurir">Kurir</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Confirm Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password_confirmation"
                                                            placeholder="Confirm Password" />
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end mt-3">
                                                        <a href="/dashboard/staf"
                                                            class="btn btn-danger btn-sm me-1 mb-1 text">Cancel</a>
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm me-1 mb-1">
                                                            Register
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        {{-- Form end --}}
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
    <script src="http://127.0.0.1:8000/assets/js/bootstrap.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/app.js"></script>
</body>

</html>
