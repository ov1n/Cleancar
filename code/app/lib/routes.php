<?php

    //Index page
    //Route::set('',function(){
   //     View::make('Root');
    //});
    
    //routing done according to base function of controller
    Route::set('login',function(){
        Login::create_view('login');
    });

    Route::set('home',function(){
        Home::create_view('home');
    });

    Route::set('register',function(){
        Home::create_view('register');
    });

    Route::set('about_us',function(){
        Home::create_view('about_us');
    });

    Route::set('add_service',function(){
        Home::create_view('Add_service');
    });
?>