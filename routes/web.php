<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TasywidulContactController;
use App\Models\Multipic;
use Illuminate\Support\Facades\DB;



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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();
    return view('home', compact('brands', 'abouts', 'images'));
});

//Catagory Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);
Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);


// Brand Controller & Route 
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
//Multi Image Route
Route::get('/multi/image', [BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name('store.image');
//Logout Route
Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');


//Home Controller & Route (SLider)
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}', [HomeController::class, 'Edit']);
Route::post('/slider/update/{id}', [HomeController::class, 'Update']);
Route::get('/slider/delete/{id}', [HomeController::class, 'Delete']);

//Daftar Santri Controller & Route
Route::get('/daftar', [DaftarController::class, 'Daftar'])->name('daftar');
Route::get('/add/santri', [DaftarController::class, 'addSantri'])->name('santri.add');
Route::post('/add/santri/store', [DaftarController::class, 'StoreSantri'])->name('store.santri.daftar');
Route::get('/add/orangtua', [DaftarController::class, 'AddOrangtua']);
Route::post('/add/orangtua/store', [DaftarController::class, 'StoreOrangtua'])->name('store.orangtua.daftar');
Route::get('/daftar/print/{id}', [DaftarController::class, 'DaftarPrint'])->name('daftar.print');

//About Controller & Route 
Route::get('/home/about', [AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/about/update/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);
//Portofolio Route Page
Route::get('/portofolio', [AboutController::class, 'Portofolio'])->name('portofolio');


//Contact Controller & Route
Route::get('/admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/create/contact', [ContactController::class, 'CreateContact'])->name('create.contact');
Route::post('/admin/add/contact', [ContactController::class, 'AddContact'])->name('add.contact');
Route::get('/contact/edit/{id}', [ContactController::class, 'EditContact']);
Route::post('/contact/update/{id}', [ContactController::class, 'UpdateContact']);
Route::get('/contact/delete/{id}', [ContactController::class, 'DeleteContact']);
//Contact page Route
Route::get('/contact', [ContactController::class, 'HomeContact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name('contact.form');
//pendidikan home

Route::get('/mtsshifa', [ContactController::class, 'HomeMtsshifa'])->name('mtsshifa');
Route::get('/smkshifa', [ContactController::class, 'HomeSmkshifa'])->name('smkshifa');
Route::get('/rtqusman', [ContactController::class, 'HomeRtqusman'])->name('rtqusman');
Route::get('/diniyah', [ContactController::class, 'HomeDiniyah'])->name('diniyah');
//COntact Message Admin
Route::get('/contact/message', [ContactController::class, 'ContactMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'DeleteMessage']);


//pendidikan Tasywidul Admin Route
Route::get('/tasywidul/admin', [TasywidulContactController::class, 'adminTasywidul'])->name('admin.tasywidul');
Route::get('/tasywidul/admin/create', [TasywidulContactController::class, 'createData'])->name('create.tasywidul');
Route::post('/tasywidul/admin/add', [TasywidulContactController::class, 'AddData'])->name('add.tasywidul');
Route::get('/tasywidul/edit/{id}', [TasywidulContactController::class, 'EditData']);
Route::post('/tasywidul/update/{id}', [TasywidulContactController::class, 'UpdateData']);
Route::get('/tasywidul/delete/{id}', [TasywidulContactController::class, 'DeleteData']);


//pendidikan tasywidul home
Route::get('/tasywidul', [TasywidulContactController::class, 'HomeTasywidul'])->name('tasywidul');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    //$users = User::all();
    return view('admin.index');
})->name('dashboard');


//Change Password & User Profil Route
Route::get('/user/password', [ChangePassController::class, 'ChangePass'])->name('change.password');
Route::post('/password/update', [ChangePassController::class, 'UpdatePass'])->name('password.update');
//user profil route
Route::get('/user/profil', [ChangePassController::class, 'ChangeProfil'])->name('profil.update');
Route::post('/user/profil/update', [ChangePassController::class, 'UserUpdate'])->name('user.update');
