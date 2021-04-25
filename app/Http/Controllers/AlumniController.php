<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();
        return view('admin.alumni.index', compact(['alumni']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->foto);
        $request->validate(
            [
                'nisn' => 'required|numeric|digits_between:4,9|unique:alumni,nisn',
                'nama' => 'required|min:3',
                'jenis_kelamin' => 'required',
                'tahun_masuk' => 'required|size:4',
                'tahun_lulus' => 'required|size:4',
                'tgl_lahir' => 'required',
                'tempat_lahir' => 'required|min:3',
                'alamat' => 'required|min:5',
                'email' => 'required|email|unique:alumni,email',
                'no_telp' => 'required|numeric|min:8',
                'foto' => 'required|mimes:jpg,jpeg,png|max:1024'
            ],
            [
                'required' => ':attribute wajib diisi',
                'integer' => ':attribute harus angka',
                'size' => ':attribute harus :size karakter',
                'unique' => ':attribute sudah digunakan',
                'digits_between' => ':attribute harus antara :min hingga :max karakter',
                'numeric' => ':attribute harus angka',
                'mimes' => 'Ekstensi :attribute harus jpg,jpeg,png',
            ]
        );

        $alumni = new Alumni();
        $alumni->nisn = $request->nisn;
        $alumni->nama = $request->nama;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->tahun_masuk = $request->tahun_masuk;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->email = $request->email;
        $alumni->no_telp = $request->no_telp;

        $firstName = explode(' ', $request->nama);
        $getFirstName = array_shift($firstName);

        $name = $request->nisn . '_' . $getFirstName . '.' . $request->file('foto')->getClientOriginalExtension();

        if ($request->hasFile('foto')) {
            $alumni->foto = $name;
            $path = $request->file('foto')->move('images', $name);
        }

        $alumni->save();

        return redirect('/alumni')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        $alumni = Alumni::find($alumni)->first();
        // dd($alumni);
        return view('admin.alumni.detail', compact(['alumni']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('admin.alumni.edit', compact(['alumni']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $request->validate(
            [
                'nisn' => 'required|numeric|digits_between:4,9|unique:alumni,nisn,' . $alumni->id,
                'nama' => 'required|min:3',
                'jenis_kelamin' => 'required',
                'tahun_masuk' => 'required|size:4',
                'tahun_lulus' => 'required|size:4',
                'tgl_lahir' => 'required',
                'tempat_lahir' => 'required|min:3',
                'alamat' => 'required|min:5',
                'email' => 'required|email|unique:alumni,email,' . $alumni->id,
                'no_telp' => 'required|numeric|min:8',
            ],
            [
                'required' => ':attribute wajib diisi',
                'integer' => ':attribute harus angka',
                'size' => ':attribute harus :size karakter',
                'unique' => ':attribute sudah digunakan',
                'digits_between' => ':attribute harus antara :min hingga :max karakter',
                'numeric' => ':attribute harus angka',
                'mimes' => 'Ekstensi :attribute harus jpg,jpeg,png',
            ]
        );

        if ($request->hasFile('foto')) {
            $request->validate(
                [
                    'foto' => 'required|mimes:jpg,jpeg,png|max:1024'
                ]
            );

            $loc = public_path() . '/images/' . $alumni->foto;
            if (file_exists($loc)) {
                File::delete($loc);
            }

            $firstName = explode(' ', $request->nama);
            $getFirstName = array_shift($firstName);
            $name = $request->nisn . '_' . $getFirstName . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('images', $name);
            $alumni->foto = $name;
        }

        $alumni->nisn = $request->nisn;
        $alumni->nama = $request->nama;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->tahun_masuk = $request->tahun_masuk;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->email = $request->email;
        $alumni->no_telp = $request->no_telp;

        $alumni->save();

        return redirect('/alumni')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        Alumni::destroy($alumni->id);
        // $alumni = Alumni::where('id', $alumni->id);
        // $alumni->delete();
        $loc = public_path() . '/images/' . $alumni->foto;

        if (file_exists($loc)) {
            File::delete($loc);
        }

        return redirect('/alumni')->with('status', 'Data berhasil dihapus');
    }
}
