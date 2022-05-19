<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchantController;
use Inertia\Inertia;

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

// Route::post('/cbeBirr', [MerchantController::class, 'toCbeBirr'])->name('cbeBirr');
Route::get('cbeBirr', function(Request $request){
    return view('transition')->with('amount', $request->amount)
                                ->with('till', $request->till)
                                ->with('compName', $request->compName);
});
