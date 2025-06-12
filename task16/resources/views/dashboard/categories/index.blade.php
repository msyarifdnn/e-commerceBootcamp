<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Categories of Product') }}
    </h2>
  </x-slot>

  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <button class="btn btn-primary">+ Add New Category</button>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Product Quantity</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Elektronik</td>
            <td>25</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pakaian</td>
            <td>40</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
    <!-- Tambah baris lainnya sesuai kebutuhan -->
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>

{{-- <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Kategori Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Kategori Produk</h2>
            <button class="btn btn-primary">+ Tambah Kategori</button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Jumlah Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Elektronik</td>
                        <td>25</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pakaian</td>
                        <td>40</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambah baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
