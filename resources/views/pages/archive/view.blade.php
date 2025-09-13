@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-0 text-gray-800">Arsip Surat >> Lihat</h1>
        <p class="mb-0">Nomor: {{ $archive->letter_number }}</p>
        <p class="mb-0">Kategori: {{ $archive->category->name }}</p>
        <p class="mb-0">Judul: {{ $archive->title }}</p>
        <p class="mb-4">Waktu: {{ $archive->created_at->translatedFormat('d F Y H:i') }}</p>

        <div class="card shadow">
            <div class="card-body">
                {{-- cara 1 pakai embed --}}
                {{-- <embed src="{{ $fileUrl }}" type="application/pdf" width="100%" height="700px" /> --}}
                <iframe src="{{ $fileUrl }}" style="width:100%;height:500px;border:none;" title="Preview PDF"></iframe>


            </div>
        </div>

        <div class="mt-3">
            <div class="d-flex flex-row">
                <a href="{{ route('archives.index') }}" class="btn btn-dark mr-2"> <span><i
                            class="fas fa-arrow-left"></i></span>
                    Kembali</a>
                <a href="{{ route('archives.download-pdf', $archive->id) }}" class="btn btn-warning"> <span><i
                            class="fas fa-download"></i></span>
                    Unduh</a>
            </div>
        </div>
    </div>
@endsection
