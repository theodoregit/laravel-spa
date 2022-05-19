<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Models\User;
use App\Http\Controllers\MerchantController;
use Illuminate\Http\Request;

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

Route::get('/merchant', [MerchantController::class, 'validateMerchant'])->name('validation');

Route::get('/', function () {
    return Inertia::render('Home', [
        'username' => 'Abebe Kebede',
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::all()->map(fn($user) => [
            'id' => $user->id,
            'name' => $user->name
        ])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::get('/phonenumber', function () {
    return Inertia::render('AcceptPhoneNumber');
});

Route::post('/otp', function (Request $request) {
    return Inertia::render('AcceptOTP', [
        'phonenumber' => $request->phonenumber,
        'amount' => $request->amount,
        'till' => $request->till,
        'compName' => $request->compName,
    ]);
});

Route::post('/pin', function (Request $request) {
    return Inertia::render('EnterPIN', [
        'phonenumber' => $request->phonenumber,
        'amount' => $request->amount,
        'till' => $request->till,
        'compName' => $request->compName,
    ]);
});

Route::get('/successful', function () {
    return Inertia::render('Invoice');
});


Route::post('/logout', function () {
    dd(request('foo'));
});

