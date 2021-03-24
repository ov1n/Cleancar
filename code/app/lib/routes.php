<?php

    //Index page
    //Route::set('',function(){
   //     View::make('Root');
    //});
    
    //routing done according to base function of controller
    Route::set('login',function(){
        //start session
        Session::init();
        Login::create_view('login','');
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

    Route::set('change_password_auth', function () {
    Session::init();
    ChangePassword::authenticate();
});
    
    //home page
    Route::set('home',function(){
        //start session
        Session::init();
        //logout if time is exceeded in session
        Login::timeout(Session::get("curr_time"));
        //TEMP SOLUTION BY ADDING SPACE 
        Home::create_view('main_home_page','');
    });

    Route::set('register',function(){
        Controller::create_view('register','');
    });

    Route::set('about_us',function(){
        //start session
        Session::init();
        Login::timeout(Session::get("curr_time"));
        Controller::create_view('about_us','');
    });

     Route::set('contact_us',function(){
        //start session
        Session::init();
        Controller::create_view('contact_us','');
    });

    Route::set('add_service',function(){
        //start session
        Session::init();
        //logout if time is exceeded in session
        Login::timeout(Session::get("curr_time"));
        Controller::create_view('add_service','manager');
    });
    
    Route::set('billing',function(){
        Session::init();
        Controller::create_view('billing','receptionist');
    });
  

    Route::set('profile',function(){
        Session::init();
        UserProfile::create_view('profile','');
    });
      Route::set('error-403',function(){
        Controller::create_view('error-403','');
    });
       Route::set('error_404',function(){
        Controller::create_view('error_404','');
    });

    Route::set('delay_time_table',function(){
        Session::init();
        Controller::create_view('delay_time_table','receptionist');
    });

     Route::set('update_profile',function(){
        Session::init();
        Controller::create_view('update_profile','loggedin');
    });

    // Route::set('delay_timetable_manager',function(){
    //     Session::init();
    //     Controller::create_view('delay_time_table','manager');
    // });

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
        Make_reservation::create_view('make_reservation','customer');
    });

    //route set to view reservation
    Route::set('view_reservation',function(){
        
        //start session
        Session::init();
        View_reservation::get_reservations();
        //View_reservation::create_view('view_reservation','customer');
    });

    //route to make reservation from receptionist
    Route::set('emergency_reservation',function(){
        
        Session::init();
        //echo(Session::get("uname"));
        
        //$_SESSION["details"]=Make_reservation::autofill($_SESSION["uname"]);
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Controller::create_view('emergency_reservation','receptionist');
    });

      //route to make reservation from receptionist
    Route::set('emergency_reservation_manager',function(){
        
        Session::init();
        //echo(Session::get("uname"));
        
        //$_SESSION["details"]=Make_reservation::autofill($_SESSION["uname"]);
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Controller::create_view('emergency_reservation_manager','manager');
    });


    //route to confirm reservation with database
    Route::set('set_reservation',function(){ 
        session_start();
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        $tempdate=Session::get("duration");
        $tdate = strtotime($tempdate);
        //$tdate=DateTime::createFromFormat("H:i:s", $tempdate);
        Make_reservation::insert();
        //var_dump($_SESSION);
        header("Location:confirm_reservation");
        //var_dump($_SESSION);
    });

    //final view of reservation
    Route::set('confirm_reservation',function(){ 
        session_start();
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';
        Controller::create_view('confirm_reservation','customer');
    });

    //experimental route to develop confirm reservation page
    Route::set('conres',function(){ 
        //session_start();
        //echo($_SESSION["uname"]);
        Controller::create_view('confirm_reservation','loggedin');
    });

    //get form details from  register
    Route::set('reg_auth',function(){
        $reg=New Register();
        $reg->register();
    });

    Route::set('emp_reg_auth',function(){
        //start session
        Session::init();
        Employee::register();
    });

    Route::set('emp_update_auth',function(){
        //start session
        Session::init();
        Employee::update();
    });
    
    Route::set('update_user_auth', function () {
    //start session
    Session::init();
    UserProfile::update();
	});

    //sevice update
    Route::set('update_service_auth',function(){
        //start session
        Session::init();
        AddServiceType::update();
    });

    Route::set('cancel_leave_manager', function () {

    Session::init();
    EmployeeLeaveList::leave_cancel('cancel_leave_manager', 'manager');
    });

    Route::set('search_data', function () {

    Session::init();
    ServiceType::search('service_type_list', 'manager');
    });

    Route::set('edit_bill_manager', function () {

    Session::init();
    Invoice_bill::load_bill_data('edit_bill_manager', 'manager');
    });

    Route::set('update_bill_manager', function () {
    //start session
    Session::init();
    Invoice_bill::update_bill('edit_bill_manager', 'manager');
    });

    Route::set('change_password',function(){
        Session::init();
        Controller::create_view('change_password','loggedin');
    });

    Route::set('leave_delete_manager', function () {
    Session::init();
    EmployeeLeaveList::delete_leaves('cancel_leave_manager', 'manager');
    });

    Route::set('forgot_password',function(){
        Controller::create_view('forgot_password','');
    });

    Route::set('xJhgU_1',function(){
        ForgotPassword::authenticate_email();
    });

    Route::set('receptionist',function(){

        //start session
        Session::init();
        Controller::create_view('receptionist_home','receptionist');
    });
    
    Route::set('search_invoice_data', function () {

    Session::init();
    Invoice_bill::search('invoice_report_manager', 'manager');
    });

    Route::set('manager',function(){

        //start session
        Session::init();
        Controller::create_view('manager_home','manager');
    });

    Route::set('employee',function(){

        //start session
        Session::init();
        Controller::create_view('employee_home','employee');
    });



    Route::set('register_emp',function(){
        //start session
        Session::init();
        Controller::create_view('register_emp','manager');
    });

    Route::set('add_employee',function(){
        //start session
        Session::init();
        Controller::create_view('add_employee','receptionist');
    }); 

    Route::set('add_timeslot',function(){
        //start session
        Session::init();
        Controller::create_view('add_timeslot','manager');
    });

    Route::set('add_timeslot_',function(){

        Session::init();
        Timeslot::add_timeslot();
    });

    Route::set('update_timeslot_',function(){
        //start session
        Session::init();
        Timeslot::update();
    });


    Route::set('update_delete_service',function(){
        //start session
        Session::init();
        Controller::create_view('update_delete_service','manager');
    });

    Route::set('update_timeslot',function(){
        //start session
        Session::init();
        Timeslot::view('update_timeslot','manager');
    });

    Route::set('employee_list',function(){

        Session::init();
        EmployeeList::create_view('employee_list','manager');
    });

    Route::set('leave_report_manager', function () {
    Session::init();
    EmployeeList::create_view('leave_report_manager', 'manager');
    });

    Route::set('invoice_report',function(){

        Session::init();
        Invoice_bill::create_view('invoice_report','receptionist');
    });
    
     Route::set('invoice_report_manager',function(){

        Session::init();
        Invoice_bill::create_view('invoice_report_manager','manager');
    });
    
    //Employee functions
    //view
    Route::set('employee_view',function(){ 
        Session::init();
        Employee::view('view_employee','manager');
    });

    Route::set('employee_view_recep',function(){ 
        Session::init();
        Employee::view('view_employee_recep','receptionist');
    });

    Route::set('employee_update',function(){ 
        Session::init();
        Employee::view('employee_update','manager');
    });
    
    Route::set('leave_status', function () {
    Session::init();
    EmployeeLeaveList::update_leave_status('employee_leave_list', 'manager');
    });

    Route::set('employee_update_recep',function(){ 
        Session::init();
        Employee::view('employee_update_recep','receptionist');
    });


    //delete
    Route::set('employee_delete_recep',function(){
        Session::init();
        EmployeeList::delete('employee_list_recep','receptionist');
    });

    Route::set('employee_delete',function(){
        Session::init();
        EmployeeList::delete('employee_list','manager');
    });

    Route::set('add_service_type',function(){

        Session::init();
       AddServiceType::register();
   });
   
   Route::set('service_type_list',function(){

       Session::init();
       ServiceType::create_view('service_type_list','manager');
   });

    Route::set('update_service',function(){

       Session::init();
       ServiceType::view('update_service','manager');
    });
 
    Route::set('delete_service',function(){
 
        Session::init();
        ServiceType::delete('service_type_list','manager');
    });


   Route::set('employee_list_recep',function(){

    Session::init();
    EmployeeList::create_view('employee_list_recep','receptionist');
    });

   Route::set('emp_leave',function(){

    Session::init();
    EmployeeLeave::create_view('emp_leave','receptionist');
    });


    Route::set('employee_leave_list',function(){
        Session::init();
        EmployeeLeaveList::create_view('employee_leave_list','manager');
    });

    Route::set('request_leave', function () {

    Session::init();
    EmployeeList::create_new_view('request_leave', 'employee');
    });

    Route::set('add_bill',function(){
        //start session
        Session::init();
        Invoice_bill::add_new();
    });

    Route::set('print_bill', function () {
    //start session
    Session::init();
    Invoice_bill::add_new();
    });

    Route::set('calendar',function(){
        Session::init();
        Calendar::create_view('customer_calendar','customer');
    });

    Route::set('add_leave_',function(){
        //start session
        Session::init();
        //logout if time is exceeded in session
       // Login::timeout(Session::get("curr_time"));
        EmployeeLeave::add_leave();
    });

    //Route::set('leave_static',function(){
        //start session
        //Session::init();
        //Controller::create_view('leave_static');
    //});

    //*******************************************
    Route::set('leave_static',function(){ 
        Session::init();
        EmployeeLeave::no_of_leave('leave_static');
    });

    Route::set('time_table',function(){
        Session::init();
        Controller::create_view('time_table','manager');
    });

    Route::set('timeslot_list',function(){

        Session::init();
        Timeslot::create_view('timeslot_list','manager');
    });

    Route::set('employee_calendar',function(){
        Session::init();
        Controller::create_view('employee_calendar','employee');
    });

    Route::set('add_reserve_manager',function(){
        Session::init();
        Controller::create_view('add_reserve_manager','manager');
    });

    Route::set('delay_timetable_manager',function(){
        Session::init();
        Controller::create_view('delay_timetable_manager','manager');
    });
    Route::set('search_emp_data', function () {

    Session::init();
    EmployeeList::search('employee_list', 'manager');
});

    Route::set('add_leave_manager',function(){
        Session::init();
        Controller::create_view('add_leave_manager','manager');
    });


    Route::set('update_leave',function(){
        Session::init();
        Controller::create_view('update_leave','employee');
    });

    Route::set('time_table_recep',function(){
        Session::init();
        Controller::create_view('time_table_recep','receptionist');
    });

     //delete
     Route::set('leave_delete',function(){
        Session::init();
        EmployeeLeave::cancel_leave('emp_leave');
    });

    Route::set('delete_timeslot',function(){
 
        Session::init();
        Timeslot::delete('timeslot_list');
    });

    // Route::set('update_timeslot',function(){
    //     //start session
    //     Session::init();
    //     Timeslot::view('update_timeslot');
    // });

    

?>
