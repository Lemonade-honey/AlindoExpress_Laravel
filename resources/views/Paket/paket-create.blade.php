<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Paket</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css" />

    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="../../assets/images/logo/logo.svg" alt="Logo"
                                    srcset="" /></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" />
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <div class="menu">
                        <h6 class="text-center">Hi, daffalif@gmail.com</h6>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item">
                            <a href="index.html" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
                            <a href="{{ route('paket.index') }}" class="sidebar-link">
                                <i class="bi bi-stack"></i>
                                <span>Paket</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="staff.html" class="sidebar-link">
                                <i class="bi bi-collection-fill"></i>
                                <span>Staff</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="list-laporan.html" class="sidebar-link">
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Laporan</span>
                            </a>
                        </li>

                        <li class="sidebar-item my-5">
                            <a href="#" class="sidebar-link">
                                <i class="icon-mid bi bi-box-arrow-left"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class="layout-navbar">
            <header class="mb-3">
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Tambah Data
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-bold-500">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <section id="multiple-column-form">
                                    <div class="row match-height">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <form class="form" method="POST"
                                                            action="{{ route('paket.post-tambah') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Kota
                                                                            Asal</label>
                                                                        <select name="kota-asal" class="form-select"
                                                                            id="kota-asal">
                                                                            <option selected>
                                                                                Pilih Kota Asal
                                                                            </option>
                                                                            <option value="Yogyakarta">
                                                                                Yogyakarta
                                                                            </option>
                                                                            <option value="lainnya">Lainnya</option>
                                                                        </select>
                                                                        <!-- name atribut ad di js -->
                                                                        <div id="kota-asal-lainnya"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Kota
                                                                            Tujuan</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Kota Tujuan"
                                                                            name="kota-tujuan" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Jumlah
                                                                            Koli</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Jumlah Koli"
                                                                            name="jumlah-koli" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Harga/Kg</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Harga/Kg"
                                                                            name="harga-kg" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Berat Volume
                                                                            (Min berat 50Kg)</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Berat Volume"
                                                                            name="berat-volume" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Kategori
                                                                            Barang</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Kategori"
                                                                            name="kategori-barang" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-column">Nama
                                                                            Pengirim</label>
                                                                        <input type="text" id="first-name-column"
                                                                            class="form-control"
                                                                            placeholder="Nama Pengirim"
                                                                            name="nama-pengirim" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="last-name-column">No hp
                                                                            Pengirim</label>
                                                                        <input type="text" id="last-name-column"
                                                                            class="form-control" placeholder="No-hp"
                                                                            name="nohp-pengirim" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="city-column">Nama Penerima</label>
                                                                        <input type="text" id="city-column"
                                                                            class="form-control" placeholder="Nama"
                                                                            name="nama-penerima" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="country-floating">Alamat
                                                                            Penerima</label>

                                                                        <textarea type="text" id="country-floating" class="form-control" name="alamat-penerima" required>
                                      </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="company-column">No hp
                                                                            Penerima</label>
                                                                        <input type="text" id="company-column"
                                                                            class="form-control" name="nohp-penerima"
                                                                            placeholder="No-hp" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-column">Biaya
                                                                            Kirim</label>
                                                                        <input type="text" id="email-id-column"
                                                                            class="form-control" name="biaya-kirim"
                                                                            placeholder="Biaya" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-column">Total</label>
                                                                        <input type="text" id="email-id-column"
                                                                            class="form-control" name="total"
                                                                            placeholder="Total" required />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex justify-content-start">
                                                                    <a href="{{ route('paket.index') }}"
                                                                        class="btn btn-danger me-2 mb-1">
                                                                        Cancel
                                                                    </a>
                                                                    <button type="submit"
                                                                        class="btn btn-primary me-2 mb-1">Buat
                                                                        Invoice</button>
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

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Alindo Express</p>
                        </div>
                        <div class="float-end">
                            <p>
                                Crafted with
                                <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
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
    <script>
        function actionKotaAsal() {
            const kotaAsal = document.getElementById("kota-asal");
            const kotaAsalLainnya = document.getElementById("kota-asal-lainnya");
            if (kotaAsal.value == "lainnya") {
                // remove name tag
                kotaAsal.removeAttribute("name");

                const inputForm = document.createElement("input");
                inputForm.setAttribute("type", "text");
                inputForm.setAttribute("name", "kota-asal");
                inputForm.setAttribute("class", "box-input");
                inputForm.setAttribute("placeholder", "Masukkan nama kota");

                kotaAsalLainnya.appendChild(inputForm);
            } else {
                if (kotaAsalLainnya.children.length > 0) {
                    kotaAsalLainnya.removeChild(kotaAsalLainnya.children[0]);
                }
                kotaAsal.setAttribute("name", "kota-asal");
            }
        }
    </script>
</body>

</html>
