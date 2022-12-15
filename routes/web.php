<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/'], function () {
	Route::get('/','frontController@index');
	Route::get('/history', function () { return view('pages.about.history'); });
	Route::get('/structure', function () { return view('pages.about.structure'); });
	Route::get('/vision', function () { return view('pages.about.vision'); });
	Route::get('/plan', function () { return view('pages.about.plan'); });
	Route::get('/service', function () { return view('pages.about.service'); });
	Route::get('/moph', function () { return view('pages.about.moph'); });
	Route::get('/information', function () { return view('pages.about.information'); });
	Route::get('/ncd', function () { return view('pages.about.ncd'); });
	Route::get('/vaccine19', function () { return view('pages.about.vaccine'); });
	Route::get('/itah/{year}','frontController@ita');
	Route::get('/ita/{id}','frontController@ita_sub')->name('ita.sub');
	Route::get('/news','frontController@news');
	Route::get('/news/{id}','frontController@show_news');
	Route::get('/event','frontController@events');
	Route::get('/event/{id}','frontController@event');
	Route::get('/ethics','frontController@ethics');
	Route::get('/ethics/{id}','frontController@show_ethics');
});


Route::group(['prefix' => 'backend/news'], function () {
    Route::get('/','newsController@index');
	Route::get('/visible', 'newsController@visible');
    Route::get('/{id}','newsController@show')->name('news.show');
    Route::post('/add','newsController@add')->name('news.add');
	Route::post('/update/{id}','newsController@update')->name('news.update');
	Route::post('/fileDelete', 'newsController@f_delete')->name('news.f_delete');
	Route::post('/imgDelete', 'newsController@img_delete')->name('news.img_delete');
	Route::post('/imgAdd', 'newsController@img_add')->name('news.img_add');
});

Route::group(['prefix' => 'backend/users'], function () {
    Route::get('/','usersController@index');
    Route::get('/{id}','usersController@show')->name('users.show');
    Route::post('/add','usersController@add')->name('users.add');
	Route::post('/update/{id}','usersController@update')->name('users.update');
});

Route::group(['prefix' => 'backend/ita'], function () {
    Route::get('/','itaController@index');
    Route::get('/{id}','itaController@show')->name('ita.show');
    Route::get('/sub/{id}','itaController@sub_show')->name('ita.sub_show');
    Route::get('/sub/data/{id}','itaController@data_show')->name('ita.data_show');
    Route::post('/sub_add','itaController@sub_add')->name('ita.sub_add');
    Route::get('/sub/edit/{id}','itaController@sub_edit')->name('ita.sub_edit');
	Route::post('/sub/update/{id}','itaController@sub_update')->name('ita.sub_update');
	Route::post('/sub/delete/{id}','itaController@sub_delete')->name('ita.sub_delete');
    Route::post('/data_add','itaController@data_add')->name('ita.data_add');
    Route::get('/sub/data/{id}','itaController@data_edit')->name('ita.data_edit');
	Route::post('/sub/data/fileDelete','itaController@data_f_delete')->name('ita.data_f_delete');
	Route::post('/sub/data/update/{id}','itaController@data_update')->name('ita.data_update');
	Route::get('/status', 'itaController@status');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');