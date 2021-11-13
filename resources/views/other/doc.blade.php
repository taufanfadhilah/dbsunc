@extends('layouts.master')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

   
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Document</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        
    </div>
            <!-- Page Heading -->
            <p class="mb-4">No Doc.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                    <h6 class="m-0 font-weight-bold text-primary">Collection</h6>
                    <a href="{{ url('mahameru-masterplan-add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Nama Paket</th>
                                    <th rowspan="2">Bidang Pekerjaan</th>
                                    <th rowspan="2">Jenis bangunan</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th colspan="2">Pengguna Jasa</th>
                                    <th colspan="2">Kontrak</th>
                                    <th rowspan="2">Tanggal Mulai <p style="color: red; font-size: 12px;">(Tahun / Bulan / Hari)</p>
                                    </th>
                                    <th colspan="2">Tanggal Selesai</th>
                                    <th rowspan="2">Berita Acara Serah Terima</th>
                                    <th rowspan="2">Tanggal Input</th>
                                    <th rowspan="2">Terakhir Update</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat/Telp</th>
                                    <th>Nomor/Tanggal</th>
                                    <th>Nilai</th>
                                    <th>Kontrak <p style="color: red; font-size: 12px;">(Tahun / Bulan / hari)</p>
                                    </th>
                                    </th>
                                    <th>BAP Laporan Akhir <p style="color: red; font-size: 12px;">(Tahun / Bulan / Hari)</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1.</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>

                            </tbody>
                        </table>
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

</div>

@endsection