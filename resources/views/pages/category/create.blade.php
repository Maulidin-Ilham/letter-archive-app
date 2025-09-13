@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Kategori Surat >> Tambah</h1>
        <p class="mb-4">Tambah kategori surat.</p>

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
                                <input type="text" class="form-control" id="id" value="{{ $latestId + 1 }}"
                                    disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Kategori</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Masukkan nama kategori...">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="detail">Keterangan</label>
                                <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Masukkan detail kategori..."></textarea>
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
                <a href="{{ route('categories.index') }}" class="btn btn-dark">
                    <span><i class="fas fa-arrow-left"></i></span> Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
