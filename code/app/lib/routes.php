<?php

    //Index page
    //Route::set('',function(){
   //     View::make('Root');
    //});

    Route::set('login',function(){
        Login::create_view();
    });

    Route::set('contact',function(){
        echo "contact";
    });
?>