<?php

    //Index page
    //Route::set('',function(){
   //     View::make('Root');
    //});
    
    //routing done according to base function of controller
    Route::set('login',function(){
        Login::create_view('login');
    });

    //function to check login controller TEMP
    Route::set('auth',function(){
        Login::authenticate();
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

    Route::set('add_servise',function(){
        Home::create_view('Add_service');
    });
    
    Route::set('billing',function(){
        Home::create_view('billing');
    });

    Route::set('customer_registration',function(){
        Home::create_view('Add_service');
    });

    Route::set('delay_time_table',function(){
        Home::create_view('delayTimeTable');
    });

    Route::set('make_reservation',function(){
        Home::create_view('make_reservation');
    });

    //get form details from  register
    Route::set('reg_auth',function(){
        Register::register();
    });
?>