<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentcontroll extends Controller
{
    // menerima request user
    public function store(Request $request, $productId)
    {
        // Validasi konten komentar
        $request->validate([
            'content' => 'required|string|max:1000', // mengecek untuk komentar telah di isi
        ]);

        // mengecek user sudah login atau belum
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu untuk memberikan komentar');
        }

        // Cari produk berdasarkan ID
        $product = product::findOrFail($productId);

        // Simpan komentar ke database
        comment::create([
            'user_id' => Auth::user()->id, // id pengguna yang sedang login
            'product_id' => $product->id,  // id produk yang dikomentari
            'content' => $request->content, // isi komentar
        ]);

        // Redirect kembali ke halaman produk
        return redirect()->route('product.show', $product->id)->with('success', 'Komentar berhasil ditambahkan!');
    }
}
