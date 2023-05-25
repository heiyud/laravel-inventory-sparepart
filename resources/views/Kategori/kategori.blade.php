@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

    <div class="content-header">
        <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Data Kategori Produk</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Tipe</li>
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
                                <th width="2%">#</th>
                                <th width="20%">Kategori</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($kategori as $kat)
                        <tr>
                            <td>{{ $kat->id}}</td>
                            <td>{{ $kat->kategori}}</td>
                            <td align="center">
                                <form action="{{ route('kategori.destroy', $kat->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="#" class="d-sm-inline-block btn btn-sm bg-gradient-info shadow-sm">
                                    <i class="fas fa-eye fa-xs text-white-50"></i>
                                </a>
                                <a href="{{ route('kategori.edit',[$kat->id])}}" class="d-sm-inline-block btn btn-sm bg-gradient-success shadow-sm">
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
                <h5 class="model-tittle" id="exampleModalScrollableTitle">Add Kategori Produk</h5>
                <button  class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">Kode</label>
                        <input type="text" name="add_id" id="add_id"  class="form-control" >
                        <label for="kategori">Kategori</label>
                        <input type="text" name="add_kategori" id="add_kategori" class="form-control"  >
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
