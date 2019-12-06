@extends('master')
@section('title')
    Donor Details
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row-fluid justify-content-center mt-5">
            <h1 class="border-bottom">Donor Details</h1>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <table width="100%" class="table-bordered table-striped table-hover table-light" style="height: 600px;">
                    <tr>
                        <th>Name</th>
                        <td>{{$donor->name}}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{$donor->bloodGroup}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$donor->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$donor->email}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$donor->address}}</td>
                    </tr>
                    <tr>
                        <th>Availability</th>
                        <td>{{$donor->availability}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
