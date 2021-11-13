@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">L E L A N G</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                        <a href="{{ route('home.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('home/'.$lelang->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>NAMA PAKET</label>
                                <input type="text" name="nama_paket" value="{{ old('nama_paket', $lelang->nama_paket) }}"
                                    class="form-control @error('nama_paket') is-invalid @enderror">
                                @error('nama_paket')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Fase lelang</label>
                                <input type="text" name="status" value="{{ old('status', $lelang->status) }}"
                                    class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>berakhir Tanggal</label>
                                <input type="date" name="tanggal" value="{{ old('tanggal', $lelang->tanggal) }}"
                                    class="form-control @error('tanggal') is-invalid @enderror">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Simpan
                                </button>
                                <button type="Reset" class="btn btn-flat"><i class="fas fa-refresh"></i> Reset</button>
                            </div>
                        </form>
                      
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
