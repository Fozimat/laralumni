@extends('layout.master')
@section('title', 'Halaman Detail')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Halaman Detail</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="card-shadow">
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <h4 class="m-0 font-weight-bold text-light">Terdaftar pada : {{ $alumni->created_at->format('D, d M Y , H:i:s') }}
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img width="200px" height="200px" class="rounded-circle border border-primary mt-3" alt="no-image" src="{{ asset('images/'.$alumni->foto) }}">
                                <h4 class="m-0 font-weight-bold text-dark ml-5 mt-3">{{ $alumni->nama }}</h4>

                                <a class="btn btn-success ml-5 mt-3" href="/alumni/edit/{{ $alumni->id }}"><i class="fa fa-edit"></i> Edit</a>
                            </div>
                            <div class="col-lg-10">
                                <ul class="list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">NISN</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->nisn }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Jenis Kelamin</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->jenis_kelamin }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Tahun Masuk</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->tahun_masuk }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Tahun Lulus</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->tahun_lulus }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Tanggal Lahir</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->tgl_lahir }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Tempat Lahir</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->tempat_lahir }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">Alamat</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->alamat }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">No Handphone</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->no_telp }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-4 font-weight-bold">E-mail</div>
                                            <div class="col-lg-1 font-weight-bold">:</div>
                                            <div class="col-lg-6 font-weight-bold">{{ $alumni->email }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="/alumni" class="btn btn-warning float-right"><i class="fa fa-backward"></i> Kembali</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection