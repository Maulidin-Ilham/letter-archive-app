@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800">Arsip</h1>
        <p class="mb-2">Berikut ini adalah surat surat yang telah terbit dan diarsipkan.</p>


        <div class="row">
            <div class="col-xl-12 mb-2">
                <a href="{{ route('archives.create') }}" class="btn btn-success">
                    <span><i class="fas fa-plus"></i></span> Arsip
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
                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Terhapus!',
                                        text: '{{ session('success') }}',
                                        timer: 2000,
                                        showConfirmButton: false
                                    });
                                </script>
                            @endif

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
                                            <td>{{ optional($archive->category)->name ?? 'Tidak ada kategori' }}</td>
                                            <td>{{ $archive->title }}</td>
                                            <td>{{ $archive->created_at->translatedFormat('d F Y H:i') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <form action="{{ route('archives.destroy', $archive->id) }}"
                                                        method="POST" class="d-inline delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger delete-archive mr-1"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>

                                                    <a href="{{ route('archives.download-pdf', $archive->id) }}"
                                                        class="btn btn-warning rounded mr-1"><i
                                                            class="fas fa-download"></i></a>
                                                    <a href="{{ route('archives.view-pdf', $archive->id) }}"
                                                        class="btn btn-info rounded mr-1">
                                                        <i class="fas fa-eye"></i>
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
