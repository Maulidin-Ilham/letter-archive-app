@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-3 text-gray-800">{{ $archive->title }}</h1>
        <p><strong>Nomor Surat:</strong> {{ $archive->letter_number }}</p>
        <p><strong>Kategori:</strong> {{ $archive->category->name }}</p>
        <p>{{ $fileUrl }}</p>
        <div class="card shadow">
            <div class="card-body">
                {{-- cara 1 pakai embed --}}
                <embed src="{{ $fileUrl }}" type="application/pdf" width="100%" height="700px" />
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('archives.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
