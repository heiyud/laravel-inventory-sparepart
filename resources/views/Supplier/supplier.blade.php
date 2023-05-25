@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

    <div class="content-header">
        <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Data Supplier</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Supplier</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
            <!-- /.content-header -->
        <div class="card">
            <div class="card-header py-3" align="right">
                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-import"><i class="fas fa-file-excel"></i> Import </button>
                <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> Add </button>
            </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">Code</>
                                <th width="15%">Supplier</th>
                                <th width="35%">Address</th>
                                <th width="15%">Phone Number</th>
                                <th width="15%">PIC</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($supplier as $supp)
                        <tr>
                            <td>{{ $supp->supp_code}}</td>
                            <td>{{ $supp->supp_name}}</td>
                            <td>{{ $supp->supp_address}}</td>
                            <td>{{ $supp->supp_phone}}</td>
                            <td>{{ $supp->supp_person}}</td>
                            <td align="center">
                                <form action="{{ route('supplier.destroy', $supp->supp_code) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{ route('supplier.show',[$supp->supp_code])}}" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                                    <i class="fas fa-eye fa-xs text-white-50"></i>
                                </a>
                                <a href="{{ route('supplier.edit',[$supp->supp_code])}}" class="d-sm-inline-block btn btn-sm bg-gradient-success shadow-sm">
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
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Add Supplier</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControllInput1">Supplier Code</label>
                        <input type="text" name="add_supp_code" id="add_supp_code" class="form-control" >
                        <label for="exampleFormControllInput1">Supplier Name</label>
                        <input type="text" name="add_supp_name" id="add_supp_name"  class="form-control" >
                        <label for="exampleFormControllInput1">Address</label>
                        <textarea class="form-control" name="add_supp_address" id="add_supp_address" rows="3" ></textarea>
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="text" name="add_supp_phone" id="add_supp_phone" class="form-control"  >
                        <label for="exampleFormControlInput1">PIC Supplier</label>
                        <input type="text" name="add_supp_person" id="add_supp_person" class="form-control" >
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
<!-- Modal Import Data-->
<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Import Data</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supplier.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="custom-file">
                            <label>Pilih File</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel</button>
                    <button type="submit" class="btn btn-success"> Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
