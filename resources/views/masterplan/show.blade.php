@extends('layouts.master')

<head>
    <title>Pengalaman - masterplan</title>
</head>
@section('content')

    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h1 class="h3 mb-0 text-gray-800">D E T A I L &nbsp; M A S T E R P L A N </h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('masterplan/' . $masterplan->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('masterplan/' . $masterplan->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('masterplan.index') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="box-body table-responsive">
                            <div class="row">
                                <div class="col-md-8 offsite-md-3">
                                    <table class="table table-border">
                                        <tbody>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>{{ $masterplan->nomor }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Paket</th>
                                                <th>{{ $masterplan->nama_paket }}</th>
                                            </tr>
                                            <tr>
                                                <th>Bidang Pekerjaan</th>
                                                <th>{{ $masterplan->bidang }}</th>
                                            </tr>
                                            <tr>
                                                <th>Jenis Bangunan</th>
                                                <th>{{ $masterplan->bangunan ? $masterplan->bangunan->bangunan : '-' }}</th>
                                            </tr>
                                            <tr>
                                                <th>Lokasi</th>
                                                <th>{{ $masterplan->lokasi }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Pengguna Jasa</th>
                                                <th>{{ $masterplan->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>{{ $masterplan->alamat }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nominal Proyek</th>
                                                <th>Rp. {{ number_format($masterplan->nilai) }}</th>
                                            </tr>
                                            <tr>
                                                <th>Mulai Pekerjaan Pada Kontrak</th>
                                                <th>{{ $masterplan->mulai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Selesai Pada Kontrak</th>
                                                <th>{{ $masterplan->selesai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berita Acara Serah Terima</th>
                                                <th>{{ $masterplan->selesai_BAP }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berkas Fisik BAST</th>
                                                <th>{{ $masterplan->bast->status }}</th>
                                            </tr>
                                            <tr>
                                                <th>Dokumen Kontrak</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$masterplan->dokkontrak_mp)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                    <img src="{{asset('storage/'.$masterplan->dokkontrak_mp)}}" style="max-width: 200px">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $masterplan->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $masterplan->updated_at }}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
