@extends('layouts.dashboard')
@section('content')

<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Reports </h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Report</li>
            </ol>
        </div>
    </div>
    <div class="card">
            <div class="card-body">
                    <form action="/laporan/cetak" method="PUT" target="_blank">
                        @csrf
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h3 class="m-0">Incoming Report</h3></br>
                                </div>
                                <div class="col-md-4">
                                    <label for="klasifikasi">Periode </label>
                                    <input id="jenis" type="hidden" name="jenis" value="bukubesar" class="form-control">
                                        <select id="periode" name="periode"class="form-control">
                                            <option value="">--Select Periode--</option>
                                            <option value="All">All Periode</option>
                                            <option value="periode">Per Periode</option>
                                        </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp"> Beginning</label>
                                    <input id="tglawal" type="date" name="tglawal" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp">Ending</label>
                                    <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btnsend" value="Print" >
                            </div>
                        </fieldset>
                    </form>
                </div>
    </div>
    <div class="card">
                <div class="card-body">
                    <form action="/laporan/cetak" method="PUT" target="_blank">
                        @csrf
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h3 class="m-0">Outgoing Report</h3></br>
                                </div>
                                <div class="col-md-4">
                                    <label for="klasifikasi">Periode </label>
                                    <input id="jenis" type="hidden" name="jenis" value="bukubesar" class="form-control">
                                        <select id="periode" name="periode"class="form-control">
                                            <option value="">--Select Periode--</option>
                                            <option value="All">All Periode</option>
                                            <option value="periode">Per Periode</option>
                                        </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp"> Beginning</label>
                                    <input id="tglawal" type="date" name="tglawal" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp">Ending</label>
                                    <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btnsend" value="Print" >
                            </div>
                        </fieldset>
                    </form>
                </div>
    </div>
    <div class="card">
                <div class="card-body">
                    <form action="/laporan/cetak" method="PUT" target="_blank">
                        @csrf
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h3 class="m-0">Summary Report</h3></br>
                                </div>
                                <div class="col-md-4">
                                    <label for="klasifikasi">Periode </label>
                                    <input id="jenis" type="hidden" name="jenis" value="bukubesar" class="form-control">
                                        <select id="periode" name="periode"class="form-control">
                                            <option value="">--Select Periode--</option>
                                            <option value="All">All Periode</option>
                                            <option value="periode">Per Periode</option>
                                        </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp"> Beginning</label>
                                    <input id="tglawal" type="date" name="tglawal" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="no_hp">Ending</label>
                                    <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btnsend" value="Print" >
                            </div>
                        </fieldset>
                    </form>
                </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
