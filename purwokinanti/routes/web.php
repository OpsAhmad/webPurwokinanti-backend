<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KependudukanController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use App\Models\Keluarga;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
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


/*-------------------------------------------------------------------------
---                      Public part                                    ---
--------------------------------------------------------------------------*/
/* MIDDLEWARE VISITS / countVisitor => Menghitung jumlah visitor */

Route::group(['middleware' => ['visits']], function () {
    Route::get('/', [PublicController::class, 'index'])->name('index');
    Route::get('/berita', [BeritaController::class, 'page'])->name('berita');
    Route::get('/berita/single/{slug}', [BeritaController::class, 'single'])->name('berita.single');
    Route::get('/agenda', [AgendaController::class, 'page'])->name('agenda');
    Route::get('/agenda/sigle/{slug}', [AgendaController::class, 'single'])->name('agenda.single');
    Route::get('/kependudukan', [KependudukanController::class, 'page'])->name('kependudukan');
    Route::get('/kb', [KeluargaController::class, 'page_kb'])->name('kb');
    Route::get('/ks', [KeluargaController::class, 'page_ks'])->name('ks');
    Route::get('/pus', [KeluargaController::class, 'page_pus'])->name('pus');
    Route::get('/detail/{id}', [KeluargaController::class, 'page_detail'])->name('keluarga.detail');
});
/*-------------------------------------------------------------------------
---                      Admin part                                    ---
--------------------------------------------------------------------------*/

Route::group(['middleware' => ['guest'], 'prefix' => '/admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login_verify'])->name('admin.login.verify');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/admin'], function () {
    Route::get('/', [dashboardController::class, 'index'])->name('admin.index');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect(route('admin.login'));
    })->name('admin.logout');
    Route::view('profile/{username}', 'admin.profile')->name('admin.profile');
    Route::post('profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
});

Route::group(['middleware' => ['auth'], 'prefix' => '/admin/berita'], function () {
    Route::get('/', [BeritaController::class, 'list'])->name('admin.berita');
    Route::get('/tambah', [BeritaController::class, 'add'])->name('admin.berita.add');
    Route::get('/edit/{slug}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::patch('/update/', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::get('/destroy/{slug}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
    Route::post('/insert', [BeritaController::class, 'insert'])->name('admin.berita.insert');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/admin/agenda'], function () {
    Route::get('/', [AgendaController::class, 'list'])->name('admin.agenda');
    Route::get('/tambah', [AgendaController::class, 'add'])->name('admin.agenda.add');
    Route::get('/edit/{slug}', [AgendaController::class, 'edit'])->name('admin.agenda.edit');
    Route::patch('/update/', [AgendaController::class, 'update'])->name('admin.agenda.update');
    Route::get('/destroy/{slug}', [AgendaController::class, 'destroy'])->name('admin.agenda.destroy');
    Route::post('/insert', [AgendaController::class, 'insert'])->name('admin.agenda.insert');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/admin/kependudukan'], function () {
    //penduduk
    Route::get('/', [KependudukanController::class, 'list'])->name('admin.kependudukan');
    Route::get('/penduduk', [KependudukanController::class, 'list'])->name('admin.kependudukan.penduduk');
    Route::get('/edit/{id}', [KependudukanController::class, 'edit'])->name('admin.kependudukan.edit');
    Route::get('/tambah/{keluarga_id}', [KependudukanController::class, 'add'])->name('admin.kependudukan.add');
    Route::post('/insert', [KependudukanController::class, 'insert'])->name('admin.kependudukan.insert');
    Route::get('/destroy/{id}', [KependudukanController::class, 'destroy'])->name('admin.kependudukan.destroy');
    Route::get('/detail/{id}', [KependudukanController::class, 'detail'])->name('admin.kependudukan.detail');
    Route::patch('/update/', [KependudukanController::class, 'update'])->name('admin.kependudukan.update');
    //keluarga
    Route::get('/keluarga', [KeluargaController::class, 'list'])->name('admin.kependudukan.keluarga');
    Route::get('/keluarga/tambah', [KeluargaController::class, 'add'])->name('admin.kependudukan.keluarga.add');
    Route::post('/keluarga/insert', [KeluargaController::class, 'insert'])->name('admin.kependudukan.keluarga.insert');
    Route::get('/keluarga/edit/{id}', [KeluargaController::class, 'edit'])->name('admin.kependudukan.keluarga.edit');
    Route::patch('/keluarga/update/', [KeluargaController::class, 'update'])->name('admin.kependudukan.keluarga.update');
    Route::get('/keluarga/destroy/{id}', [KeluargaController::class, 'destroy'])->name('admin.kependudukan.keluarga.destroy');
    Route::get('/keluarga/detail/{id}', [KeluargaController::class, 'detail'])->name('admin.kependudukan.keluarga.detail');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/admin/kepengurusan'], function () {
    Route::get('/', [KepengurusanController::class, 'list'])->name('admin.kepengurusan');
    Route::get('/add', [KepengurusanController::class, 'add'])->name('admin.kepengurusan.add');
    Route::post('/insert', [KepengurusanController::class, 'insert'])->name('admin.kepengurusan.insert');
    Route::get('/edit/{id}', [KepengurusanController::class, 'edit'])->name('admin.kepengurusan.edit');
    Route::patch('/update', [KepengurusanController::class, 'update'])->name('admin.kepengurusan.update');
    Route::get('/destroy/{id}', [KepengurusanController::class, 'destroy'])->name('admin.kepengurusan.destroy');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/admin/halaman/'], function () {
    /* Handle */
    Route::patch('update', [PageController::class, 'update'])->name('admin.halaman.update');

    /* View */
    Route::get('/title', [PageController::class, 'title'])->name('admin.halaman.title');
    Route::get('/favicon', [PageController::class, 'favicon'])->name('admin.halaman.favicon');
    Route::get('/footer', [PageController::class, 'footer'])->name('admin.halaman.footer');
    Route::get('/runningtext', [PageController::class, 'running_text'])->name('admin.halaman.runningText');

    Route::get('beranda/jumbotron', [PageController::class, 'jumbotron'])->name('admin.halaman.beranda.jumbotron');
    Route::get('beranda/tentang', [PageController::class, 'tentang'])->name('admin.halaman.beranda.tentang');
});
