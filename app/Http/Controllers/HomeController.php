<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Product;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
        'products' => Product::latest()->take(3)->get(),
        'artikels' => Artikel::latest()->take(3)->get(),
        'galeris' => Galeri::latest()->take(4)->get(),
        ]);
    }

    public function artikel()
    {
        return view('home.artikel', [
        'artikels' => Artikel::latest()->take(3)->get(),
        ]);
    }

    public function galeri()  {
        return view('home.galeri', [
        'galeris' => Galeri::latest()->take(4)->get(),
        ]);
    }

    public function product()  {
        return view('home.produk', [
        'products' => Product::latest()->take(4)->get(),
        ]);
    }

    public function contact()  {
        return view('home.contact');
    }
    
    public function artikelshow($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('home.show.artikel', compact('artikel'));
    }
}
