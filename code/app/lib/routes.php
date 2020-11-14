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
        //start session
        Session::init();
        //logout if time is exceeded in session
        Login::timeout(Session::get("curr_time"));
        Controller::create_view('main_home_page');
    });

    Route::set('register',function(){
        Controller::create_view('register');
    });

    Route::set('about_us',function(){
        //start session
        Session::init();
        Login::timeout(Session::get("curr_time"));
        Controller::create_view('about_us');
    });

     Route::set('contact_us',function(){
        //start session
        Session::init();
        Controller::create_view('contact_us');
    });

    Route::set('Add_service',function(){
        //start session
        Session::init();
        //logout if time is exceeded in session
        Login::timeout(Session::get("curr_time"));
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
        
        //start session
        Session::init();
        //initialize array for autofill function
        Session::set("details",Make_reservation::autofill(Session::get("uname")));
        //set timeslot and date to session
        Make_reservation::get_time();
        //Session::set("date",$date);
        //Session::set("timeslot",$timeslot);
        Make_reservation::create_view('make_reservation');
    });

    //route to make reservation from receptionist
    Route::set('emergency_reservation',function(){
        
        Session::init();
        //echo(Session::get("uname"));
        
        //$_SESSION["details"]=Make_reservation::autofill($_SESSION["uname"]);
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Controller::create_view('emergency_reservation');
    });

    //route to confirm reservation with database
    Route::set('confirm_reservation',function(){ 
        session_start();
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        Make_reservation::insert();
        Controller::create_view('confirm_reservation');
    });

    //experimental route to develop confirm reservation page
    Route::set('conres',function(){ 
        //session_start();
        //echo($_SESSION["uname"]);
        Controller::create_view('confirm_reservation');
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

    Route::set('invoice_report',function(){

        Session::init();
        Invoice_bill::create_view('invoice_report');
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

    Route::set('add_service_type',function(){

        Session::init();
       AddServiceType::register();
   });
   
   Route::set('service_type_list',function(){

       Session::init();
       ServiceType::create_view('service_type_list');
   });

   Route::set('employee_list_recep',function(){

    Session::init();
    EmployeeList::create_view('employee_list_recep');
    });

   Route::set('emp_leave',function(){

    Session::init();
    EmployeeLeave::create_view('emp_leave');
    });

    Route::set('emp_leave',function(){
        Controller::create_view('emp_leave');
    });

    Route::set('add_bill',function(){
        //start session
        Session::init();
        Invoice_bill::add_new();
    });

    Route::set('calendar',function(){
        Session::init();
        Controller::create_view('customer_calendar');
    });

    Route::set('add_leave_',function(){
        //start session
        Session::init();
        //logout if time is exceeded in session
       // Login::timeout(Session::get("curr_time"));
        EmployeeLeave::add_leave();
    });

    Route::set('leave_static',function(){
        Controller::create_view('leave_static');
    });
   
?>