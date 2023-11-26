<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

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
    return view('landingPage');
});

/*CSS*/
Route::get('/css/style.css', function () {
    return response(file_get_contents(public_path('assets/css/style.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.min.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/fontawesome-free/css/all.min.css', function () {
    return response(file_get_contents(public_path('vendor/fontawesome-free/css/all.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/img/logo-login.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-login.png')))->header('Content-Type', 'file/png');
});
Route::get('/img/logo-sidebar.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-sidebar.png')))->header('Content-Type', 'file/png');
});

    Route::middleware(['guest'])->group(function(){
        Route::get('form', function () {
            return view('formPage');
        }) -> name('form');
        Route::get('Thank-You', function () {
            return view('thankPage');
        })-> name('Thank-You');

        Route::get('ladingPage', [MemberController::class, 'home'])-> name('landingPage');
        Route::get('login', [SessionController::class, 'login'])-> name('masuk');
        Route::get('/register', [SessionController::class, 'register'])-> name('register');
        Route::post('create-admin', [SessionController::class, 'createUser'])-> name('create-admin');
        Route::post('/session', [SessionController::class, 'store'])-> name('login');
        Route::post('create-member', [MemberController::class, 'store'])-> name('create-membership');
        Route::post('create-user', [MemberController::class, 'buatMember'])-> name('buat-member');

    });

    Route::middleware(['auth'])->group(function () {
        // Rute untuk pengguna dengan tingkat 'admin'


        Route::middleware(['admin'])->group(function () {

            Route::get('dashboard', [AdminController::class, 'dashboardAdmin'])-> name('dashboard');
            Route::get('home', function () {
                return view('admin.home');
            })->name('home');

        Route::get('/logout', [SessionController::class, 'destroy'])-> name('logout');
        Route::get('createPage', [AdminController::class, 'createUser'])-> name('create');
        Route::post('create-user', [AdminController::class, 'store'])-> name('create-user');
        
        //tabel m_user
        Route::get('data-admin', [AdminController::class, 'index'])-> name('data-admin');
        Route::get('/m_user/edit/{id_user}', [AdminController::class, 'edit']) -> name('admin.edit');
        Route::post('/m_user/update/{id_user}', [AdminController::class, 'update']) -> name('admin.update');
        Route::post('/m_user/delete/{id_user}', [AdminController::class, 'destroy']) -> name('admin.hapus');

        //tabel t_membership
        Route::get('data-member', [MemberController::class, 'index'])-> name('data-member');
        Route::get('/t_membership/edit/{id_member}', [MemberController::class, 'edit']) -> name('member.edit');
        Route::post('/t_membership/update/{id_member}', [MemberController::class, 'update']) -> name('member.update');
        Route::post('/t_membership/delete/{id_member}', [MemberController::class, 'destroy']) -> name('member.hapus');
        

        //turnament
        Route::get('new-tur', [AdminController::class, 'newTur'])-> name('new-tur');
        Route::post('create-tur', [AdminController::class, 'createTur'])-> name('create-tur');
        Route::get('data-tur', [AdminController::class, 'turnament'])-> name('data-tur');
        Route::get('/turnament/edit/{id_turnament}', [AdminController::class, 'editTur']) -> name('admin.edit-tur');
        Route::post('/turnament/update/{id_turnament}', [AdminController::class, 'updateTur']) -> name('admin.update-tur');
        Route::post('/turnament/delete/{id_turnament}', [AdminController::class, 'destroyTur']) -> name('admin.hapus-tur');
        

        //peserta
        Route::get('data-peserta', [AdminController::class, 'indexPeserta'])-> name('data-peserta');

        //Taeam
        Route::get('/turnament/team/{id_turnament}', [AdminController::class, 'viewTeam']) -> name('admin.view-team');
        Route::post('create-team', [AdminController::class, 'buatTeam'])-> name('create-team');
        Route::post('/team/delete/{id_team}', [AdminController::class, 'destroyTeam']) -> name('admin.hapus-team');
        });
    
        Route::middleware(['member'])->group(function () {
            Route::get('home-member', function () {
                return view('member.home_member');
            })->name('home-member');

            Route::get('/profile', [MemberController::class, 'showProfile'])-> name('profile');
            Route::get('/turnament', [MemberController::class, 'turnament'])-> name('turnament');
       
            //daftar
            Route::get('/daftar/{id_turnament}', [MemberController::class, 'daftarTur']) -> name('daftar');
            Route::post('member.daftar', [MemberController::class, 'createDaftar'])-> name('member.daftar-tur');
            Route::get('logout-member', [SessionController::class, 'destroyMember'])-> name('logout-member');


            //team
            
            Route::get('/team', [MemberController::class, 'yourTeam'])-> name('team');
        });
    
        
    });