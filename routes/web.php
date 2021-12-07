<?php
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
Route::get('/{any}', function () {
    return view('welcome');
})->where('any','.*');
Route::post('/sendemail/send', 'SendEmailController@send');
// Route::get('sendmail', function () {
   
//     $details = [
//         'title' => 'Mail from akunproduktani@gmail.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('storageblack100399@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });