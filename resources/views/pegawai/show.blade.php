@extends('layouts.master')

<head>
    <title>pegawai/pendukung</title>
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
                        <h1 class="h3 mb-0 text-gray-800">P E G A W A I &nbsp; / &nbsp; P E N D U K U N G</h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('pegawai/' . $pegawai->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('pegawai/' . $pegawai->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('pegawai.index') }}"
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
                                                <th>Nama</th>
                                                <th>{{ $pegawai->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>Jabatan/Divisi</th>
                                                <th>{{ $pegawai->jabatan ? $pegawai->role->jabatan : '-' }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <th>{{ $pegawai->tmpl }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal lahir</th>
                                                <th>{{ $pegawai->lahir }}</th>
                                            </tr>
                                            <tr>
                                                <th>Pendidikan Terkahir</th>
                                                <th>{{ $pegawai->pendidikan }}
                                                <div>Tahun Lulus : {{ $pegawai->tahun }}</div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>KTP</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$pegawai->ktp)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            <tr>
                                                <th>NPWP</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$pegawai->npwp)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>                                            
                                            </tr>
                                            <tr>
                                                <th>Dokumen Ijazah</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$pegawai->ijazah)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>                                            
                                            </tr>
                                            <tr>
                                                <th>keahlian</th>
                                                <th>{{ $pegawai->keahlian }}
                                                <div>
                                                        <a href="{{asset('storage/'.$pegawai->dokkeahlian)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            </tr>
                                                <th>Keterangan</th>
                                                <th>{{ $pegawai->desc }}</th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $pegawai->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $pegawai->updated_at }}</th>
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
