@section('title', 'Categories')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Categories of Product') }}
    </h2>
  </x-slot>

  @if(session('success'))
    <div class="alert alert-success">
      <div class="container fw-bold">
        {{ session('success') }}
      </div>
    </div>
  @endif

  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Add New Category</a>
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
          @foreach ($categories as $category)
          <tr>
            <td>{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->product_count }}</td>
            <td>
              <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach

          bagaimana cara mengurutkan nomer bukan id?
    <!-- Tambah baris lainnya sesuai kebutuhan -->
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>
