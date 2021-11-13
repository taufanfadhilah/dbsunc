@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Perencanaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_perencanaan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center" style="margin-top: 10px">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary"><a href="{{route('perencanaan.index')}}">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengawasan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_pengawasan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center" style="margin-top: 10px">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning"><a href="{{route('pengawasan.index')}}">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Masterplan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_masterplan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center" style="margin-top: 10px;">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning"><a href="{{route('masterplan.index')}}">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Study</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_study }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center" style="margin-top: 10px;">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning"><a href="{{route('study.index')}}">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{--
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">SKA Tenaga Ahli</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_tenaga_ahli }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center" style="margin-top: 10px;">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning"><a href="{{route('tenaga_ahli.index')}}">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">lelang Process</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $count_lelang }}</div>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-flag fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" >
            <!-- Content Row -->
            <div class="row" style="margin-left: 0.1px; margin-right:0.1px; width:120%">
                <!-- Content Column -->
                <div class="col">

                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">L E L A N G</h1>
                            <div style="align-content: space-between">
                                <a href="{{ route('home.create') }}"
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
                                            <th>Nama Paket</th>
                                            <th>Fase</th>
                                            <th>Berakhir</th>
                                            <!-- <th>Action</th> -->
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($lelang as $items)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <th>{{ $items->nama_paket }}</th>
                                                <th>{{ $items->fase ? $items->fase->fase : '-'  }}</th>
                                                <th>{{ $items->tanggal }}</th>


                                                <!-- <th class="text-center">
                                                    <a href="{{ url('home/' . $items->id.'/edit') }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ url('home/' . $items->id) }}" method="post"
                                                        class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </th> -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4" style="max-width: 100%">
                        <div class="card-header py-3">
                            <h3 class="h3 mb-0 text-gray-800">P A N D U A N &nbsp; A P L I K A S I</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                Klik Link di bawah ini untuk melihat panduan aplikasi pada website dan database Suncons
                            </div>
                            <div style="margin-top: 10px">
                                <a href="#">1. Dokumentasi upload data untuk konten pengalaman website company profile Suncon</a>
                            </div>
                            
                            <div style="margin-top: 20px">
                                <a href="#">2. Dokumentasi upload data untuk update data pada database suncons</a>
                            </div>   
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
