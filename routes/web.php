<?php

use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\HomeAgentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('welcome');
});

Route::get('/clientSynthesis/{client}',[HomeAgentController::class,'clientSynthesis'])
    ->name('clientSynthesis');
Route::get('/findClient/{name}/{birthday}',[HomeAgentController::class,'findClient'])->name('findClient');
Route::get('/getAccounts/{id}',[HomeAgentController::class,'getAccounts'])->name('getAccounts')
    ->where(['id'=>'[0-9]+']);
Route::get('/operationPage/{account}',[HomeAgentController::class,'operationPage'])->name('operationPage');
Route::post('/makeOperation/{account}',[HomeAgentController::class,'makeOperation'])->name('makeOperation');

Route::view('/index','homeAgents.operationPage');
Route::view('/synthesis','homeAgents.synthesisClient');
Route::view('/getAdvisorPlanning','homeAgents.getAdvisorPlanning')->name('getAdvisorPlanning');

Route::name('advisor.')->prefix('advisor')->controller(AdvisorController::class)
    ->group(function (){
    Route::get('/getRegisterPage','getClientRegisterPage')->name('getRegisterPage');
    Route::post('/clientRegister','register')->name('register');
    Route::get('/viewClient/{client}','viewClient')->name('viewClient');
});

Route::name('director.')->prefix('director')->controller(DirectorController::class)
    ->group(function () {
        Route::get('/getCreateUserPage','getCreateUserPage')->name('getCreateUserPage');
        Route::post('/createUser','createUser')->name('createUser');

    });
