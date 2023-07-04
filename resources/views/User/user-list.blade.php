<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Staf List</title>
</head>
<body>
    <div class="container-fluid mt-4 px-5">
      <form action="/dashboard/staf/find" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Nama atau Email" name="search">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
        </div>
      </form>
      <table class="table table-dark table-striped-columns">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Jobdesk</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($users as $key => $user)
          <tr>
            <th scope="row">{{ ($users->currentPage() - 1) * $users->perPage() + $key + 1 }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
          </tr>
          @empty
              <tr>
                <td colspan="4" class="text-center">Kosong</td>
              </tr>
          @endforelse
        </tbody>
      </table>
      <!-- Tampilkan tombol navigasi pagination -->
      <div class="d-flex justify-content-center align-items-center">
        {{ $users->links() }}
      </div>
    </div>
</body>
</html>