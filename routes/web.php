<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogController;

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
Route::get('/', [DashboardController::class, 'home']);

Route::get('/room/{id}', [DashboardController::class, 'show']);

Route::get('/order', function () {
    return view('order');
});

Route::resource('/guest', GuestController::class);

Route::get('/full-calender', [EventController::class, 'index']);

Route::post('/full-calender/save', [EventController::class, 'action']);

Route::get('/full-calender/{id}', [EventController::class, 'show']);

Route::get('/user/register', [PenggunaController::class, 'create']);

Route::post('/user/store', [PenggunaController::class, 'store']);

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/register', [LoginController::class, 'register']);

Route::post('/register/create', [LoginController::class, 'create']);

Route::post('logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');

route::middleware('auth')->group(function(){
    Route::get('/admin', [DashboardController::class, 'admin']);

    Route::post('/admin/delete/{id}', [DashboardController::class, 'destroy']);

    Route::resource('/adminrequest', App\Http\Controllers\LogController::class);

    Route::resource('/editruangan', App\Http\Controllers\RuanganController::class);

    Route::resource('/editpengguna', App\Http\Controllers\EditpenggunaController::class);

    Route::get('/adminedit', function () {
        return view('admin.edit');
    });
});


