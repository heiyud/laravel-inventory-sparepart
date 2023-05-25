@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

    <div class="content-header">
        <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Data Produk</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
            <!-- /.content-header -->
        <div class="card">
            <div class="card-header py-3" align="right">
                <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> Add </button>
            </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Part <br>Code</th>
                                <th>Part<br> Name</th>
                                <th>Tipe</th>
                                <th>Kategori</th>
                                <th>Berat <br>[Gram] </th>
                                <th>Warna </th>
                                <th>Rak</th>
                                <th>Price</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                        @foreach($produk as $pro)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $pro->part_code}}</td>
                            <td>{{ $pro->part_name}}</td>
                            <td>{{ $pro->tipe_code}}</td>
                            <td>{{ $pro->kategori}}</td>
                            <td>{{ $pro->berat}}</td>
                            <td>{{ $pro->warna}}</td>
                            <td>{{ $pro->rak_code}}</td>
                            <td>{{ $pro->harga}}</td>
                            <td>{{ $pro->stok}}</td>
                            <td align="center">
                                <form action="{{ route('produk.destroy', $pro->part_code) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{ route('produk.show',[$pro->part_code])}}" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                                    <i class="fas fa-eye fa-xs text-white-50"></i>
                                </a>
                                <a href="{{ route('produk.edit',[$pro->part_code])}}" class="d-sm-inline-block btn btn-sm bg-gradient-success shadow-sm">
                                    <i class="fas fa-edit fa-xs text-white-50"></i>
                                </a>
                                <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data?')" class="d-sm-inline-block btn btn-sm bg-gradient-danger shadow-sm">
                                    <i class="fas fa-trash-alt fa-xs text-white-50"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- modal add data -->
<div class="modal fade shadow" id="modal-add" tabindex="_1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-blue">
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Add Produk</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('produk.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="part_code">Part Code</label>
                            <input type="text" name="add_part_code" id="add_part_code"  class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="part_name">Part Name</label>
                            <input type="text" name="add_part_name" id="add_part_name"  class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="tipe_code">Tipe Motor</label>
                            <select name="add_tipe_code" id="add_tipe_code" class="form-control" required width="100%">
                                <option value="">--Select--</option>
                                    @foreach ($tipe as $tp)
                                        <option value="{{ $tp->tipe_code}}">{{ $tp->tipe_name }} {{ $tp->tipe_fitur }} {{ $tp->tipe_cc }} [{{ $tp->th_rilis }}] </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="berat">Berat</label>
                            <input type="text" name="add_berat" id="add_berat"  class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="warna">Warna</label>
                            <input type="text" name="add_warna" id="add_warna"  class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="kategori">Kategori</label>
                            <select name="add_kategori" id="add_kategori" class="form-control" required width="100%">
                                <option value="">--Select--</option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->kategori}}">{{ $kat->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="add_harga">Harga</label>
                            <input type="text" name="add_harga" id="add_harga" class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="stok">Stok</label>
                            <input type="text" name="add_stok" id="add_stok"  class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="rak_code">Rak</label>
                            <select name="add_rak_code" id="add_rak_code" class="form-control" required width="100%">
                                <option value="">--Select--</option>
                                    @foreach ($rak as $rk)
                                        <option value="{{ $rk->rak_code}}">{{ $rk->rak_name }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="part_img">Gambar Produk </label>
                            <input type="file" name="add_part_img" id="add_part_img"  class="form-control" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
                        <input type="submit" class="btn btn-primary btn-send" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
