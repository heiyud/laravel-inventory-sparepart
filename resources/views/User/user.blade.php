@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<div class="content-header">
    <!-- Content Header (Page header) -->
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Data Pengguna</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">User</li>
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
                        <thead>
                                <tr align="center">
                                    <th width="5%">User Id</th>
                                    <th width="25%">Nama</th>
                                    <th width="20%">Email</th>
                                    <th width="15%">Roles/Akses</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    @foreach ($row->roles as $r)
                                    <td>
                                        {{$r->id}}
                                    </td>
                                    @endforeach
                                    <td align="center">
                                        <form action="{{ route('user.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('user.show',[$row->id])}}" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                                            <i class="fas fa-eye fa-xs text-white-50"></i>
                                        </a>
                                        <a href="{{ route('user.edit',[$row->id])}}" class="d-sm-inline-block btn btn-sm bg-gradient-success shadow-sm">
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
</div>
<!-- modal add data -->
<div class="modal fade shadow" id="modal-add" tabindex="_1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-blue">
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Tambah Data Pengguna</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group"><label class="col-ld-20 control-label">Nama User</label>
                    <div class="col-lg-12"><input type="text" id="username" name="username" required class="form-control"></div>
                    <div class="form-group"><label class="col-lg-20 control-label">Email User</label>
                        <div class="col-lg-12"><input type="text" id="email" name="email" required class="form-control"></div>
                        <div class="form-group"><label class="col-lg-20 control-label">Roles/Akses</label>
                            <select id="roles" name="roles" class="form-control" required>
                                <option value="">--Pilih Roles--</option>
                                <option value="ADMIN">Admin</option>
                                <option value="USER">User</option>
                            </select>
                        </div>
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

@endsection


