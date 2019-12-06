<?php
Route::get('/',[
    'uses'  =>  'HomeController@Home',
    'as'    =>  '/'
]);
Route::get('/donor-register',[
    'uses'  =>  'HomeController@donorRegister',
    'as'    =>  'donor-register'
]);
Route::get('/post-register',[
    'uses'  =>  'HomeController@Post',
    'as'    =>  'post-register'
]);
Route::post('/new-donor-register',[
    'uses'  =>  'HomeController@newDonor',
    'as'    =>  '/new-donor-register'
]);
Route::post('/post-new-register',[
    'uses'  =>  'HomeController@newPost',
    'as'    =>  '/post-new-register'
]);
Route::get('/see-donor',[
    'uses'  =>  'HomeController@seeDonor',
    'as'    =>  'see-donor'
]);
Route::get('/about-us',[
    'uses'  =>  'HomeController@aboutUs',
    'as'    =>  'about-us'
]);
Route::get('/donor-details/{id}',[
    'uses'  =>  'HomeController@donorDetails',
    'as'    =>  'donor-details'
]);
Route::get('/post-details/{id}',[
    'uses'  =>  'HomeController@postDetails',
    'as'    =>  'post-details'
]);
