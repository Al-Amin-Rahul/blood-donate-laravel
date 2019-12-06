@extends('master')
@section('title')
    Donor Register
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="row justify-content-center mt-5">
                    <h1 class="border-bottom">Donor Register</h1>
                </div>
                <div class="card-header mt-5 mb-5">
                    <form action="{{route('/new-donor-register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group ">
                            <label>Blood Group</label>
                            <select class="form-control" name="bloodGroup" required>
                                <option>...Select Group...</option>
                                <option>A+</option>
                                <option>AB+</option>
                                <option>B+</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>AB-</option>
                                <option>B-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" name="mobile" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="4" name="address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Availability</label>
                            <select class="form-control" name="availability" required>
                                <option>...Select...</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <input type="submit" name="btn" value="Register" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
