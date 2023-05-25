@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<form action="{{ route('kategori.update', [$kategori->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Edit Data Kategori Produk</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('kategori.index') }}">Kategori</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="id">Id</label>
                                    <input class="form-control" type="text" id="add_id" name="add_id" value="{{$kategori->id}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="kategori">Kategori </label>
                                    <input id="add_kategori" type="text" name="add_kategori" class="form-control" value="{{$kategori->kategori}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-header py-3" align="left">
                            <input type="submit" class="btn bg-gradient-primary btn-send" value="Update">
                            <a href="{{ route('kategori.index') }}">
                                <input type="button" class="btn bg-gradient-danger btn-send" value="Cancel">
                            </a>
                        </div>
                    </div>
                </div>
    </fieldset>
</form>
@endsection
