<?php

use Illuminate\Support\Facades\Route;

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', 'Homepage\HomepageController@index')->name('homepage');
Route::get('/make-appointment', 'Homepage\HomepageController@appointmentMiking')->name('make.appointment');
Route::get('/thank-you', 'Homepage\HomepageController@Thankyou')->name('thankyou');


Route::post('/submit-appointment', 'Homepage\HomepageController@createAppointmentSchedule')->name('submit.appointment');
