@extends('layout.master')
@section('title', 'Tambah Agenda')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Data Master</h1>
<div class="card mb-4">
    <div class="card-header">
        <h4 class="m-0 font-weight-bold text-primary float-left">Tambah Data Agenda</h4>
        <a href="/agenda" class="btn btn-warning btn-sm float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form action="/agenda" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_event" class="text-dark font-weight-bold">Nama Event</label>
                <input type="text" class="form-control {{ $errors->has('nama_event') ? 'is-invalid' : '' }}" id="nama_event" name="nama_event" placeholder="Masukkan nama . . ." value="{{ old('nama_event') }}">
                @error('nama_event')
                <div class="invalid-feedback">
                    {{ucfirst($message)}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tgl_acara" class="text-dark font-weight-bold">Tanggal Acara</label>
                <input type="date" class="form-control {{ $errors->has('tgl_acara') ? 'is-invalid' : '' }}" id="tgl_acara" name="tgl_acara" placeholder="Masukkan nama . . ." value="{{ old('tgl_acara') }}">
                @error('tgl_acara')
                <div class="invalid-feedback">
                    {{ucfirst($message)}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="waktu_acara" class="text-dark font-weight-bold">Waktu Acara</label>
                <input type="time" class="form-control {{ $errors->has('waktu_acara') ? 'is-invalid' : '' }}" id="waktu_acara" name="waktu_acara" placeholder="Masukkan nama . . ." value="{{ old('waktu_acara') }}">
                @error('waktu_acara')
                <div class="invalid-feedback">
                    {{ucfirst($message)}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="keterangan" class="text-dark font-weight-bold">Keterangan</label>
                <textarea class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : '' }}" id="keterangan" placeholder="Masukkan keterangan . . ." name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ ucfirst($message) }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection