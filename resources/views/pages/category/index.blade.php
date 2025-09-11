@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-0 text-gray-800">Kategori Surat</h1>
        <p class="mb-0">Berikut ini adalah surat surat yang telah terbit dan diarsipkan.</p>
        <p class="">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>


        <div class="row">
            <div class="col-xl-12 mb-2">
                <a href="{{ route('categories.create') }}" class="btn btn-success">
                    Tambah Kategori Baru
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                {{-- <tfoot>
                                    <tr>
                                        <th>ID Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> --}}
                                <tbody>

                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->detail }}</td>

                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                    <button type="button" class="btn btn-warning">Edit</button>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
