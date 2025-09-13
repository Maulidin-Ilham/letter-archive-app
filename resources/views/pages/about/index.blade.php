@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About</h1>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <!-- Image -->
                            <div class="me-3">
                                <img src="{{ asset('profile.jpeg') }}" alt="profile" class="rounded"
                                    style="width: 120px; height: 150px; object-fit: cover;">
                            </div>

                            <!-- Text Info -->
                            <div class="ml-4">
                                <p class="mb-2">Aplikasi ini dibuat oleh:</p>
                                <p class="mb-0"><strong>Nama:</strong> Muhammad Ilham Maulidin</p>
                                <p class="mb-0"><strong>Prodi:</strong> Sistem Informasi Bisnis</p>
                                <p class="mb-0"><strong>NIM:</strong> 2141762087</p>
                                <p class="mb-0"><strong>Tanggal:</strong> 13 September 2025</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
