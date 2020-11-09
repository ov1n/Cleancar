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

    //plain logout function without loading a view
    Route::set('logout',function(){
        //start session
        Session::init();
        Login::logout();
    });

    //function to check login controller TEMP
    Route::set('auth',function(){
        Session::init();
        Login::authenticate();
    });
    
    //home page
    Route::set('home',function(){
        Session::init();
        echo(Session::get("in_time"));
        Controller::create_view('main_home_page');
    });

    Route::set('register',function(){
        Controller::create_view('register');
    });

    Route::set('about_us',function(){
        Controller::create_view('about_us');
    });

     Route::set('contact_us',function(){
        Controller::create_view('contact_us');
    });

    Route::set('add_service',function(){
        Controller::create_view('add_service');
    });
    
    Route::set('billing',function(){
        Controller::create_view('billing');
    });


    Route::set('delay_time_table',function(){
        Controller::create_view('delayTimeTable');
    });

    //route to make reservation with sessions
    Route::set('make_reservation',function(){
        
        Session::init();
        //echo(Session::get("uname"));
        Session::set("details",Reservation::autofill(Session::get("uname")));
        
        //$_SESSION["details"]=Reservation::autofill($_SESSION["uname"]);
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Home::create_view('make_reservation');
    });

    //route to make reservation from receptionist
    Route::set('emergency_reservation',function(){
        
        Session::init();
        //echo(Session::get("uname"));
        
        //$_SESSION["details"]=Reservation::autofill($_SESSION["uname"]);
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Controller::create_view('emergency_reservation');
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

    Route::set('emp_reg_auth',function(){
        //start session
        Session::init();
        Employee::register();
    });

    Route::set('change_password',function(){
        Controller::create_view('change_password');
    });

    Route::set('receptionist',function(){

        //start session
        Session::init();
        Controller::create_view('receptionist_home');
    });

    Route::set('manager',function(){

        //start session
        Session::init();
        Controller::create_view('manager_home');
    });

    Route::set('employee',function(){

        //start session
        Session::init();
        Controller::create_view('employee_home');
    });

    Route::set('request_leave',function(){
        Controller::create_view('request_leave');
    });

    Route::set('register_emp',function(){
        Controller::create_view('register_emp');
    });

    Route::set('add_employee',function(){
        Controller::create_view('add_employee');
    }); 

    Route::set('employee_update',function(){
        Controller::create_view('employee_update');
    });

    Route::set('view_employee',function(){
        Controller::create_view('view_employee');
    });

    Route::set('add_timeslot',function(){
        Controller::create_view('add_timeslot');
    });

    Route::set('update_service',function(){
        Controller::create_view('update_service');
    });

    Route::set('update_delete_service',function(){
        Controller::create_view('update_delete_service');
    });

    Route::set('update_timeslot',function(){
        Controller::create_view('update_timeslot');
    });

    Route::set('employee_list',function(){

        Session::init();
        EmployeeList::create_view('employee_list');
    });

    //Employee functions
    //view
    Route::set('employee_view',function(){
        EmployeeList::view();
    });

    //delete
    Route::set('employee_delete',function(){
        EmployeeList::delete();
    });
?>