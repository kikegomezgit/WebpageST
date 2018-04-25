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

Route::get('/', function () {
    return View::make('index');
});

Route::get('/articulosd', function () {
    return View::make('articulosd');
});


Route::get('/sobrenosotros', function () {
    return View::make('sobrenosotros');
});

Route::get('/contactanos', function () {
    return View::make('contactanos');
});

Route::post('/sendmail', function (\Illuminate\Http\Request $request ,
\Illuminate\Mail\Mailer $mailer) {
	$mailer
		->to("serenguetimty@gmail.com")
		->send(new \App\Mail\MyMail($request->input('subject'),$request->input('email'),$request->input('name'),$request->input('msage')));	
return redirect()->back();
})->name('sendmail');



