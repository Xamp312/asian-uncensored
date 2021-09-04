<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/api/sendEmail', [SendEmailController::class, 'embbeddedEmailSend'])->name('embbeddedEmailSend');



    function embbeddedEmailSend(Request $request)
    {
	     $this->validate($request, [
	      'name'     =>  'required',
	      'email'  =>  'required|email',
	      'message' =>  'required'
	     ]);

        $data = array(
            'name'      =>  $request->txtName,
            'email'      =>  $request->txtEmail,
            'phone'   =>   $request->txtPhone,
            'message' => $request->txtMsg, 
            'subject' => $request->txtSubject

        );



     Mail::send('dynamic_email_template', $data, function($message)  {
          $message->to('usmansaeed91@gmail.com', 'Embedded')->subject('Embedded Contact');
             $message->from('contact@embedded.com','Embedded');
        });

        return 'Your message has been successfully sent';

    }