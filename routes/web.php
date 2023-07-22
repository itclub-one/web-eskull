<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\headerController;

use App\Http\Controllers\eskulController;
use App\Http\Controllers\exController;
use App\Http\Controllers\dokumentasiController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactpersonController;
use App\Http\Controllers\kepsekController;
use App\Http\Controllers\wakasekController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\userController;










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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/tentang-web-ini', [tentangwebController::class, 'tentangweb'])->name('tentangweb');
Route::get('/tentang-web-ini', function () {
    return view('layout.subnav.tentangkami.tentang-web-ini');
});
Route::get('/', [eskulController::class, 'eskul'])->name('index');

Route::get('/dokumentasi_', [dokumentasiController::class, 'dokumentasi'])->name('dokumentasi');
Route::get('/dokumentasi/{slug}', [dokumentasiController::class, 'detail_dokumentasi'])->name('detail_dokumentasi');

Route::get('/news', [beritaController::class, 'berita'])->name('berita');
Route::get('/news/{slug}', [beritaController::class, 'detail_berita'])->name('detail_berita');

Route::get('/contact-person', [contactpersonController::class, 'contactperson'])->name('contactperson');

Route::get('/kepala-sekolah', [kepsekController::class, 'kepsek'])->name('kepsek');
Route::get('/wakil-kepala-sekolah', [wakasekController::class, 'wakasek'])->name('wakasek');
Route::get('/visi-misi-sejarah', [eskulController::class, 'visimisisejarah'])->name('visimisisejarah');

Route::get('/pendaftaran', [pendaftaranController::class, 'pendaftaran_eskul'])->name('pendaftaran_eskul');
Route::get('/list-eskul-pendaftaran', [pendaftaranController::class, 'list_eskul'])->name('list_eskul');
Route::get('/pendaftaran/{slug}', [pendaftaranController::class, 'detail_pendaftaran'])->name('detail_pendaftaran');

// Route::get('/administrator', [administratorController::class, 'index'])->name('administrator');

Route::get('/eskul/{slug}', [exController::class, 'ex'])->name('ex');



// Validation
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/loginproses', [authController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [authController::class, 'logout'])->name('logout');






