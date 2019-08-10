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
    return view('welcome');
});

Route::get('/auth', function(){

    $meli = new \App\Meli('1764945386142380', 'KAX31gq2Ul7aDkHkz1vrU49xf2L7P8cg');

    //$user = $meli->authorize($_GET['code'], 'http://somecallbackurl');

    dd($_GET);
    
});

Route::post('/incoming', 'meliController@incoming');

//$meli = new \App\Meli('1764945386142380', 'KAX31gq2Ul7aDkHkz1vrU49xf2L7P8cg');


Route::middleware(['cors'])->group(function () {

    Route::get('/stats', 'RatesController@getVotesSum');
    Route::get('/positive', 'RatesController@votePositive');
    Route::get('/negative', 'RatesController@voteNegative');
    Route::get('/regular', 'RatesController@voteRegular');
    
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
