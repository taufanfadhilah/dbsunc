@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">P E R A L A T A N</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                        <a href="{{ route('peralatan.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('peralatan/'.$peralatan->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('nama', $peralatan->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Tanggal Pembelian</label>
                                <input type="date" name="pembelian" value="{{ old('pembelian' , $peralatan->pembelian) }}"
                                    class="form-control @error('mulai') is-invalid @enderror">
                                @error('pembelian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" value="{{ old('harga', $peralatan->harga) }}"
                                    class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Spesifikasi</label>
                                <textarea name="desc" class="form-control" >{{ $peralatan->desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="imgalat" value="{{$peralatan->imgalat}}"
                                    class="form-control" onchange="loadFile(event)">
                                    <img id="output" src="{{asset('storage/'.$peralatan->imgalat)}}" style="max-width:110px;margin-top:20px;" />
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
