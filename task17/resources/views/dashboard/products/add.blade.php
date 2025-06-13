@section('title', 'Add-Product')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Add New Product') }}
    </h2>
  </x-slot>

  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <form action="/simpan-produk" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="mb-3">
            <label for="deskripsi" class="form-label">Description</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label for="stok" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
          </div>

          <div class="mb-3">
            <label for="harga" class="form-label">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
          </div>

          <div class="mb-3">
            <label for="kategori" class="form-label">Product Category</label>
            <select class="form-select" id="kategori" name="kategori" required>
              <option value="" selected disabled>Choose Category</option>
              <option value="elektronik">Elektronik</option>
              <option value="fashion">Fashion</option>
              <option value="makanan">Makanan</option>
              <option value="lainnya">Lainnya</option>
              <!-- Tambahkan opsi kategori lain sesuai kebutuhan -->
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <a href="{{ 'products' }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>