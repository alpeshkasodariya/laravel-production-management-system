<?php
 
use Jenssegers\Agent\Agent;

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


Route::get('/', 'FrontController@index')->middleware('cors');;


//guide end

Route::group(array('prefix' => 'me-admin','middleware' => ['cors']), function () {
    Auth::routes();
    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return View('404');
    });

    Route::get('500', function () {
        return View::make('500');
    });

    Route::get('logout', array(
        'as' => 'logout',
        'uses' => 'HomeController@logout'
    ));

    Route::get('/', 'HomeController@index')->middleware('auth');
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'HomeController@index'))->middleware('auth');
  
    Route::group(['middleware' => ['auth', 'admin']], function () {
        Route::resource('user', 'UserController', ['except' => ['show']]);
        Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
        Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
        Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    });


    Route::group(array('prefix' => 'users', 'middleware' => ['auth', 'carer'], 'as' => 'me-admin.'), function () {
        Route::get('/', array('as' => 'user', 'uses' => 'UserController@index'));
        Route::get('create', array('as' => 'create/user', 'uses' => 'UserController@create'));
        Route::post('create', 'UserController@store');
        Route::get('{user}/edit', array('as' => 'update/user', 'uses' => 'UserController@edit'));
        Route::post('{user}/edit', 'UserController@update');
        Route::post('{user}/delete', array('as' => 'user.destroy', 'uses' => 'UserController@destroy'));
    });





    Route::group(array('prefix' => 'delivery', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('delivery', 'DeliveryController', ['except' => ['show']]);
        Route::get('/', array('as' => 'delivery', 'uses' => 'DeliveryController@index'));
        Route::get('create', array('as' => 'create/delivery', 'uses' => 'DeliveryController@create'));
        Route::post('create', 'DeliveryController@store');
        Route::get('{delivery}/edit', array('as' => 'update/delivery', 'uses' => 'DeliveryController@edit'));
        Route::post('{delivery}/edit', 'DeliveryController@update');
        Route::post('{delivery}/delete', array('as' => 'service.destroy', 'uses' => 'DeliveryController@destroy'));
    });


    Route::group(array('prefix' => 'order', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('order', 'OrderController', ['except' => ['show']]);
        Route::get('/', array('as' => 'delivery', 'uses' => 'OrderController@index'));
        Route::get('create', array('as' => 'create/delivery', 'uses' => 'OrderController@create'));
        Route::post('create', 'OrderController@store');
        Route::get('{order}/edit', array('as' => 'update/order', 'uses' => 'OrderController@edit'));
        Route::post('{order}/edit', 'OrderController@update');
        Route::post('{order}/delete', array('as' => 'order.destroy', 'uses' => 'OrderController@destroy'));
    });



    Route::group(array('prefix' => 'mahatma', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('mahatma', 'MahatmaController', ['except' => ['show']]);
        Route::get('/', array('as' => 'mahatma', 'uses' => 'MahatmaController@index'));
        Route::get('create', array('as' => 'create/mahatma', 'uses' => 'MahatmaController@create'));
        Route::post('create', 'MahatmaController@store');
        Route::get('{mahatma}/edit', array('as' => 'update/document', 'uses' => 'MahatmaController@edit'));
        Route::post('{mahatma}/edit', 'MahatmaController@update');
        Route::post('{mahatma}/delete', array('as' => 'mahatma.destroy', 'uses' => 'MahatmaController@destroy'));
    });

    Route::group(array('prefix' => 'production', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('production', 'ProductionController', ['except' => ['show']]);
        Route::get('/', array('as' => 'production', 'uses' => 'ProductionController@index'));
        Route::get('create', array('as' => 'create/production', 'uses' => 'ProductionController@create'));
        Route::post('create', 'ProductionController@store');
        Route::get('{production}/edit', array('as' => 'update/production', 'uses' => 'ProductionController@edit'));
        Route::post('{production}/edit', 'ProductionController@update');
        Route::post('{production}/delete', array('as' => 'production.destroy', 'uses' => 'ProductionController@destroy'));
    });
    
      Route::group(array('prefix' => 'kachomal', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('kachomal', 'KachomalController', ['except' => ['show']]);
        Route::get('/', array('as' => 'kachomal', 'uses' => 'KachomalController@index'));
        Route::get('create', array('as' => 'create/kachomal', 'uses' => 'KachomalController@create'));
        Route::post('create', 'KachomalController@store');
        Route::get('{kachomal}/edit', array('as' => 'update/kachomal', 'uses' => 'KachomalController@edit'));
        Route::post('{kachomal}/edit', 'KachomalController@update');
        Route::post('{kachomal}/delete', array('as' => 'kachomal.destroy', 'uses' => 'KachomalController@destroy'));
    });
    
     Route::group(array('prefix' => 'kachomaldeliver', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('kachomaldeliver', 'KachomalDeliverController', ['except' => ['show']]);
        Route::get('/', array('as' => 'kachomaldeliver', 'uses' => 'KachomalDeliverController@index'));
        Route::get('create', array('as' => 'create/kachomaldeliver', 'uses' => 'KachomalDeliverController@create'));
        Route::post('create', 'KachomalDeliverController@store');
        Route::get('{kachomaldeliver}/edit', array('as' => 'update/kachomaldeliver', 'uses' => 'KachomalDeliverController@edit'));
        Route::post('{kachomaldeliver}/edit', 'KachomalDeliverController@update');
        Route::post('{kachomaldeliver}/delete', array('as' => 'kachomaldeliver.destroy', 'uses' => 'KachomalDeliverController@destroy'));
    });
    
    Route::group(array('prefix' => 'kachomalstock', 'middleware' => ['auth'], 'as' => 'me-admin.'), function () {
        Route::resource('kachomalstock', 'KachomalStockController', ['except' => ['show']]);
        Route::get('/', array('as' => 'kachomalstock', 'uses' => 'KachomalStockController@index'));
        Route::get('create', array('as' => 'create/kachomalstock', 'uses' => 'KachomalStockController@create'));
        Route::post('create', 'KachomalStockController@store');
        Route::get('{kachomalstock}/edit', array('as' => 'update/kachomalstock', 'uses' => 'KachomalStockControllerr@edit'));
        Route::post('{kachomalstock}/edit', 'KachomalStockController@update');
        Route::post('{kachomalstock}/delete', array('as' => 'kachomalstock.destroy', 'uses' => 'KachomalStockController@destroy'));
    });
    

    Route::group(array('prefix' => 'reports', 'middleware' => ['auth', 'carer'], 'as' => 'me-admin.'), function () {
        //  Route::resource('stress', 'StressController', ['except' => ['show']]);
        Route::get('/', array('as' => 'reports', 'uses' => 'ReportsController@index'));
    });
});

Route::get('404', function () {
    return View('404');
});
Route::get('500', function () {
    return View::make('500');
});

