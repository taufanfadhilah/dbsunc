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
                        <h1 class="h3 mb-0 text-gray-800">D E T A I L &nbsp; P E R E N C A N A A N</h1>
                        <div style="align-content: space-between">
                            <form action="{{ url('tenaga_ahli/' . $tenaga_ahli->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="d-none d-sm-inline-block btn btn-danger shadow-sm">
                                    <i class="fa fa-trash">Delete</i>
                                </button>
                            </form>
                            <a href="{{ url('tenaga_ahli/' . $tenaga_ahli->id . '/edit') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-pen fa-sm text-white-50"></i> Update</a>
                            <a href="{{ route('tenaga_ahli.index') }}"
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
                                                <th>{{ $tenaga_ahli->nama }}</th>
                                            </tr>
                                            <tr>
                                                <th>NIK</th>
                                                <th>{{ $tenaga_ahli->nik }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <th>{{ $tenaga_ahli->tmptl }}</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <th>{{ $tenaga_ahli->Lahir }}</th>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>{{ $tenaga_ahli->Alamat }}</th>
                                            </tr>
                                            <tr>
                                                <th>KTP</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$tenaga_ahli->ktp)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            <tr>
                                                <th>NPWP</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$tenaga_ahli->npwp)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>                                            
                                            </tr>
                                            <tr>
                                                <th>Pendidikan Terakhir</th>
                                                <th>{{ $tenaga_ahli->pendidikan }}
                                                    <div>Lulus: {{ $items->lulus }}</div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Dokumen Ijazah</th>
                                                <th>
                                                    <div>
                                                        <a href="{{asset('storage/'.$tenaga_ahli->ijazah)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>                                            
                                            </tr>
                                            
                                            <!-- <tr>
                                                <th>Sertifikat Tenaga Ahli 1</th>
                                                <th>{{ $tenaga_ahli->ska ? $tenaga_ahli->ska->ska : '-' }}
                                                    <div>Berlaku Sampai : {{ $tenaga_ahli->berlaku }}</div>
                                                    <div>
                                                        <a href="{{asset('storage/'.$tenaga_ahli->legalska)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Sertifikat Tenaga Ahli 2</th>
                                                <th>{{ $tenaga_ahli->ska ? $tenaga_ahli->ska->ska : '-' }}
                                                    <div>Berlaku Sampai : {{ $tenaga_ahli->berlaku }}</div>
                                                    <div>
                                                        <a href="{{asset('storage/'.$tenaga_ahli->legalska)}}" target="_blank"> Tampilkan File </a>
                                                    </div>
                                                </th>                                         
                                            </tr>  -->
                                            <tr>
                                                <th>Status Kepegawaian Suncons</th>
                                                <th>{{ $tenaga_ahli->status ? $tenaga_ahli->status->status : '-' }}</th>
                                            </tr>
                                            <tr>
                                                <th>Created at</th>
                                                <th>{{ $tenaga_ahli->created_at }}</th>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <th>{{ $tenaga_ahli->updated_at }}</th>
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
