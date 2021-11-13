@extends('layouts.master')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

   
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">No. Dokumen</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 20px;"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
    </div>
            <!-- Page Heading -->
            <p class="mb-4">Buat Nomor dokumen</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                    <h6 class="m-0 font-weight-bold text-primary">Collection</h6>
                    <a href="{{ url('history-add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>User</th>
                                    <th>Nama Paket</th>
                                    <th>Keperluan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>User</th>
                                    <th>Nama Paket</th>
                                    <th>Keperluan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <th>1.</th>
                                    <th>Aan(nama user aktif)</th>
                                    <th>RSUD Mantingan</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>scp-300</th>
                                    <th>Information Technology</th>
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