// Route::group(['middleware' => ['auth','ceklevel:root']], function(){

    Route::get('/users', [userController::class, 'index'])->name('users');
    Route::get('/register', [userController::class, 'register'])->name('register');
    Route::post('/registeruser', [userController::class, 'registeruser'])->name('registeruser');
    Route::get('/edituser/{id}', [userController::class, 'edituser'])->name('edituser{id}')->middleware('auth');
    Route::post('/updateuser/{id}', [userController::class, 'updateuser'])->name('updateuser');
    Route::get('/deleteuser/{id}', [userController::class, 'deleteuser'])->name('deleteuser');
    Route::get('edituser/editpassword/{id}', [userController::class, 'editpassword'])->name('editpassword{id}')->middleware('auth');
    Route::post('/updatepassword/{id}', [userController::class, 'updatepassword'])->name('updatepassword');
    Route::get('edituser/editpassword/backtoedituser/{id}', [userController::class, 'backtoedituser'])->name('backtoedituser');
    
    



 //anggota
    Route::get('/anggota', [anggotaController::class, 'index'])->name('anggota')->middleware('auth');
    Route::post('/insertdataanggota', [anggotaController::class, 'insertdataanggota'])->name('insertdataanggota');

    Route::get('/editanggota/{id}', [anggotaController::class, 'editanggota'])->name('editanggota{id}')->middleware('auth');
    Route::post('/updateanggota/{id}', [anggotaController::class, 'updateanggota'])->name('updateanggota');
    
    Route::get('/deleteanggota/{id}', [anggotaController::class, 'deleteanggota'])->name('deleteanggota');   

    Route::get('/anggota-eskul/export-excel', [anggotaController::class, 'export'])->name('export_pendaftaran_excel')->middleware('auth');

    
    
    //pendaftaran
       Route::get('/pendaftaran-eskul/export-excel', [pendaftaranController::class, 'export'])->name('export_pendaftaran_excel')->middleware('auth');
       Route::get('/pendaftaran-eskul', [pendaftaranController::class, 'index'])->name('pendaftaran')->middleware('auth');
       Route::post('/add-pendaftaran/{id}', [pendaftaranController::class, 'add_pendaftaran'])->name('add_pendaftaran')->middleware('auth');
       Route::post('/insertdatapendaftaran', [pendaftaranController::class, 'insertdatapendaftaran'])->name('insertdatapendaftaran');
       Route::post('/insertdatapendaftarantopendaftaran', [pendaftaranController::class, 'insertdatapendaftarantopendaftaran'])->name('insertdatapendaftarantopendaftaran');
       
       Route::get('/editpendaftaran/{id}', [pendaftaranController::class, 'editpendaftaran'])->name('editpendaftaran')->middleware('auth');
       Route::post('/updatependaftaran/{id}', [pendaftaranController::class, 'updatependaftaran'])->name('updatependaftaran');
       
       Route::get('/deletependaftaran/{id}', [pendaftaranController::class, 'deletependaftaran'])->name('deletependaftaran');   
       
       Route::post('/pendaftaran/isExistEmail', [pendaftaranController::class, 'isExistEmail'])->name('pendaftaran.isExistEmail');
       Route::post('/pendaftaran/isExistNIS', [pendaftaranController::class, 'isExistNIS'])->name('pendaftaran.isExistNIS');
       
    //kepsek
    Route::get('/kepsek', [kepsekController::class, 'index'])->name('kepsek')->middleware('auth');
    Route::post('/insertdatakepsek', [kepsekController::class, 'insertdatakepsek'])->name('insertdatakepsek');

    Route::get('/editkepsek/{id}', [kepsekController::class, 'editkepsek'])->name('editkepsek{id}')->middleware('auth');
    Route::post('/updatekepsek/{id}', [kepsekController::class, 'updatekepsek'])->name('updatekepsek');

    Route::get('/deletekepsek/{id}', [kepsekController::class, 'deletekepsek'])->name('deletekepsek');




    //wakasek
    Route::get('/wakasek', [wakasekController::class, 'index'])->name('wakasek')->middleware('auth');
    Route::post('/insertdatawakasek', [wakasekController::class, 'insertdatawakasek'])->name('insertdatawakasek');

    Route::get('/editwakasek/{id}', [wakasekController::class, 'editwakasek'])->name('editwakasek{id}')->middleware('auth');
    Route::post('/updatewakasek/{id}', [wakasekController::class, 'updatewakasek'])->name('updatewakasek');

    Route::get('/deletewakasek/{id}', [wakasekController::class, 'deletewakasek'])->name('deletewakasek');



    


// });




// //////////////////////////////////////////CRUD///////////////////////////////////////////// //
//eskul
Route::get('/administrator', [eskulController::class, 'index'])->name('eskul')->middleware('auth');
// Route::get('/admin', [eskulController::class, 'index'])->name('eskul')->middleware('auth');
Route::post('/insertdataeskul', [eskulController::class, 'insertdataeskul'])->name('insertdataeskul');

Route::get('/editeskul/{id}', [eskulController::class, 'editeskul'])->name('editeskul{id}')->middleware('auth');
Route::post('/updateeskul/{id}', [eskulController::class, 'updateeskul'])->name('updateeskul');

Route::get('/deleteeskul/{id}', [eskulController::class, 'deleteeskul'])->name('deleteeskul');




//dokumentasi
Route::get('/dokumentasi', [dokumentasiController::class, 'index'])->name('dokumentasi')->middleware('auth');
Route::post('/insertdatadokumentasi', [dokumentasiController::class, 'insertdatadokumentasi'])->name('insertdatadokumentasi');

Route::get('/editdokumentasi/{id}', [dokumentasiController::class, 'editdokumentasi'])->name('editdokumentasi{id}')->middleware('auth');
Route::post('/updatedokumentasi/{id}', [dokumentasiController::class, 'updatedokumentasi'])->name('updatedokumentasi');

Route::get('/deletedokumentasi/{id}', [dokumentasiController::class, 'deletedokumentasi'])->name('deletedokumentasi');




//berita
Route::get('/berita', [beritaController::class, 'index'])->name('berita')->middleware('auth');
Route::post('/insertdataberita', [beritaController::class, 'insertdataberita'])->name('insertdataberita');

Route::get('/editberita/{id}', [beritaController::class, 'editberita'])->name('editberita{id}')->middleware('auth');
Route::post('/updateberita/{id}', [beritaController::class, 'updateberita'])->name('updateberita');

Route::get('/deleteberita/{id}', [beritaController::class, 'deleteberita'])->name('deleteberita');





