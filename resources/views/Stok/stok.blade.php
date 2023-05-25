@extends('layouts.dashboard')
@section('content')
@include('sweetalert::alert')

<div class="content-header">
    <div class="card">
        <div class="card-body">
            <div class="card-header py-3" align="center">
                <h2><strong>ENDING STOCK OF INVENTORY</strong></h2>
            </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr align="center">
                        <th>Code</th>
                        <th>Items</th>
                        <th>Sub Items</th>
                        <th>Unit</th>
                        <th>Amount (Rp) </th>
                        <th>Beginning Stok</th>
                        <th>Purchase</th>
                        <th>Return</th>
                        <th>Ending Stock</th>
                        <th>Total (Rp)  </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"></td>
                    </tr>
                </tbody>
                <thead class="thead-primary">
                    <tr align="center">
                        <th colspan="9"><h5><strong>G R A N D &emsp; T O T A L</strong></h5></th>
                        <th ><h5><strong>Rp </strong></h5></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>
</div>
@endsection
