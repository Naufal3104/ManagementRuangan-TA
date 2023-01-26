<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\EventController;

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
Route::resource('/', DashboardController::class);

Route::resource('/order', OrderController::class);

Route::resource('/guest', GuestController::class);

Route::get('/full-calender', [EventController::class, 'index']);

Route::post('/full-calender/save', [EventController::class, 'action']);

Route::get('/full-calender/list', [EventController::class, 'list_event']);

Route::get('/full-calender/list/{id}', [EventController::class, 'show']);

Route::get('/user', [PenggunaController::class, 'home']);

Route::get('/user/create', [PenggunaController::class, 'buat']);

Route::post('/user/save', [PenggunaController::class, 'simpan']);

Route::get('/user/register', [PenggunaController::class, 'create']);

Route::post('/user/store', [PenggunaController::class, 'store']);

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login',[LoginController::class, 'authenticate']);

Route::get('/register', [LoginController::class, 'register']);

Route::post('/register/create', [LoginController::class, 'create']);

Route::post('logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');

route::middleware('auth')->group(function(){
    Route::resource('/admin', App\Http\Controllers\AdmindashboardController::class);

    Route::resource('/adminrequest', App\Http\Controllers\LogController::class);

    Route::resource('/editruangan', App\Http\Controllers\RuanganController::class);

    Route::resource('/editpengguna', App\Http\Controllers\EditpenggunaController::class);

    Route::get('/adminedit', function () {
        return view('admin.edit');
    });
});


