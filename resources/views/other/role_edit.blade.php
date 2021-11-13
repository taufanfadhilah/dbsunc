@extends('layouts.master')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">


    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">J A B A T A N &nbsp; P E G A W A I</h1>

            </div>
            <!-- Page Heading -->
            

            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-1">
                    <h6 class="m-0 font-weight-bold text-primary">EDIT DATA</h6>
                    <a href="{{route('role.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
                </div>
                
                <div class="card-body">
                    <form action="{{route('role.update', $role->id)}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan"  class="form-control" value="{{ $role->jabatan }}" autofocus required>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-success btn-flat">
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
