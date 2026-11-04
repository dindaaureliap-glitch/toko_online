<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    // Mengambil data produk skincare dari database
    $products = Product::with(['brand', 'category'])->get();

    // Menampilkan file view 'products' (desain Google Stitch) dan mengirim data produknya
    return view('products', compact('products'));
}

public function profile()
{
    // Nanti di sini bisa kita ambil data riwayat pesanan user dari database
    return view('profile');
}

public function show($id)
{
    // Mengambil data 1 produk skincare secara spesifik beserta brand & kategorinya
    $product = Product::with(['brand', 'category'])->findOrFail($id);

    // Menampilkan ke file view 'product-detail'
    return view('product-detail', compact('product'));
}
}