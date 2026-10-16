<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource (untuk Admin melihat pesan masuk).
     */
    public function index()
    {
        return view('admin.contact.index', ['contacts' => Contact::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource (untuk halaman kontak publik).
     */
    public function create()
    {
        return view('home.contact');
    }

    /**
     * Store a newly created resource in storage (menyimpan pesan dari form publik).
     */
    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();

        Contact::create($data);

        return back()->with('berhasil', 'Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.');
    }

    /**
     * Display the specified resource (opsional: melihat detail pesan).
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage (menghapus pesan di admin).
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return to_route('contacts.index')->with('berhasil', 'Pesan berhasil dihapus.');
    }
}