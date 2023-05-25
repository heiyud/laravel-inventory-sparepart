@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<form action="{{ route('produk.update', [$produk->part_code])}}" method="POST"  enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Edit Data Produk</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('produk.index') }}">Produk</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
        <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="col-12">
                <label for="part_img" >Gambar Produk</label>
                <img class="card-img-top" src="{{ asset('img/'. $produk->part_img) }}" class="product-image" alt="Product Image" height="290px" width="300px">            </div>
            </div>
            <div class="col-12 col-sm-8">
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="part_code">Part Code</label>
                        <input type="text" name="add_part_code" id="add_part_code"  class="form-control" value="{{$produk->part_code}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="part_name">Part Name</label>
                        <input type="text" name="add_part_name" id="add_part_name"  class="form-control" value="{{$produk->part_name}}">
                    </div>
                    <div class="col-md-4">
                        <label for="tipe_code">Tipe Motor</label>
                        <select name="add_tipe_code" id="add_tipe_code" class="form-control" required width="100%">
                            <option value="{{$produk->tipe_code}}">{{$produk->tipe_code}}</option>
                                @foreach ($tipe as $tp)
                                    <option value="{{ $tp->tipe_code}}">{{ $tp->tipe_name }} {{ $tp->tipe_fitur }} {{ $tp->tipe_cc }} [{{ $tp->th_rilis }}] </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="berat">Berat</label>
                        <input type="text" name="add_berat" id="add_berat"  class="form-control" value="{{$produk->berat}}">
                    </div>
                    <div class="col-md-4">
                        <label for="warna">Warna</label>
                        <input type="text" name="add_warna" id="add_warna"  class="form-control" value="{{$produk->warna}}" >
                    </div>
                    <div class="col-md-4">
                        <label for="kategori">Kategori</label>
                        <select name="add_kategori" id="add_kategori" class="form-control" required width="100%">
                            <option value="{{$produk->kategori}}">{{$produk->kategori}}</option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->kategori}}">{{ $kat->kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="add_harga">Harga</label>
                        <input type="text" name="add_harga" id="add_harga" class="form-control" value="{{$produk->harga}}">
                    </div>
                    <div class="col-md-4">
                        <label for="stok">Stok</label>
                        <input type="text" name="add_stok" id="add_stok"  class="form-control" value="{{$produk->stok}}">
                    </div>
                    <div class="col-md-4">
                        <label for="rak_code">Rak</label>
                        <select name="add_rak_code" id="add_rak_code" class="form-control" required width="100%">
                            <option value="{{$produk->rak_code}}">{{$produk->rak_code}}</option>
                                @foreach ($rak as $rk)
                                    <option value="{{ $rk->rak_code}}">{{ $rk->rak_code}} [{{ $rk->rak_name }}]</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="created_at">Created At </label>
                        <input id="created_at" type="text" name="created_at" class="form-control" value="{{$produk->created_at}}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="updated_at">Updated At </label>
                        <input id="pdated_at" type="text" name="updated_at" class="form-control" value="{{$produk->updated_at}}" readonly>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-header py-3" align="left">
            <input type="submit" class="btn bg-gradient-primary btn-send" value="Update">
            <a href="{{ route('produk.index') }}">
            <input type="button" class="btn bg-gradient-danger btn-send" value="Cancel">
            </a>
        </div>
    </fieldset>
</form>
@endsection
