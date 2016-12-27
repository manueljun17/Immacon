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
//ParishOfficers
Route::get('parishofficers/autocomplete', [
    'uses' => 'ParishofficersController@autocomplete', 
    'as' => 'parishofficers.autocomplete'
]);
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

//Events
 Route::post('/events', [
    'uses' => 'EventsController@store',
    'as' => 'events.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/events', [
    'uses' => 'EventsController@index',
    'as' => 'events',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/events/create', [
    'uses' => 'EventsController@create',
    'as' => 'events.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/events/{events}', [
    'uses' => 'EventsController@show',
    'as' => 'events.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/events/{events}', [
    'uses' => 'EventsController@update',
    'as' => 'events.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/events/{events}', [
    'uses' => 'EventsController@destroy',
    'as' => 'events.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/events/{events}/edit', [
    'uses' => 'EventsController@edit',
    'as' => 'events.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Organizations
Route::get('organizations/autocomplete', [
    'uses' => 'OrganizationsController@autocomplete', 
    'as' => 'organizations.autocomplete'
]);
 Route::post('/organizations', [
    'uses' => 'OrganizationsController@store',
    'as' => 'organizations.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/organizations', [
    'uses' => 'OrganizationsController@index',
    'as' => 'organizations',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/organizations/create', [
    'uses' => 'OrganizationsController@create',
    'as' => 'organizations.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/organizations/{organizations}', [
    'uses' => 'OrganizationsController@show',
    'as' => 'organizations.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/organizations/{organizations}', [
    'uses' => 'OrganizationsController@update',
    'as' => 'organizations.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/organizations/{organizations}', [
    'uses' => 'OrganizationsController@destroy',
    'as' => 'organizations.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/organizations/{organizations}/edit', [
    'uses' => 'OrganizationsController@edit',
    'as' => 'organizations.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//Users
Route::get('/admin/users/autocomplete', [
    'uses' => 'UsersController@autocomplete', 
    'as' => 'admin.users.autocomplete'
]);
 Route::post('/admin/users', [
    'uses' => 'UsersController@store',
    'as' => 'admin.users.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users', [
    'uses' => 'UsersController@index',
    'as' => 'admin.users',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'admin.users.create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('/admin/users/{users}', [
    'uses' => 'UsersController@show',
    'as' => 'admin.users.show',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::patch('/admin/users/{users}', [
    'uses' => 'UsersController@update',
    'as' => 'admin.users.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::delete('/admin/users/{users}', [
    'uses' => 'UsersController@destroy',
    'as' => 'admin.users.destroy',
    'middleware' => 'roles',
    'roles' => ['Admin']
]); 
Route::get('/admin/users/{users}/edit', [
    'uses' => 'UsersController@edit',
    'as' => 'admin.users.edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
