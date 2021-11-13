@extends('layouts.master')

<head>
    <title>Pengalaman - pengawasan</title>
</head>
@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h1 class="h3 mb-0 text-gray-800">P E N G A W A S A N</h1>
                        <div style="align-content: space-between">
                            <!-- <a href="{{ url('pengawasan/print') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-print fa-sm text-white-50"></i> Print</a> -->
                            <a href="{{route('pengawasan.create')}}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">Nama Paket</th>
                                        <th rowspan="2">Jenis bangunan</th>
                                        <th rowspan="2">Nomor Kontrak</th>
                                        <th rowspan="2">Lokasi</th>
                                        <th rowspan="2">Nilai Kontrak</th>
                                        <th rowspan="2">Tanggal Mulai</th>
                                        <th colspan="2">Tanggal Selesai</th>
                                        <th rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th>Kontrak <p style="color: red; font-size: 12px;">(Tahun / Bulan / hari)</p>
                                        </th>
                                        </th>
                                        <th>BAP Laporan Akhir <p style="color: red; font-size: 12px;">(Tahun / Bulan / Hari)
                                            </p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengawasan as $items)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $items->nama_paket }}</th>
                                            <th>{{ $items->bangunan ? $items->bangunan->bangunan : '-' }}</th>
                                            <th>{{ $items->nomor}}</th>
                                            <th>{{ $items->lokasi }}</th>
                                            <th>{{ $items->nilai }}</th>
                                            <th>{{ $items->mulai }}</th>
                                            <th>{{ $items->selesai }}</th>
                                            <th>{{ $items->selesai_BAP }}</th>


                                            <th class="text-center">
                                                <a href="{{ url('pengawasan/' . $items->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ url('pengawasan/' . $items->id.'/edit') }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form action="{{ url('pengawasan/' . $items->id) }}" method="post"
                                                    class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
    </div>
    <!-- End of Footer -->
@endsection
