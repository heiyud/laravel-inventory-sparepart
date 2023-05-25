@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<form action="{{ route('rak.update', [$rak->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Edit Data Rak</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('rak.index') }}">Rak</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="id">No. </label>
                                    <input class="form-control" type="text" id="id" name="id" value="{{$rak->id}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="rak_code">Kode Rak</label>
                                    <input id="add_rak_code" type="text" name="add_rak_code" class="form-control" value="{{$rak->rak_code}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="rak_name">Nama Rak </label>
                                    <input id="add_rak_name" type="text" name="add_rak_name" class="form-control" value="{{$rak->rak_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="rak_desc">Deskripsi Rak</label>
                                    <input id="add_rak_desc" type="text" name="add_rak_desc" class="form-control" value="{{$rak->rak_desc}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-header py-3" align="left">
                            <input type="submit" class="btn bg-gradient-primary btn-send" value="Update">
                            <a href="{{ route('rak.index') }}">
                                <input type="button" class="btn bg-gradient-danger btn-send" value="Cancel">
                            </a>
                        </div>
                    </div>
                </div>
    </fieldset>
</form>
@endsection
