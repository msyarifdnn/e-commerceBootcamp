@extends('layouts')
@section('title', 'ARshop')

@section('content')
<!-- Konten Utama -->
<main class="container my-5">
  <h1 class="text-center mb-4">Keranjang Belanja</h1>

  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Subtotal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Produk 1 -->
        <tr>
          <td>
            <div class="d-flex align-items-center gap-3">
              <img src="https://images.unsplash.com/photo-1521334884684-d80222895322?auto=format&fit=crop&w=500&q=60"
                  alt="Kemeja"
                  width="60"
                  height="60"
                  style="object-fit: cover; border-radius: 5px;">
              <span>Kemeja Lengan Panjang</span>
            </div>
          </td>
          <td>Rp 150.000</td>
          <td>2</td>
          <td>Rp 300.000</td>
          <td><button class="btn btn-sm btn-danger disabled">Hapus</button></td>
        </tr>

        <!-- Produk 2 -->
        <tr>
          <td>
            <div class="d-flex align-items-center gap-3">
              <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=500&q=60"
                  alt="Tas Ransel"
                  width="60"
                  height="60"
                  style="object-fit: cover; border-radius: 5px;">
              <span>Tas Ransel</span>
            </div>
          </td>
          <td>Rp 250.000</td>
          <td>1</td>
          <td>Rp 250.000</td>
          <td><button class="btn btn-sm btn-danger disabled">Hapus</button></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3" class="text-end">Total</th>
          <th>Rp 550.000</th>
          <th></th>
        </tr>
      </tfoot>
    </table>
  </div>

  <div class="text-end mt-3">
    <button class="btn btn-success disabled">Checkout</button>
  </div>
</main>
@endsection

</body>
</html>
