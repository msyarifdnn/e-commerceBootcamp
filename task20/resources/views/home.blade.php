@extends('layout')
@section('title', 'ARshop')

@section('content')
<!-- Konten utama -->
<main class="container my-5">
  <h1 class="text-center mb-4">Produk Terbaru</h1>
  <div class="row g-4 d-flex justify-content-center">
    <!-- Produk 1 -->
    @foreach ( $products as $product )
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="{{ $product->image }}"
            class="card-img-top"
            alt="Kemeja" style="object-fit: cover; height: 200px;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="text-success fw-bold">Rp {{ $product->price }}</p>
          <a href="#" class="btn btn-primary mt-auto disabled">+Keranjang</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="mt-5 col-12 d-flex justify-content-center">
    {{ $products->links() }}
  </div>
</main>
@endsection

</body>
</html>
