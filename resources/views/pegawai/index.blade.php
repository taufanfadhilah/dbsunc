@extends('layouts.master')

<head>
    <title>PEGAWAI</title>
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
                        <h1 class="h3 mb-0 text-gray-800">P E G A W A I &nbsp; / &nbsp; P E N D U K U N G</h1>
                        <div style="align-content: space-between">
                            <a href="{{route('pegawai.create')}}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jabatan/Divisi</th>
                                        <th>Pendidikan</th>
                                        <th>Keahlian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($pegawai as $items)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $items->nama }}</th>
                                            <th>{{ $items->role ? $items->role->jabatan : '-'  }}</th>
                                            <th>{{ $items->pendidikan }}
                                                <div>
                                                    Lulus tahun {{ $items->tahun }}
                                                </div>
                                            </th>
                                            <th>{{ $items->keahlian }}</th>
                                            <th class="text-center">
                                                <a href="{{ url('pegawai/' . $items->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ url('pegawai/' . $items->id.'/edit') }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form action="{{ url('pegawai/' . $items->id) }}" method="post"
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
