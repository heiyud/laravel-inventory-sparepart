@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<form action="{{ route('user.update', [$user->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <div class="content-header">
                <!-- Content Header (Page header) -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Edit Access User</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">User</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
                    <div class="card">
                        <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="kode">Kode User</label>
                                        <input class="form-control" type="text" name="kode" value="{{$user->id}}" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="name">Nama User</label>
                                        <input id="name" type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" name="email" class="form-control" value="{{$user->email}}" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        @foreach ($user ->roles as $role)
                                        <label for="akses">Access</label>
                                        <input id="akses" type="text" name="akses" class="form-control" value="{{$role->id}}" readonly>
                                        @endforeach
                                    </div>
                                    <div class="form-group"><label class="col-lg-20 control-label">Roles/Akses</label>
                                        <select id="roles" name="role" class="form-control" required>
                                            <option value="">--Pilih Roles--</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="USER">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3" align="left">
                                <input type="submit" class="btn bg-gradient-primary btn-send" value="Update">
                                <a href="{{ route('user.index') }}">
                                    <input type="button" class="btn bg-gradient-danger btn-send" value="Cancel">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
@endsection
