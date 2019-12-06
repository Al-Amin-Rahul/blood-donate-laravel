@extends("master")
@section('title')
    Post Request
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row background">
            <div class="col-md-8 offset-md-2 ">
                <div class="row justify-content-center mt-5">
                    <h1 class="border-bottom">Post Request</h1>
                </div>
                <form action="{{route('/post-new-register')}}" method="post" class="mt-5">
                    @csrf
                    <div class="row card-header post-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Patient Name</label>
                                <input type="text" name="patientName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Patient Age</label>
                                <input type="number" name="patientAge" class="form-control" required>
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
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Blood Unit</label>
                                <input type="text" name="bloodUnit" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" name="mobile" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Hospital Name</label>
                                <input type="text" name="hospitalName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" name="time" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea rows="3" class="form-control" name="details" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row card-header">
                        <input type="submit" name="btn" value="Post" class="btn btn-primary" width="100%;">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
