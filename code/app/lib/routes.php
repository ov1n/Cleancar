<?php

    //Index page
    //Route::set('',function(){
   //     View::make('Root');
    //});
    
    //routing done according to base function of controller
    Route::set('login',function(){
        //start session
        Session::init();
        Login::create_view('login');
    });

    //function to check login controller TEMP
    Route::set('auth',function(){
        Session::init();
        Login::authenticate();
    });

    Route::set('home',function(){
        Session::init();
        Controller::create_view('main_home_page');
    });

    Route::set('register',function(){
        Home::create_view('register');
    });

    Route::set('about_us',function(){
        Home::create_view('about_us');
    });

     Route::set('contact_us',function(){
        Home::create_view('contact_us');
    });

    Route::set('add_service',function(){
        Home::create_view('add_service');
    });
    
    Route::set('billing',function(){
        Home::create_view('billing');
    });


    Route::set('delay_time_table',function(){
        Home::create_view('delayTimeTable');
    });

    //route to make reservation with sessions
    Route::set('make_reservation',function(){
        
        Session::init();
        //echo($_SESSION["uname"]);
        Session::set("details",Reservation::autofill(Session::get("uname")));
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        //$_SESSION["details"]=Reservation::autofill($_SESSION["uname"]);
        Home::create_view('make_reservation');
    });

    //route to confirm reservation with database
    Route::set('confirm_reservation',function(){ 
        //session_start();
        //echo($_SESSION["uname"]);
        Reservation::insert();
    });

    //experimental route to develop confirm reservation page
    Route::set('conres',function(){ 
        //session_start();
        //echo($_SESSION["uname"]);
        Reservation::create_view('confirm_reservation');
    });

    //get form details from  register
    Route::set('reg_auth',function(){
        Register::register();
    });

    Route::set('change_password',function(){
        Home::create_view('change_password');
    });

    Route::set('receptionist',function(){

        //start session
        Session::init();
        Home::create_view('receptionist_home');
    });

    Route::set('manager',function(){

        //start session
        Session::init();
        Home::create_view('manager_home');
    });

    Route::set('employee',function(){

        //start session
        Session::init();
        Home::create_view('employee_home');
    });

    Route::set('request_leave',function(){
        Home::create_view('request_leave');
    });

    Route::set('register_emp',function(){
        Home::create_view('register_emp');
    });

    Route::set('add_employee',function(){
        Home::create_view('add_employee');
    });

    Route::set('add_timeslot',function(){
        Home::create_view('add_timeslot');
    });
?>