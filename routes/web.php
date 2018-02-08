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
    return view('home/viewHome');
});

/*Route::post('/search', function(){
    $keyword = Input::get('keyword');

    $forms = Form::where('title', 'LIKE', '%'.$keyword$.'%')
});
Route::get('/formulario/continue', 'FormController@createContinue');*/

/*Route::get('/estatistica/detalhes', function () {
    return view('statistic/viewDetailStatistic');
});*/

Route::group(['namespace' => 'Admin'], function(){

    Route::group(['prefix' => 'estatistica'], function(){
        Route::get('/detalhes', 'controllerStatistic@detail');
        Route::get('/', 'controllerStatistic@index');
    });

    Route::group(['prefix' => 'cadastros-essenciais'], function(){
        Route::get('/etnia', 'controllerBasicEntry@createListEthnicity');
        Route::get('/genero', 'controllerBasicEntry@createListGender');
        Route::get('/bairro', 'controllerBasicEntry@createListNeighborhood');
        Route::get('/profissao', 'controllerBasicEntry@createListProfession');
    });

    Route::group(['prefix' => 'formulario'], function(){
        Route::group(['prefix' => 'cadastrar'], function(){
            Route::get('/categoria', 'controllerForm@createListCategory');
        });

        Route::group(['prefix' => 'relacionar'], function(){
            Route::get('/usuario', 'controllerForm@linkFormUser');
            Route::get('/pergunta', 'controllerForm@linkFormQuestion');
            Route::get('/resposta-peso', 'controllerForm@linkFormAnswer');
        });
    });

    Route::resource('audit', 'controllerAudit');

    Route::resource('form', 'controllerForm');

    Route::resource('user', 'controllerUser');

    Route::resource('question', 'controllerQuestion');

});
