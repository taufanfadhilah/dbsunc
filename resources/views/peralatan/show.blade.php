@extends('layouts.master')

<head>
    <title>Peralatan</title>
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
                        <h1 class="h3 mb-0 text-gray-800">P E R A L A T A N</h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('peralatan/' . $peralatan->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('peralatan/' . $peralatan->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('peralatan.index') }}"
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
                                                <th>{{ $peralatan->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tangal Pembelian</th>
                                                <th>{{ $peralatan->pembelian }}</th>
                                            </tr>
                                            <tr>
                                                <th>Harga</th>
                                                <th>Rp. {{ number_format($peralatan->harga) }}</th>
                                            </tr>
                                            <tr>
                                                <th>Spesifikasi</th>
                                                <th>{{ $peralatan->desc }}</th>
                                            </tr>
                                            <tr>
                                                <th>Image</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$peralatan->imgalat)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                    <img src="{{asset('storage/'.$peralatan->imgalat)}}" style="max-width: 200px">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $peralatan->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $peralatan->updated_at }}</th>
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
