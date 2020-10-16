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
        Home::create_view('add_service');
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

    Route::set('change_password',function(){
        Home::create_view('change_password');
    });

    Route::set('receptionist_home',function(){
        Home::create_view('receptionist_home');
    });

    Route::set('manager_home',function(){
        Home::create_view('manager_home');
    });

    Route::set('employee_home',function(){
        Home::create_view('employee_home');
    });

    Route::set('request_leave',function(){
        Home::create_view('request_leave');
    });

    Route::set('register_emp',function(){
        Home::create_view('register_emp');
    });
?>