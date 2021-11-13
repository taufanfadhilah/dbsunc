@extends('layouts.master')

<head>
    <title>Pengalaman - tenaga_ahli</title>
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
                        <h1 class="h3 mb-0 text-gray-800">D E T A I L &nbsp; D O K U M E N</h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('legal/' . $legal->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('legal/' . $legal->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('legal.index') }}"
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
                                                <th>Dokumen</th>
                                                <th>{{ $legal->dokumen }}</th>
                                            </tr>
                                            <tr>
                                                <th>Berlaku Mulai</th>
                                                <th>{{ $legal->berlaku }}</th>
                                            </tr>
                                            <tr>
                                                <th>Habis Pada</th>
                                                <th>{{ $legal->habis }}</th>
                                            </tr>
                                            <tr>
                                                <th>Instansi Pemberi</th>
                                                <th>{{ $legal->instansi }}</th>
                                            </tr>
                                            <tr>
                                                <th>Dokumen Legal</th>
                                                <th>
                                                    {{-- <img src="{{asset('file')}}/{{$legal->dokfile}}" style="max-width: 60px">
                                                    <div>
                                                    <a href="{{asset('file')}}/{{$legal->dokfile}}">{{ $legal->dokumen }}</a>
                                                    </div> --}}
                                                    <div>
                                                        <a href="{{asset('storage/'.$legal->dokfile)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <th>{{ $legal->desc }}</th>
                                            </tr>
                                            
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $legal->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $legal->updated_at }}</th>
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
