<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\validationcontroller;
use Illuminate\Support\Facades\DB;
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

Route::get('check_conn',[AdminController::class,'checkDB']);
Route::get('/admin',[AdminController::class,'index']);

Route::group(['middleware'=>['protectedPage']],function(){
Route::view('add_product','admin/add_product');
	
});

Route::view('noacces','admin/noacces');

Route::get('/login',function(){
	 // if(session()->has('name')){
		return view('admin/login');
	 // }
});
Route::get('/logout',function(){
	// if(session()->has('name')){
	return redirect('/login');
   // }

});

Route::post('loginSession',[AdminController::class,'Login']);

Route::post('upload',[AdminController::class,'upload']);

Route::get("add_member",function(){
	return view('admin/add_member');
});

Route::post('save',[AdminController::class,'add_member']);
Route::get('add_member','AdminController@showMember');
Route::get('edit/{id}','AdminController@show');
Route::get('delete/{id}','AdminController@delete');
Route::post('update',[AdminController::class,'update']);

Route::get('insert','QueryController@insert');
Route::get('update','QueryController@update');
Route::get('delete','QueryController@delete');
Route::get('getData','QueryController@getData');
Route::get('show_join','QueryController@show_join');

//Route::view('/profile','profile');

Route::get('/profile/{lang}',function($lang){
	 // to check it from variable input
	 App::setlocale($lang);
	return view('profile');
});

Route::get('/mail',[mailController::class,'index']);

// Form Validation

Route::view('/validate','form_validation');
Route::post('/submit','validationcontroller@form_validate');



