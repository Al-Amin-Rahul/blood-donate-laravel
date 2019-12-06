@extends('master')
@section('title')
    Home | Request
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <h1 class="border-bottom">Blood Request</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 mb-4 mt-5">
                    <div class="post-item">
                        <div class="post-image p-2" style="text-align: center">
                            <img src="{{asset('/')}}front/images/blood.png">
                        </div>
                        <div class="post-info p-1">
                            <p><strong>Blood Group :</strong> {{$post->bloodGroup}}</p>
                            <p><strong>Blood Unit  :</strong> {{$post->bloodUnit}}</p>
                            <p><strong>Date        :</strong> {{$post->date}}</p>
                            <p><strong>Mobile      :</strong> {{$post->mobile}}</p>
                        </div>
                        <form>
                            <a href="{{ route("post-details", ["id" => $post->id]) }}" class="btn btn-outline-danger">Details</a>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
