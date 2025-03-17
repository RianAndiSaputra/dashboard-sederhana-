<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil data produk dengan pengelompokan berdasarkan 'nama' dan total jumlah produk
        $groupedProducts = Product::select('nama', DB::raw('sum(jumlah) as total'))
            ->groupBy('nama')
            ->get();

        // Kirim data ke view
        return view('produk.index', compact('groupedProducts'));
    }
}
