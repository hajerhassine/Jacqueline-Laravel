<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\CategController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategoriecentreController;
use App\Http\Controllers\CentreController;
use App\Models\User;
use App\Models\Multipic;
use Illuminate\Support\Facades\DB;


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();
    return view('home', compact('brands','abouts','images'));
});

Route::get('/home', function () {
    
    echo " This is Home page ";
});


Route::get('/about', function () {
    return view('about');
});

  
Route::get('/contactasd-asdf-asdfsad', [ContactController::class, 'index'])->name('ariyan');
 


/// For Brand Route
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
/// For Offre Route
Route::get('/offre/all', [OffreController::class, 'AllOffre'])->name('all.offre');
Route::post('/offre/add', [OffreController::class, 'StoreOffre'])->name('store.offre');
Route::get('/offre/edit/{id}', [OffreController::class, 'Edit']);
Route::post('/offre/update/{id}', [OffreController::class, 'Update']);
Route::get('/offre/delete/{id}', [OffreController::class, 'Delete']);


/// For categ Route
Route::get('/categ/all', [CategController::class, 'AllCategories'])->name('all.categ');
Route::post('/categ/add', [CategController::class, 'StoreCateg'])->name('store.categ');
Route::get('/categ/edit/{id}', [CategController::class, 'Edit']);
Route::post('/categ/update/{id}', [CategController::class, 'Update']);
Route::get('/categ/delete/{id}', [CategController::class, 'Delete']);

/// For centre Route
Route::get('/centre/all', [CentreController::class, 'Allcentre'])->name('all.centre');
Route::post('/centre/add', [CentreController::class, 'Storecentre'])->name('store.centre');
Route::get('/centre/edit/{id}', [CentreController::class, 'Edit']);
Route::post('/centre/update/{id}', [CentreController::class, 'Update']);
Route::get('/centre/delete/{id}', [CentreController::class, 'Delete']);
/// For categorie centre Route
Route::get('/categoriecentre/all', [CategoriecentreController::class, 'AllCategoriecentre'])->name('all.categorie');
Route::get('/add/categoriecentre', [CategoriecentreController::class, 'AddCategorie'])->name('add.categoriecentre');
Route::post('/store/categorie', [CategoriecentreController::class, 'StoreCategorie'])->name('store.categorie');
Route::get('/categoriecentre/edit/{id}', [CategoriecentreController::class, 'EditCategorie']);
Route::post('/categoriecentre/update/{id}', [CategoriecentreController::class, 'UpdateCategorie']);
Route::get('/categoriecentre/delete/{id}', [CategoriecentreController::class, 'DeleteCategorie']);
// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name('store.image');

// Admin ALL Route
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');



//Accueil
Route::get('/accueil', [AccueilController::class, 'Accueil'])->name('accueil.home');


// Home About All Route

Route::get('/home/About', [AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/About', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/About', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);

//Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'Portfolio'])->name('portfolio');




// Amdin Contact Page Route 
Route::get('/admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'AdminStoreContact'])->name('store.contact');
Route::get('/admin/message', [ContactController::class, 'AdminMessage'])->name('admin.message');




/// Home Contact Page Route 
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name('contact.form');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');


/// Chanage Password and user Profile Route 
Route::get('/user/password', [ChangePass::class, 'CPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

// User Profile 
Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');