@extends('master')
@section('title')
    Post Details
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <h1 class="border-bottom">Post Details</h1>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <table width="100%" class="table-bordered table-striped table-hover table-light" style="height: 600px;">
                    <tr>
                        <th>Title</th>
                        <td>{{$post->title}}</td>
                    </tr>
                    <tr>
                        <th>Patient Name</th>
                        <td>{{$post->patientName}}</td>
                    </tr>
                    <tr>
                        <th>Patient Age</th>
                        <td>{{$post->patientAge}}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{$post->bloodGroup}}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{$post->date}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$post->address}}</td>
                    </tr>
                    <tr>
                        <th>Blood Unit</th>
                        <td>{{$post->bloodUnit}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$post->mobile}}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{$post->city}}</td>
                    </tr>
                    <tr>
                        <th>Hospital Name</th>
                        <td>{{$post->hospitalName}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
