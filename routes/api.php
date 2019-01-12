<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function () {
    Route::post('register', 'AuthController@register');
    Route::post('authenticate', 'AuthController@authenticate');
    Route::get('logout', 'AuthController@logout')->middleware('jwt.refresh');

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('me',  'AuthController@getCurrentUser');
    });

});

Route::group(['middleware' => 'api'], function () {
    Route::get('getevent',  'EventController@index');
    Route::get('getactivity',  'EventController@getEvent');
    Route::get('getschool',  'SchoolController@school_index');
});



/*
 * For Firebase Connection
 */
// Route::group(['middleware' => 'api'], function() {
//   Route::get('firebase', 'FirebaseController@setUser2');
// });

// // logoutは、post
// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('/me', 'AuthController@me');
//     Route::post('/logout', 'AuthController@logout');
// });

// Route::post('/login', 'AuthController@login');