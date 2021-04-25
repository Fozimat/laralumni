@extends('layout.master')
@section('title', 'Tambah Data Alumni')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Data Master</h1>
<div class="card mb-4">
    <div class="card-header">
        <h4 class="m-0 font-weight-bold text-primary float-left">Tambah Data Alumni</h4>
        <a href="/alumni" class="btn btn-warning btn-sm float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form action="/alumni" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nisn" class="text-dark font-weight-bold">NISN</label>
                <input type="text" class="form-control {!! $errors->has('nisn') ? 'is-invalid' : '' !!}" id="nisn" name="nisn" placeholder="Masukkan NISN . . ." value="{{ old('nisn') }}">
                @error('nisn')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama" class="text-dark font-weight-bold">Nama</label>
                <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" id="nama" name="nama" placeholder="Masukkan nama . . ." value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Pria" {{ (old('jenis_kelamin') == 'Pria') ? 'selected' : '' }}>Pria</option>
                    <option value="Wanita" {{ (old('jenis_kelamin') == 'Wanita') ? 'selected' : '' }}>Wanita</option>
                </select>
                @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun_masuk" class="text-dark font-weight-bold">Tahun Masuk</label>
                <input type="text" class="form-control {{ $errors->has('tahun_masuk') ? 'is-invalid' : '' }}" id="tahun_masuk" name="tahun_masuk" placeholder="Masukkan tahun masuk . . ." value="{{ old('tahun_masuk') }}">
                @error('tahun_masuk')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun_lulus" class="text-dark font-weight-bold">Tahun Lulus</label>
                <input type="text" class="form-control {{ $errors->has('tahun_lulus') ? 'is-invalid' : '' }}" id="tahun_lulus" name="tahun_lulus" placeholder="Masukkan tahun lulus . . ." value="{{ old('tahun_lulus') }}">
                @error('tahun_lulus')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tgl_lahir" class="text-dark font-weight-bold">Tanggal Lahir</label>
                <input type="date" class="form-control {{ $errors->has('tgl_lahir') ? 'is-invalid' : '' }}" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tanggal lahir . . ." value="{{ old('tgl_lahir') }}">
                @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tempat_lahir" class="text-dark font-weight-bold">Tempat Lahir</label>
                <input type="text" class="form-control {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir . . ." value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat" class="text-dark font-weight-bold">Alamat</label>
                <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" id="alamat" placeholder="Masukkan alamat . . ." name="alamat" rows="3">{{ old('alamat') }}</textarea>
                @error('alamat')
                <div class=invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="text-dark font-weight-bold">E-mail</label>
                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="Masukkan email . . ." value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telp" class="text-dark font-weight-bold">Nomor Telepon</label>
                <input type="text" class="form-control {{ $errors->has('no_telp') ? 'is-invalid' : '' }}" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon . . ." value="{{ old('no_telp') }}">
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto" class="text-dark font-weight-bold">Foto</label>
                <div class="custom-file">
                    <label for="foto" class="text-dark font-weight-bold">Foto</label>
                    <input type="file" class="custom-file-input {{ $errors->has('foto') ? 'is-invalid' : '' }}" id="foto" name="foto" value="{{ old('foto') }}">
                    <label class="custom-file-label" for="foto">Pilih gambar . . .</label>
                    @error('foto')
                    <div class="invalid-feedback">
                        {{ ucfirst($message) }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection