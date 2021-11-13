@extends('layouts.master')

<head>
    <title>Pengalaman - study</title>
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
                        <h1 class="h3 mb-0 text-gray-800">D E T A I L &nbsp; P E R E N C A N A A N</h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('study/' . $study->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('study/' . $study->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('study.index') }}"
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
                                                <th>{{ $study->nomor }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Paket</th>
                                                <th>{{ $study->nama_paket }}</th>
                                            </tr>
                                            <tr>
                                                <th>Bidang Pekerjaan</th>
                                                <th>{{ $study->bidang }}</th>
                                            </tr>
                                            <tr>
                                                <th>Jenis Bangunan</th>
                                                <th>{{ $study->bangunan ? $study->bangunan->bangunan : '-' }}</th>
                                            </tr>
                                            <tr>
                                                <th>Lokasi</th>
                                                <th>{{ $study->lokasi }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nama Pengguna Jasa</th>
                                                <th>{{ $study->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>{{ $study->alamat }}</th>
                                            </tr>
                                            <tr>
                                                <th>Nominal Proyek</th>
                                                <th>Rp. {{ number_format($study->nilai) }}</th>
                                            </tr>
                                            <tr>
                                                <th>Mulai Pekerjaan Pada Kontrak</th>
                                                <th>{{ $study->mulai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Selesai Pada Kontrak</th>
                                                <th>{{ $study->selesai }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berita Acara Serah Terima</th>
                                                <th>{{ $study->selesai_BAP }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berkas Fisik BAST</th>
                                                <th>{{ $study->bast->status }}</th>
                                            </tr>
                                            <tr>
                                                <th>Dokumen Kontrak</th>
                                                <th>
                                                    {{-- <img src="{{asset('file')}}/{{$legal->dokfile}}" style="max-width: 60px">
                                                    <div>
                                                    <a href="{{asset('file')}}/{{$legal->dokfile}}">{{ $legal->dokumen }}</a>
                                                    </div> --}}
                                                    <div>
                                                        <a href="{{asset('storage/'.$study->dokkontrak_pr)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $study->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $study->updated_at }}</th>
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
