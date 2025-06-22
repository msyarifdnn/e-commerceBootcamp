@section('title', 'Edit-Category')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Edit Category') }}
    </h2>
  </x-slot>

  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" value="{{ $category->name }}" id="name" name="name" placeholder="Masukkan nama kategori" required>
          </div>
          <div class="d-flex justify-content-between">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>