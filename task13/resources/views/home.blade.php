@extends('layout')
@section('title', 'ARshop')

@section('content')
<!-- Konten utama -->
<main class="container my-5">
  <h1 class="text-center mb-4">Produk Terbaru</h1>
  <div class="row g-4">
    <!-- Produk 1 -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1521334884684-d80222895322?auto=format&fit=crop&w=500&q=60"
            class="card-img-top"
            alt="Kemeja" style="object-fit: cover; height: 200px;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Kemeja Lengan Panjang</h5>
          <p class="text-success fw-bold">Rp 150.000</p>
          <a href="#" class="btn btn-primary mt-auto disabled">Beli Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Produk 2 -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1600185367533-cf560c0c2a33?auto=format&fit=crop&w=500&q=60"
            class="card-img-top"
            alt="Sepatu" style="object-fit: cover; height: 200px;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Sepatu Sneakers</h5>
          <p class="text-success fw-bold">Rp 300.000</p>
          <a href="#" class="btn btn-primary mt-auto disabled">Beli Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Produk 3 -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=500&q=60"
            class="card-img-top"
            alt="Tas" style="object-fit: cover; height: 200px;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Tas Ransel</h5>
          <p class="text-success fw-bold">Rp 250.000</p>
          <a href="#" class="btn btn-primary mt-auto disabled">Beli Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Produk 4 -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1509228627152-49f23657f2cc?auto=format&fit=crop&w=500&q=60"
            class="card-img-top"
            alt="Jam Tangan" style="object-fit: cover; height: 200px;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Jam Tangan</h5>
          <p class="text-success fw-bold">Rp 450.000</p>
          <a href="#" class="btn btn-primary mt-auto disabled">Beli Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

</body>
</html>
