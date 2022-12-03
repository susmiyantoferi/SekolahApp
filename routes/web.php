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
use App\Http\Controllers\DiniyahController;
use App\Http\Controllers\MtsShifaController;
use App\Http\Controllers\RtqutsmaniyahController;
use App\Http\Controllers\SmkShifaController;
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

//Pendaftaran Santri Controller & Route
//Home
Route::get('/daftar', [DaftarController::class, 'Daftar'])->name('daftar');
Route::get('/add/santri', [DaftarController::class, 'addSantri'])->name('santri.add');
Route::post('/add/santri/store', [DaftarController::class, 'StoreSantri'])->name('store.santri.daftar');
Route::get('/add/orangtua', [DaftarController::class, 'AddOrangtua'])->name('orangtua.add');
Route::post('/add/orangtua/store', [DaftarController::class, 'StoreOrangtua'])->name('store.orangtua.daftar');
Route::get('/daftar/print/{id}', [DaftarController::class, 'DaftarPrint'])->name('daftar.print');

//Admin
Route::get('/admin/daftar', [DaftarController::class, 'AdminDaftar'])->name('admin.daftar');
Route::get('/santri/edit/{id}', [DaftarController::class, 'EditSantri']);
Route::post('/santri/update/{id}', [DaftarController::class, 'UpdateSantri']);
Route::get('/orangtua/edit/{id}', [DaftarController::class, 'EditOrangtua']);
Route::post('/orangtua/update/{id}', [DaftarController::class, 'UpdateOrangtua']);
Route::get('/daftar/delete/{id}', [DaftarController::class, 'DeletePendaftaran']);

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


//pendidikan mts Shifa Admin Route
Route::get('/mtsshifa/admin', [MtsShifaController::class, 'adminMtsshifa'])->name('admin.mtsshifa');
Route::get('/mtsshifa/admin/create', [MtsShifaController::class, 'createMtsshifa'])->name('create.mtsshifa');
Route::post('/mtsshifa/admin/add', [MtsShifaController::class, 'addMtsshifa'])->name('add.mtsshifa');
Route::get('/mtsshifa/edit/{id}', [MtsShifaController::class, 'editMtsshifa']);
Route::post('/mtsshifa/update/{id}', [MtsShifaController::class, 'updateMtsshifa']);
Route::get('/mtsshifa/delete/{id}', [MtsShifaController::class, 'deleteMtsshifa']);


//pendidikan mts shifa home
Route::get('/mtsshifa', [MtsShifaController::class, 'HomeMtsshifa'])->name('mtsshifa');

//pendidikan smk Shifa Admin route
Route::get('/smkshifa/admin', [SmkShifaController::class, 'adminSmkshifa'])->name('admin.smkshifa');
Route::get('/smkshifa/admin/create', [SmkShifaController::class, 'createSmkshifa'])->name('create.smkshifa');
Route::post('/smkshifa/admin/add', [SmkShifaController::class, 'addSmkshifa'])->name('add.smkshifa');
Route::get('/smkshifa/edit/{id}', [SmkShifaController::class, 'editSmkshifa']);
Route::post('/smkshifa/update/{id}', [SmkShifaController::class, 'updateSmkshifa']);
Route::get('/smkshifa/delete/{id}', [SmkShifaController::class, 'deleteSmkshifa']);


//pendidikan smk Shifa home
Route::get('/smkshifa', [SmkShifaController::class, 'HomeSmkshifa'])->name('smkshifa');


//pendidikan RTQ Utsmaniayah Admin
Route::get('/rtqusman/admin', [RtqutsmaniyahController::class, 'adminRtqusman'])->name('admin.rtqusman');
Route::get('/rtqusman/admin/create', [RtqutsmaniyahController::class, 'createRtqusman'])->name('create.rtqusman');
Route::post('/rtqusman/admin/add', [RtqutsmaniyahController::class, 'addRtqusman'])->name('add.rtqusman');
Route::get('/rtqusman/edit/{id}', [RtqutsmaniyahController::class, 'editRtqusman']);
Route::post('/rtqusman/update/{id}', [RtqutsmaniyahController::class, 'updateRtqusman']);
Route::get('/rtqusman/delete/{id}', [RtqutsmaniyahController::class, 'deleteRtqusman']);

//pendidikan RTQ Utsmaniayah Home
Route::get('/rtqusman', [RtqutsmaniyahController::class, 'HomeRtqusman'])->name('rtqusman');


//pendidikan diniyah admin
Route::get('/diniyah/admin', [DiniyahController::class, 'AdminDiniyah'])->name('admin.diniyah');
Route::get('/diniyah/admin/create', [DiniyahController::class, 'CreateDiniyah'])->name('create.diniyah');
Route::post('/diniyah/admin/add', [DiniyahController::class, 'AddDiniyah'])->name('add.diniyah');
Route::get('/diniyah/edit/{id}', [DiniyahController::class, 'EditDiniyah']);
Route::post('/diniyah/update/{id}', [DiniyahController::class, 'UpdateDiniyah']);
Route::get('/diniyah/delete/{id}', [DiniyahController::class, 'DeleteDiniyah']);

//pendidikan diniyah home
Route::get('/diniyah', [DiniyahController::class, 'HomeDiniyah'])->name('diniyah');


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
