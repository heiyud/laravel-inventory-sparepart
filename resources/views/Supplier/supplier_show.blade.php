@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Detail Data Supplier</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('supplier.index') }}">Supplier</a></li>
                <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="add_supp_code">Supplier Code</label>
                                    <input class="form-control" type="text" id="add_supp_code" name="add_supp_code" value="{{$supplier->supp_code}}" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="supp_name">Supplier Name</label>
                                    <input id="add_supp_name" type="text" name="add_supp_name" class="form-control" value="{{$supplier->supp_name}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="telepon">Phone Number</label>
                                    <input id="add_supp_phone" type="text" name="add_supp_phone" class="form-control" value="{{$supplier->supp_phone}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="person">PIC </label>
                                    <input id="add_supp_person" type="text" name="add_supp_person" class="form-control" value="{{$supplier->supp_person}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="add_supp_address" id="add_supp_address" rows="3" value="{{$supplier->supp_address}}" readonly>{{$supplier->supp_address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="created_at">Created At </label>
                                    <input id="created_at" type="text" name="created_at" class="form-control" value="{{$supplier->created_at}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="updated_at">Updated At </label>
                                    <input id="pdated_at" type="text" name="updated_at" class="form-control" value="{{$supplier->updated_at}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <a href="{{ route('supplier.index') }}">
                                <input type="button" class="btn bg-gradient-danger btn-send" value="   Back   ">
                            </a>
                        </div>
                    </div>
                </div>
@endsection
