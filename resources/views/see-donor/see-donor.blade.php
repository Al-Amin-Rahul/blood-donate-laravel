@extends('master')
@section('title')
    See Donor
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <h1 class="border-bottom">Donor</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($donors as $donor)
                <div class="col-xl-3 col-lg-3 col-md-4 col-6 mb-4 mt-5">
                    <div class="donor-item">
                        <div class="donor-image p-2" style="text-align: center">
                            <img src="{{asset('/')}}front/images/blood.png">
                        </div>
                        <div class="donor-info p-1">
                            <p><strong>Name        :</strong>{{$donor->name}}</p>
                            <p><strong>Blood Group :</strong> {{$donor->bloodGroup}}</p>
                            <p><strong>Available   :</strong> {{$donor->availability}}</p>
                            <p><strong>Location    :</strong> {{$donor->address}}</p>
                            <p><strong>Mobile      :</strong> {{$donor->mobile}}</p>
                        </div>
{{--                        <div class="donor-details">--}}
{{--                            <input type="submit" name="btn" class="form-control btn btn-outline-danger" value="Details" >--}}
{{--                        </div>--}}
                        <a href="{{ route("donor-details", ["id" => $donor->id]) }}" class="btn btn-outline-danger">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                {{$donors->links()}}
            </div>
        </div>
    </div>
@endsection
