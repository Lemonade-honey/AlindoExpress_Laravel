<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice || 0023123123</title>
    <link rel="stylesheet" href="../../assets/css/main/invoice.css">
</head>
<body>
    <div class="main-container">
        <div class="title">
            <h2>Alindo Cargo</h2>
            <p>jln. ashjdajhsd asjjdsaajhsdb asdhahsjddashd ahsd</p>
        </div>
        <div class="container">
            <div class="sub-container">
                <div class="form flex">
                    <div class="content-flex">
                        <label for="label">Resi</label>
                        <p class="form-control" id="label"><strong>{{ $paket->resi }}</strong></p>
                    </div>
                    <div class="content-flex">
                        <label for="label">Tanggal Buat</label>
                        <p class="form-control" id="label">{{ date('d F Y', strtotime($paket->created_at)) }}</p>
                    </div>
                </div>
                <div class="form">
                    <label for="label">Kota Asal</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['kota_asal'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Kota Tujuan</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['kota_tujuan'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Jumlah Koli</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['jumlah_koli'] }}</p>
                </div>
                <div class="form flex">
                    <div class="content-flex">
                        <label for="label">Berat Barang</label>
                        <p class="form-control" id="label">{{ $paket->data_paket['berat'] }}</p>
                    </div>
                    <div class="content-flex">
                        <label for="label">Berat Volume</label>
                        <p class="form-control" id="label">{{ $paket->data_paket['berat_volume'] }}</p>
                    </div>
                </div>
                <div class="form">
                    <label for="label">Kategori Barang</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['kategori'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Isi Barang</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['periksa'] }}</p>
                </div>
            </div>
            <div class="sub-container">
                <div class="form">
                    <label for="label">Nama Pengirim</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['nama_pengirim'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Nomer HP Pengirim</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['hp_pengirim'] }}</p>
                </div>
                <div class="form" style="margin-top: 5.2rem;">
                    <label for="label">Nama Penerima</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['nama_penerima'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Nomer HP Penerima</label>
                    <p class="form-control" id="label">{{ $paket->data_paket['hp_penerima'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Alamat Penerima</label>
                    <p class="form-control" id="label" style="height: 6rem;">{{ $paket->data_paket['alamat_penerima'] }}</p>
                </div>
            </div>
            <div class="sub-container">
                <div class="form">
                    <label for="label">Biaya Kirim</label>
                    <p class="form-control" id="label">Rp. {{ $paket->biaya_paket['biaya_kirim'] }}</p>
                </div>
                <div class="form">
                    <label for="label">Total Biaya</label>
                    <p class="form-control" id="label">Rp. {{ $paket->biaya_paket['biaya_total'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>