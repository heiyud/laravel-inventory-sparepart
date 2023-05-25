@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<div class="content-header">
        <!-- Content Header (Page header) -->
<div class="row mb-2">
    <div class="col-sm-6">
        <h2 class="m-0">Detail Data Produk</h2>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('produk.index') }}">Produk</a></li>
        <li class="breadcrumb-item active">Detail</li>
        </ol>
    </div>
</div>
<!-- Default box -->
<div class="card card-solid">
<div class="card-body">
    <div class="row">
    <div class="col-12 col-sm-4">
        <div class="col-12">
            <table id="example" class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Gambar Produk</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img class="card-img-top" src="{{ asset('img/'. $produk->part_img) }}" class="product-image" alt="Product Image" height="290px" width="300px"></div>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    <div class="col-12 col-sm-8">
    <div class="row">
    <table id="example" class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Deskrpisi </th>
                <th>Detail </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Part Code</td>
            <td>{{$produk->part_code}}</td>
        </tr>
        <tr>
            <td>Part Name</td>
            <td>{{$produk->part_name}}</td>
        </tr>
        <tr>
            <td>Tipe</td>
            <td>{{$produk->part_code}}</td>
        </tr>
        <tr>
            <td>Berat</td>
            <td>{{$produk->berat}}</td>
        </tr>
        <tr>
            <td>Warna</td>
            <td>{{$produk->warna}}</td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>{{$produk->part_code}}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>{{$produk->harga}}</td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>{{$produk->stok}}</td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td>{{$produk->part_code}}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{$produk->created_at}}</td>
        </tr>
        <tr>
            <td>Updated at</td>
            <td>{{$produk->updated_at}}</td>
        </tr>
    </table>
    </div>
    </div>
</div>
</div>
@endsection
