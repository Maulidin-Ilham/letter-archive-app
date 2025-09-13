@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-0 text-gray-800">Kategori Surat</h1>
        <p class="mb-2">Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.</p>



        <div class="row">
            <div class="col-xl-12 mb-2">
                <a href="{{ route('categories.create') }}" class="btn btn-success">
                    <span><i class="fas fa-plus"></i></span> Tambah
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
                                                    <form action="{{ route('categories.destroy', $category->id) }}"
                                                        method="POST" class="d-inline delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-danger delete-category mr-1"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>

                                                    <a href="{{ route('categories.edit', $category->id) }}"
                                                        class="btn btn-warning rounded">
                                                        <span><i class="fas fa-pen"></i></span>
                                                    </a>
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
