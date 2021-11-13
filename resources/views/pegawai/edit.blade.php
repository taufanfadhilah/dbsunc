@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">P E G A W A I &nbsp; / &nbsp; P E N D U K U N G</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                        <a href="{{ route('pegawai.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('pegawai/'.$pegawai->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama', $pegawai->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan/Divisi</label>
                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($role as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('role_id', $pegawai->role_id) == $item->id ? 'selected' : null }}>{{ $item->jabatan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tmpl" value="{{ old('tmpl', $pegawai->tmpl) }}"
                                    class="form-control @error('tmpl') is-invalid @enderror">
                                @error('tmpl')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="lahir" value="{{ old('lahir', $pegawai->lahir) }}"
                                    class="form-control @error('lahir') is-invalid @enderror">
                                @error('lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <input type="text" name="pendidikan" value="{{ old('pendidikan', $pegawai->pendidikan) }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror">
                                @error('pendidikan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tahun Lulus</label>
                                <input type="text" name="tahun" value="{{ old('tahun', $pegawai->tahun) }}"
                                    class="form-control @error('tahun') is-invalid @enderror">
                                @error('tahun')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload KTP</label>
                                <input type="file" name="ktp" value="{{ old('ktp') }}"
                                    class="form-control @error('ktp') is-invalid @enderror">
                                <div>
                                    <a href="{{ asset('storage/' . $pegawai->ktp) }}" target="_blank"> Tampilkan File </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload NPWP</label>
                                <input type="file" name="npwp" value="{{ old('npwp') }}"
                                    class="form-control @error('npwp') is-invalid @enderror">
                                    <div>
                                        <a href="{{ asset('storage/' . $pegawai->npwp) }}" target="_blank"> Tampilkan File </a>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>keahlian</label>
                                <input type="text" name="keahlian" value="{{ old('keahlian', $pegawai->keahlian) }}"
                                    class="form-control @error('keahlian') is-invalid @enderror">
                                @error('keahlian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Upload dokumen Keahlian</label>
                                <input type="file" name="dokkeahlian" value="{{ old('dokkeahlian') }}"
                                    class="form-control @error('dokkeahlian') is-invalid @enderror">
                                    <div>
                                        <a href="{{ asset('storage/' . $pegawai->dokkeahlian) }}" target="_blank"> Tampilkan File </a>
                                    </div>
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
