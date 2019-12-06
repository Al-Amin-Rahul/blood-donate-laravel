<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function donorRegister(){
        return view('donor-register.donor');
    }
    public function Post(){
        return view('post-register.post');
    }
    public function Home(){
        $posts=Post::orderBy('created_at','desc')->paginate(4);
        return view('home.home',['posts'=>$posts]);
    }

    public function seeDonor(){
        $donors =Donor::orderBy('created_at','desc')->paginate(8);
        return view('see-donor.see-donor',['donors'=>$donors]);
    }
    public function newDonor(Request $request){
        Donor::create($request->all());
        return redirect('see-donor');
    }
    public function newPost(Request $request){
        Post::create($request->all());
        return redirect('/');
    }
    public function aboutUs(){
        return view('about.about-us');
    }
    public function donorDetails($id){
        $donor = Donor::find($id);
        return view('details.donor-details',['donor'=>$donor]);
    }
    public function postDetails($id){
        $post = Post::find($id);
        return view('details.post-details',['post'=>$post]);
    }
}
