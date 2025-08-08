<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccess;
use App\Models\Registration;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:registrations,email',
            'handphone' => 'required|digits_between:10,16',
            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Simpan data ke database
        $registration = Registration::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_hp' => $validated['handphone'],
            'jenis_kelamin' => $validated['jenisKelamin'],
        ]);

        // Kirim email ke peserta
        Mail::to($registration->email)->send(new RegistrationSuccess(
            $registration->nama,
            $registration->no_hp,
            $registration->jenis_kelamin
        ));

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil dan email telah dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
