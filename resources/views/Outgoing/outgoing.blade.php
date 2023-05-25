@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<div class="content-header">
    <!-- Content Header (Page header) -->
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Data Incoming</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Incoming</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
        <!-- /.content-header -->
    <div class="card">
        <div class="card-header py-3" align="right">
            <a> <strong>From : </strong></a>
            <a href="" class="d-sm-inline-block ">
                <input id="tglawal" type="date" name="tglawal" class="form-control">
            </a>
            <a> <strong>To : </strong></a>
            <a href="" class="d-sm-inline-block ">
                <input id="tglakhir" type="date" name="tgakhir" class="form-control">
            </a>
            <a href="" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                <i class="fas fa-eye fa-xs text-white-50"></i> Show </i>
            </a>
            <a href="{{ route('outgoing.create')}}" class="d-sm-inline-block btn btn-sm bg-gradient-primary shadow-sm">
                <i class="fa fa-plus"></i> Create</i>
            </a>
        </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                                <tr>
                                    <th>Ref.</th>
                                    <th>Supplier</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name="kd_brg[]" class="form-control" type="hidden" value="" readonly></td>
                                    <td><input name="nm_brg[]" class="form-control" type="hidden" value="" readonly></td>
                                    <td><input name="sub_brg[]" class="form-control" type="hidden" value="" readonly></td>
                                    <td><input name="satuan[]" class="form-control" type="hidden" value="" readonly></td>
                                    <td><input name="sub_total[]" class="form-control" type="hidden" value="" readonly></td>
                                    <td align="center">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="#" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                                            <i class="fas fa-eye fa-xs text-white-50"></i>
                                        </a>
                                        <a href="#" class="d-sm-inline-block btn btn-sm bg-gradient-success shadow-sm">
                                            <i class="fas fa-edit fa-xs text-white-50"></i>
                                        </a>
                                        <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data?')" class="d-sm-inline-block btn btn-sm bg-gradient-danger shadow-sm">
                                            <i class="fas fa-trash-alt fa-xs text-white-50"></i>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection




