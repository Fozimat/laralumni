@extends('layout.master')
@section('title', 'Data Alumni')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Data Master</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary float-left">Data Alumni</h4>
        <a href="/alumni/tambah" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </div>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <table class="table table-bordered table-hover" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumni as $al)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $al->nisn }}</td>
                        <td>{{ $al->nama }}</td>
                        <td>{{ $al->tahun_masuk }}</td>
                        <td>{{ $al->tahun_lulus }}</td>
                        <td>
                            <a href="/alumni/{{ $al->id }}" class="btn btn-sm btn-warning">detail</a> |
                            <a href="/alumni/edit/{{ $al->id }}" class="btn btn-sm btn-info">edit</a> |
                            <form action="/alumni/{{ $al->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger delete">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection