<?php

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-email',function(){
	// we have to create a mail using command php artisan make:mail SendEmailMailable
	//Mail::to('anuragbhaskar24@gmail.com')->send(new SendEmailMailable());
	SendEmailJob::dispatch()->delay(now()->addSeconds(5));
	SendEmailJob::dispatch()->delay(now()->addSeconds(5));
	return 'Email is send properly.';
});
