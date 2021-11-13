@extends('layouts.master')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">M A S T E R P L A N</h1>

                </div>
                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                        <a href="{{ route('masterplan.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('masterplan/'.$masterplan->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>NAMA PEKERJAAN</label>
                                <input type="text" name="nama_paket" value="{{ old('nama_paket', $masterplan->nama_paket) }}"
                                    class="form-control @error('nama_paket') is-invalid @enderror">
                                @error('nama_paket')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>BIDANG PEKERJAAN</label>
                                <input type="text" name="bidang" value="{{ old('bidang', $masterplan->bidang) }}"
                                    class="form-control @error('bidang') is-invalid @enderror">
                                @error('bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>JENIS/FASILITAS BANGUNAN</label>
                                <select name="bangunan_id" class="form-control @error('bangunan_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($bangunan as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('bangunan_id', $masterplan->bangunan_id) == $item->id ? 'selected' : null }}>
                                            {{ $item->bangunan }}</option>
                                    @endforeach
                                </select>
                                @error('bangunan_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>LOKASI</label>
                                <input type="text" name="lokasi" value="{{ old('lokasi', $masterplan->lokasi) }}"
                                    class="form-control @error('lokasi') is-invalid @enderror">
                                @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <label style="color: blue;">PENGGUNA JASA</label>
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama', $masterplan->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label>ALAMAT/TELP</label>
                                <input type="text" name="alamat" value="{{ old('alamat', $masterplan->alamat) }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <label style="color: blue;">KONTRAK</label>
                            <div class="form-group">
                                <label>NOMOR</label>
                                <small style="color: red;"><br>Untuk masterplan Yang tidak ada Nomor kontrak mohon ditulis
                                    SC/PR/0001 , SC/PR/0002, dst.</small>
                                <input type="text" name="nomor" value="{{ old('nomor', $masterplan->nomor) }}"
                                    class="form-control @error('nomor') is-invalid @enderror">
                                @error('nomor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label>NILAI</label>
                                <small style="color: red;"><br>Tulis nilai tanpa titik</small>
                                <input type="number" name="nilai" value="{{ old('nilai', $masterplan->nilai) }}"
                                    class="form-control @error('nilai') is-invalid @enderror">
                                @error('nilai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL DI MULAI PEKERJAAN PADA KONTRAK</label>
                                <input type="date" name="mulai" value="{{ old('mulai' , $masterplan->mulai) }}"
                                    class="form-control @error('mulai') is-invalid @enderror">
                                @error('mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <label style="color: blue;">TANGGAL SELESAI PADA</label>
                            <div class="form-group">
                                <label>KONTRAK</label>
                                <input type="date" name="selesai" value="{{ old('selesai', $masterplan->selesai) }}"
                                    class="form-control @error('selesai') is-invalid @enderror">
                                @error('selesai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label>BERITA ACARA SERAH TERIMA</label>
                                <input type="date" name="selesai_BAP" value="{{ old('selesai_BAP', $masterplan->selesai_BAP) }}"
                                    class="form-control @error('selesai_BAP') is-invalid @enderror">
                                @error('selesai_BAP')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>BERKAS DOKUMEN BAST</label>
                                <select name="bast_id" class="form-control @error('bast_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($bast as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('bast_id', $masterplan->bast_id) == $item->id ? 'selected' : null }}>{{ $item->status }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('bast_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="dokkontrak_mp" value="{{$masterplan->dokkontrak_mp}}"
                                    class="form-control" onchange="loadFile(event)">
                                    <img id="output" src="{{asset('storage/'.$masterplan->dokkontrak_mp)}}" style="max-width:110px;margin-top:20px;" />
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
