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
                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h1 class="h3 mb-0 text-gray-800">D E T A I L &nbsp; P E N G A W A S A N </h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('pengawasan/' . $pengawasan->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('pengawasan/' . $pengawasan->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('pengawasan.index') }}"
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
                                                <th>{{ $pengawasan->nomor }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Paket</th>
                                                <th>{{ $pengawasan->nama_paket }}</th>
                                            </tr>
                                            <tr>
                                                <th>Bidang Pekerjaan</th>
                                                <th>{{ $pengawasan->bidang }}</th>
                                            </tr>
                                            <tr>
                                                <th>Jenis Bangunan</th>
                                                <th>{{ $pengawasan->bangunan ? $pengawasan->bangunan->bangunan : '-' }}</th>
                                            </tr>
                                            <tr>
                                                <th>Lokasi</th>
                                                <th>{{ $pengawasan->lokasi }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Pengguna Jasa</th>
                                                <th>{{ $pengawasan->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>{{ $pengawasan->alamat }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nominal Proyek</th>
                                                <th>Rp. {{ number_format($pengawasan->nilai) }}</th>
                                            </tr>
                                            <tr>
                                                <th>Mulai Pekerjaan Pada Kontrak</th>
                                                <th>{{ $pengawasan->mulai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Selesai Pada Kontrak</th>
                                                <th>{{ $pengawasan->selesai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berita Acara Serah Terima</th>
                                                <th>{{ $pengawasan->selesai_BAP }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berkas Fisik BAST</th>
                                                <th>{{ $pengawasan->bast->status }}</th>
                                            </tr>
                                            <tr>
                                                <th>Dokumen Kontrak</th>
                                                <th>
                                                    {{-- <img src="{{asset('file')}}/{{$legal->dokfile}}" style="max-width: 60px">
                                                    <div>
                                                    <a href="{{asset('file')}}/{{$legal->dokfile}}">{{ $legal->dokumen }}</a>
                                                    </div> --}}
                                                    <div>
                                                        <a href="{{asset('storage/'.$pengawasan->dokkontrak_pw)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                    <img src="{{asset('storage/'.$pengawasan->dokkontrak_pw)}}" style="max-width: 200px">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $pengawasan->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $pengawasan->updated_at }}</th>
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
