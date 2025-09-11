@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Unggah</h1>
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
                                <input type="text" class="form-control" id="letter_number" name="letter_number">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option selected disabled> --Pilih Kategori-- </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <textarea class="form-control" id="title" name="title" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">File surat (PDF)</label>
                                <input type="file" class="form-control-file" id="file" name="file"
                                    accept="application/pdf">
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
                <a href="{{ route('archives.index') }}" class="btn btn-info">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
