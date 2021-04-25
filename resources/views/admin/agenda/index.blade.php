@extends('layout/master')
@section('title', 'Data Agenda')
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
        <h4 class="m-0 font-weight-bold text-primary float-left">Data Agenda</h4>
        <a href="/agenda/create" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </div>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <table class="table table-bordered table-hover" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Tanggal Acara</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agenda as $ag)

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ag->nama_event }}</td>
                        <td>{{ \Carbon\Carbon::parse($ag->tgl_acara)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($ag->waktu_acara)->format('H:i') }}</td>
                        <td>{{ $ag->keterangan }}</td>
                        <td>
                            <a href="/agenda/{{ $ag->id }}/edit" class="btn btn-sm btn-info">edit</a> |
                            <form action="/agenda/{{ $ag->id }}" method="POST" class="d-inline">
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