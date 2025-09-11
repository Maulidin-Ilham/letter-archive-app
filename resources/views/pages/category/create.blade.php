@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
        <p class="mb-4">Unggah surat yang telah terbit pada form ini dalam bentuk PDF.</p>

        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    {{-- <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                    </div> --}}
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="id">ID Kategori</label>
                                <input type="text" class="form-control" id="id" value="(Auto)" disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Kategori</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="detail">Keterangan</label>
                                <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <a href="{{ route('categories.index') }}" class="btn btn-info">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
