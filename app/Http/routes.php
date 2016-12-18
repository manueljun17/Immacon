<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


// Route::group(['middleware' => 'web'], function() {
//     Route::get('/', 'HomeController@index');
//     Route::auth();
//     Route::get('/home', 'HomeController@index');
//     Route::get('/events', 'EventsController@index');
//     Route::resource('about', 'AboutController');
    
// });
// Route::resource('parishofficers', 'ParishOfficersController');

// Route::group(['middleware' => 'web'], function () {
 
//     Route::get('/', 'HomeController@index')->name('main');
    // Route::get('/login', [
    //     'uses' => 'AuthController@showLoginForm',
    //     'as' => 'login'
    // ]);
    // Route::get('/register', [
    //     'uses' => 'AuthController@showRegistrationForm',
    //     'as' => 'register'
    // ]);
    // Route::post('/register', [
    //     'uses' => 'AuthController@register',
    //     'as' => 'register'
    // ]);
    // Route::get('/logout', [
    //     'uses' => 'AuthController@getLogout',
    //     'as' => 'logout'
    // ]);
   
// });

Route::group(['middleware' => 'web'], function () {
 
    Route::get('/', 'HomeController@index')->name('main');
    
    //About
    
    Route::get('/about', [
        'uses' => 'AboutController@index',
        'as' => 'about',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::get('/about/{about}/edit', [
        'uses' => 'AboutController@edit',
        'as' => 'about.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::patch('/about/{about}', [
        'uses' => 'AboutController@update',
        'as' => 'about.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

      
});
//Auth    
 Route::auth();
 //Events
 Route::resource('events', 'EventsController');
//ParishOfficers
 Route::post('/parishofficers', [
    'uses' => 'ParishofficersController@store',
    'as' => 'parishofficers.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/parishofficers', [
    'uses' => 'ParishofficersController@index',
    'as' => 'parishofficers',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/parishofficers/create', [
    'uses' => 'ParishofficersController@create',
    'as' => 'parishofficers.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@show',
    'as' => 'parishofficers.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@update',
    'as' => 'parishofficers.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/parishofficers/{parishofficers}', [
    'uses' => 'ParishofficersController@destroy',
    'as' => 'parishofficers.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/parishofficers/{parishofficers}/edit', [
    'uses' => 'ParishofficersController@edit',
    'as' => 'parishofficers.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
