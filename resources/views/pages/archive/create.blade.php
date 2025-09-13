@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Arsip Surat >> Unggah</h1>
        <p class="mb-4">Unggah surat yang telah terbit pada form ini dalam bentuk PDF.</p>

        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    {{-- <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                    </div> --}}
                    <div class="card-body">
                        <form action="{{ route('archives.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="letter_number">Nomor Surat</label>
                                <input type="text" class="form-control @error('letter_number') is-invalid @enderror"
                                    id="letter_number" name="letter_number" value="{{ old('letter_number') }}">
                                @error('letter_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                    name="category_id">
                                    <option disabled {{ old('category_id') ? '' : 'selected' }}> --Pilih Kategori--
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <textarea class="form-control @error('title') is-invalid @enderror" id="title" name="title" rows="3">{{ old('title') }}</textarea>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file">File surat (PDF)</label>
                                <input type="file" class="form-control-file @error('file') is-invalid @enderror"
                                    id="file" name="file" accept="application/pdf">
                                @error('file')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
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
                <a href="{{ route('archives.index') }}" class="btn btn-dark">
                    <span><i class="fas fa-arrow-left"></i></span> Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
