@section('title', 'Products')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Products list') }}
    </h2>
  </x-slot>

  <style>
    img.thumbnail {
      width: 100px;
      height: auto;
      object-fit: cover;
    }
  </style>

  <div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <a href="{{ route('products.create') }}" class="btn btn-success">+ Add New Product</a>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td><img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="thumbnail"></td>
          <td>{{ $product->stock }}</td>
          <td>{{'Rp ' . number_format($product->price, 0, ',', '.') }}</td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
          </td>
        </tr>
        @endforeach
        <!-- Tambah baris produk lain di sini -->
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
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    img.thumbnail {
      width: 80px;
      height: auto;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Produk</h2>
    <button class="btn btn-success">+ Tambah Produk</button>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Smartphone</td>
          <td>Smartphone Android terbaru dengan kamera 108MP.</td>
          <td><img src="https://via.placeholder.com/80" alt="Gambar Produk" class="thumbnail"></td>
          <td>15</td>
          <td>Rp 3.500.000</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kaos Polos</td>
          <td>Kaos polos katun 100%, berbagai warna tersedia.</td>
          <td><img src="https://via.placeholder.com/80" alt="Gambar Produk" class="thumbnail"></td>
          <td>50</td>
          <td>Rp 55.000</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- Tambah baris produk lain di sini -->
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
