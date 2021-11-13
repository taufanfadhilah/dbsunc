@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">L E G A L &nbsp; D O K U M E N</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA</h6>
                        <a href="{{ route('legal.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('legal') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Dokumen</label>
                                <input type="text" name="dokumen" value="{{ old('dokumen') }}"
                                    class="form-control @error('dokumen') is-invalid @enderror">
                                @error('dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berlaku Mulai</label>
                                <input type="date" name="berlaku" value="{{ old('berlaku') }}"
                                    class="form-control @error('berlaku') is-invalid @enderror">
                                @error('berlaku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Habis Pada</label>
                                <input type="date" name="habis" value="{{ old('habis') }}"
                                    class="form-control @error('habis') is-invalid @enderror">
                                @error('habis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Instansi Pemberi</label>
                                <input type="text" name="instansi" value="{{ old('instansi') }}"
                                    class="form-control @error('instansi') is-invalid @enderror">
                                @error('instansi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="dokfile" value="{{ old('dokfile') }}"
                                    class="form-control @error('dokfile') is-invalid @enderror" onchange="loadFile(event)">
                                    <img id="output" style="max-width:110px;margin-top:20px;" />
                                @error('dokfile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="desc" class="form-control"></textarea>
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

