@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">T E N A G A &nbsp; A H L I</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                        <a href="{{ route('tenaga_ahli.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('tenaga_ahli/'.$tenaga_ahli->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama', $tenaga_ahli->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" value="{{ old('nik', $tenaga_ahli->nik) }}"
                                    class="form-control @error('nik') is-invalid @enderror">
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TEMPAT LAHIR</label>
                                <input type="text" name="tmptl" value="{{ old('tmpt;', $tenaga_ahli->tmptl) }}"
                                    class="form-control @error('tmptl') is-invalid @enderror">
                                @error('tmptl')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TANGGAL LAHIR</label>
                                <input type="date" name="lahir" value="{{ old('lahir', $tenaga_ahli->lahir) }}"
                                    class="form-control @error('lahir') is-invalid @enderror">
                                @error('lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" value="{{ old('alamat', $tenaga_ahli->alamat) }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload KTP</label>
                                <input type="file" name="ktp" value="{{ old('ktp', $tenaga_ahli->ktp) }}"
                                    class="form-control @error('ktp') is-invalid @enderror">
                                <div>
                                    <a href="{{ asset('storage/' . $tenaga_ahli->ktp) }}" target="_blank"> Tampilkan File </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload NPWP</label>
                                <input type="file" name="npwp" value="{{ old('npwp') }}"
                                    class="form-control @error('npwp') is-invalid @enderror">
                                    <div>
                                        <a href="{{ asset('storage/' . $tenaga_ahli->npwp) }}" target="_blank"> Tampilkan File </a>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <small style="color: blue;"><br>Contoh: Sarjana Teknik Arsitektur, Magister Teknik Lingkungan, dsb</small>
                                <input type="text" name="pendidikan" value="{{ old('pendidikan', $tenaga_ahli->pendidikan) }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror">
                                @error('pendidikan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>LULUS LAHIR</label>
                                <input type="date" name="lulus" value="{{ old('lulus', $tenaga_ahli->lulus) }}"
                                    class="form-control @error('lulus') is-invalid @enderror">
                                @error('lulus')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload Ijazah</label>
                                <input type="file" name="ijazah" value="{{ old('ijazah') }}"
                                    class="form-control @error('ijazah') is-invalid @enderror">
                                    <div>
                                        <a href="{{ asset('storage/' . $tenaga_ahli->ijazah) }}" target="_blank"> Tampilkan File </a>
                                    </div>
                            </div>
                            {{-
                            <div class="form-group">
                                <label>Sertifikat Tenaga Ahli</label>
                                <select name="ska_id" class="form-control @error('ska_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($ska as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('ska_id', $tenaga_ahli->ska_id) == $item->id ? 'selected' : null }}>{{ $item->ska }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ska_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload SKA</label>
                                <input type="file" name="legalska" value="{{ old('legalska') }}"
                                    class="form-control @error('legalska') is-invalid @enderror">
                                    <div>
                                        <a href="{{ asset('storage/' . $tenaga_ahli->legalska) }}" target="_blank"> Tampilkan File </a>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Masa Berlaku SKA</label>
                                <input type="date" name="berlaku" value="{{ old('berlaku', $tenaga_ahli->berlaku) }}"
                                    class="form-control @error('berlaku') is-invalid @enderror">
                                @error('berlaku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            -}}
                            <div class="form-group">
                                <label>Status Pegawai Suncons</label>
                                <select name="status_id" class="form-control @error('status_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($status as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('status_id', $tenaga_ahli->status_id) == $item->id ? 'selected' : null }}>{{ $item->status }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('status_id')
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
