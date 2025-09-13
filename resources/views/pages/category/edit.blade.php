@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
        <p class="mb-4">Ubah data kategori surat di bawah ini.</p>

        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- penting untuk update -->

                            <div class="form-group mb-3">
                                <label for="id">ID Kategori</label>
                                <input type="text" class="form-control" id="id" value="{{ $category->id }}"
                                    disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name">Nama Kategori</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $category->name) }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="detail">Keterangan</label>
                                <textarea class="form-control" id="detail" name="detail" rows="3">{{ old('detail', $category->detail) }}</textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-12">
                <a href="{{ route('categories.index') }}" class="btn btn-dark">
                    <span><i class="fas fa-arrow-left"></i></span> Kembali
                </a>
            </div>
        </div>

    </div>
@endsection
