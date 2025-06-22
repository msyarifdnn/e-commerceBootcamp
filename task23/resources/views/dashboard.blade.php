@section('title', 'Dashboard')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="background-color: #b4e9f9;">
                  <h5 class="card-header fw-bold">Jumlah Produk</h5>
                  <div class="card-body">
                    <h5 class="card-title fw-bold" style="font-size: 50px">{{ $productCount }}</h5>
                    <p class="card-text">Total produk yang tersedia di sistem.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="background-color:#bdf8c3;">
                  <h5 class="card-header fw-bold">Jumlah Klik Produk</h5>
                  <div class="card-body">
                    <h5 class="card-title fw-bold" style="font-size: 50px">{{ $clickCount }}</h5>
                    <p class="card-text">Total klik yang telah dilihat pengguna.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="background-color:#fbf2b7;">
                  <h5 class="card-header fw-bold">Jumlah Kategori Produk</h5>
                  <div class="card-body">
                    <h5 class="card-title fw-bold" style="font-size: 50px">{{ $categoryCount }}</h5>
                    <p class="card-text">Total kategori produk yang tersedia di sistem.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
