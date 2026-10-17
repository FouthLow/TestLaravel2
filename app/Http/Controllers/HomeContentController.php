<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHomeContent;
use App\Models\HomeContent;
use App\Http\Requests\UpdateHomeContentRequest;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    /**
     * Display a listing / form for editing home contents.
     */
    public function index()
    {
        $contents = HomeContent::pluck('value', 'key')->toArray();
        return view('admin.content.index', compact('contents'));
    }

    /**
     * Store or Update newly created/modified resources in storage.
     */
    public function update(UpdateHomeContent $request)
    {
        $data = $request->validated();

        // Tangani upload gambar banner hero
        if ($request->hasFile('hero_banner')) {
            $oldBanner = HomeContent::where('key', 'hero_banner')->value('value');

            if ($oldBanner) {
                Storage::disk('public')->delete($oldBanner);
            }

            $data['hero_banner'] = $request->file('hero_banner')->store('home', 'public');
        }

        // Loop dan simpan/update ke database
        foreach ($data as $key => $value) {
            HomeContent::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return to_route('home-contents.index')->with('berhasil', 'Konten beranda berhasil diupdate.');
    }
}