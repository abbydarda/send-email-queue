<?php
use App\Jobs\SendEmailJob;
use Carbon\Carbon;

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

Route::get('/sendMail', function () {
    $job = (new SendEmailJob());
    SendEmailJob::dispatch($job)
            ->delay(now()->addseconds(5));
    return "Email Terkirim";
});
