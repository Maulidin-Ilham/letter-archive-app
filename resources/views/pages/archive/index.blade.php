@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Arsip</h1>
        <p class="mb-0">Berikut ini adalah surat surat yang telah terbit dan diarsipkan.</p>
        <p class="">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>

        <div class="row">
            <div class="col-xl-12 mb-2">
                <a href="{{ route('archives.create') }}" class="btn btn-success">
                    Arsipkan surat
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomor Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengarsipan</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($archives as $archive)
                                        <tr>
                                            <td>{{ $archive->letter_number }}</td>
                                            <td>{{ $archive->category->name }}</td>
                                            <td>{{ $archive->title }}</td>
                                            <td>{{ $archive->created_at->translatedFormat('d F Y H:i') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a type="button" class="btn btn-danger">Hapus</a>
                                                    <a href="{{ route('archives.download-pdf', $archive->id) }}"
                                                        class="btn btn-warning">Unduh</a>
                                                    <a href="{{ route('archives.view-pdf', $archive->id) }}"
                                                        class="btn btn-info">
                                                        Lihat
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
