<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class econtroll extends Controller
{
    public function index()
    {
        $bestseller = product::orderbydesc('count')->first(); //mengambil data best seller 
        $recommend = product::where('recommend',true)->orderbydesc('updated_at')->take(3)->get(); //mengambil 3 data terakhir rekomendasi
        return view('index', compact('bestseller', 'recommend'));
    }
    public function product(Request $request)
    {
        $search = $request->input('search'); //mengisi variable search dengan hasil inputan user
        if ($search) {
            $product = product::where('name', 'like', '%' . strtolower($search) . '%'); //membuat case-insensitive, % -> pencarian tidak hanya untuk kata yang dimulai dengan atau diakhiri oleh $search, tetapi juga untuk kata yang mengandung kata pencarian di tengahnya.
        } else {
            $product = product::query(); //mengembalikan data tanpa filter
        }
        $product = $product->latest()->paginate(9);
        return view('product', compact('product'));
    }

    public function show($id){
        $product = product::with('comments.user')->findOrFail($id);
        return view('product.show', compact('product'));
    }
    public function contact(){
        return view('contact');
    }
}
