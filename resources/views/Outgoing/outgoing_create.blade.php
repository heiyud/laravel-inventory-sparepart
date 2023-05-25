@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<div class="content-header">
    <!-- Content Header (Page header) -->
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Create Outgoing Item</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="/incoming">Incoming</a></li>
            <li class="breadcrumb-item active">Create</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
        <!-- /.content-header -->
    <div class="card">
        <div class="card-header py-3" align="right">
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-import"><i class="fas fa-file-excel"></i> Import </button>
            <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> Add </button>
        </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-striped" id="example2"  width="80%" cellspacing="0">
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
                                <tr>
                                    <td colspan="3" align="center">
                                        <input name="total" class="form-control" type="hidden" value=""><h5><strong>TOTAL</strong></h5></a>
                                    </td>
                                    <td>
                                        <input name="total" class="form-control" type="hidden" value=""><h5><strong></strong></h5></a>
                                    </td>
                                    <td>
                                        <input name="total" class="form-control" type="hidden" value=""><h5><strong></strong></h5></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="/incoming">
                        <input type="button" class="btn btn-danger btn-send" value="Cancel">
                    </a>
                    <input type="submit" class="btn btn-primary btn-send" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- modal add data -->
<div class="modal fade shadow" id="modal-add" tabindex="_1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-blue">
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Add Item</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControllInput1">Ref.</label>
                        <input type="text" name="ref" id="ref" class="form-control" >
                        <label for="exampleFormControllInput1">Supplier </label>
                        <select name="supp" id="supp select2" class="form-control" required width="100%">
                            <option value="">--Select--</option>
                        </select>
                        <label for="exampleFormControllInput1">Item</label>
                        <input type="text" class="form-control" name="item" id="item" rows="3" ></input>
                        <label for="exampleFormControlInput1">Quantity</label>
                        <input type="number" min="1" name="qty" id="addnmbrg" class="form-control" id="exampleFormControlInput1">
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
            <form action="" method="POST" enctype="multipart/form-data">
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




