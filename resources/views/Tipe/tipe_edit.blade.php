@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<form action="{{ route('tipe.update', [$tipe->tipe_code])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Edit Data Tipe Produk</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('tipe.index') }}">Tipe</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="tipe_code">Kode </label>
                                    <input class="form-control" type="text" id="add_tipe_code" name="add_tipe_code" value="{{$tipe->tipe_code}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="tipe_name">Tipe Name </label>
                                    <input id="add_tipe_name" type="text" name="add_tipe_name" class="form-control" value="{{$tipe->tipe_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="tipe_fitur">Nama tipe </label>
                                    <input id="add_tipe_fitur" type="text" name="add_tipe_fitur" class="form-control" value="{{$tipe->tipe_fitur}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="tipe_cc">Kapasitas CC</label>
                                    <input id="add_tipe_cc" type="text" name="add_tipe_cc" class="form-control" value="{{$tipe->tipe_cc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="th_rilis">Tahun</label>
                                    <input id="add_th_rilis" type="text" name="add_th_rilis" class="form-control" value="{{$tipe->th_rilis}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-header py-3" align="left">
                            <input type="submit" class="btn bg-gradient-primary btn-send" value="Update">
                            <a href="{{ route('tipe.index') }}">
                                <input type="button" class="btn bg-gradient-danger btn-send" value="Cancel">
                            </a>
                        </div>
                    </div>
                </div>
    </fieldset>
</form>
@endsection
