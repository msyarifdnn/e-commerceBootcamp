<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // mengambil jumlah produk
        $productCount = Product::count();

        // mengambil jumlah kategori produk
        $categoryCount = ProductCategory::count();

        // mengambil jumlah klik product
        $clickCount = Product::sum('click');

        // kirim data ke view dashboard
        return view('dashboard', compact('productCount', 'categoryCount', 'clickCount'));
    }
}
