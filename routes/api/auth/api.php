 <?php

use GuzzleHttp\Middleware;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/user')->group(function(){

    Route::post('/login', 'App\Http\Controllers\LoginController@login');
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\UserController@all');
    Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
        Route::get('/user', 'App\Http\Controllers\LoginController@user');
    });
});