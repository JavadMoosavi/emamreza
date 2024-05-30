<?php

use App\Http\Controllers\CaravanController;
use App\Http\Controllers\Flightnew;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PilgrimController;
use App\Http\Controllers\Xlscontroller;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/pregister', function () {
    return view('pregister');
});

Route::get('/caravan', [CaravanController::class, 'fetchCaravanData']);

Route::get('/admin', [AdminController::class, 'renderAdmin']);

Route::get('/home', [HomeController::class, 'fetchHomeData']);

Route::get('/pilgrim', [PilgrimController::class, 'fetchPilgrimData']);

Route::get('/admin/pilgrim', [AdminController::class, 'renderAdmin_pilgrim']);

Route::get('/admin/home', [AdminController::class, 'renderAdmin_home']);

Route::post('/caravanUpdateAll', [AdminController::class, 'caravanUpdateAll']); // remember to block other requests
Route::get('/caravanUpdateAll', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/fetchAllData', [AdminController::class, 'fetchAllData']); // remember to block other requests
Route::get('/fetchAllData', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/caravanFinalCheck', [AdminController::class, 'caravanFinalCheck']); // remember to block other requests
Route::get('/caravanFinalCheck', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/adminPilgrimAvailableCheck', [AdminController::class, 'adminPilgrimAvailableCheck']); // remember to block other requests
Route::get('/adminPilgrimAvailableCheck', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/pilgrimAdminUpdate', [AdminController::class, 'pilgrimAdminUpdate']); // remember to block other requests
Route::get('/pilgrimAdminUpdate', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/saveCaravanDetail', [CaravanController::class, 'saveCaravanDetail']);

Route::get('/saveCaravanDetail', function () {return abort (403); }); // Add this for all routes - block get request

Route::post('/pilgrimTable', [CaravanController::class, 'pilgrimTable']); // remember to block other requests
Route::get('/pilgrimTable', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/saveCaravanCoadmin', [CaravanController::class, 'saveCaravanCoadmin']); // remember to block other requests
Route::get('/saveCaravanCoadmin', function () {return abort (403); }); // // Add this for all routes - block get request

Route::post('/home', [CaravanController::class, 'home']);
Route::post('/saveCaravanRowhani', [CaravanController::class, 'saveCaravanRowhani']);
Route::post('/saveCaravanConnect', [CaravanController::class, 'saveCaravanConnect']);
Route::post('/pilgrimAvailableCheck', [CaravanController::class, 'pilgrimAvailableCheck']);
Route::post('/pilgrimSave', [CaravanController::class, 'pilgrimSave']);

Route::get('/pilgrimRegister', [CaravanController::class, 'pilgrimRegisterShow']);

Route::get('/caravanHomeInfo', [CaravanController::class, 'caravanHomeInfoShow']);


Route::get('/cregister', function () {
    return view('caravanRegisterScuccess');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/logout', function () {
    session()->flush();
    session()->invalidate();
    return redirect()->route('login');
});

Route::get('/xls', [Xlscontroller::class, 'readCaravanData']);

Route::get('/xls1', [Xlscontroller::class, 'readHomeData']);

Route::get('/xls2', [Xlscontroller::class, 'homeadmindataupadte']);

Route::get('/xls3', [Xlscontroller::class, 'writexls']);

Route::post('pinfo', [HomeController::class, 'pinfo']);
Route::post('pinfo', [HomeController::class, 'pinfo']);

Route::get('/reload_captcha', [LoginController::class, 'reloadCaptcha']);

Route::post('/loginProccessor', [LoginController::class, 'loginProccessor']);
Route::get('/loginProccessor', function () {return abort (403); }); // // Add this for all routes - block get request

Route::get('/new', [Flightnew::class, 'new']);

Route::post('/savecaravan', [Flightnew::class, 'savecaravan']);
Route::get('/savecaravan', function () {return abort (403); }); // // Add this for all routes - block get request

Route::get('/hv/{homeUUID}/{pilgrimUUID}', [HomeController::class, 'homeValidation']);

