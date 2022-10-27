<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieproduitController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategorieserviceController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\CategoriecentreController;
use App\Http\Controllers\ServicesFrontController;
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
 
// Category Controller 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

/// For Brand Route
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
/// For Produit Route
Route::get('/produit/all', [ProduitController::class, 'Allproduit'])->name('all.produit');
Route::post('/produit/add', [ProduitController::class, 'Storeproduit'])->name('store.produit');
Route::get('/produit/edit/{id}', [ProduitController::class, 'Edit']);
Route::post('/produit/update/{id}', [ProduitController::class, 'Update']);
Route::get('/produit/delete/{id}', [ProduitController::class, 'Delete']);
// Home categoriep All Route


Route::get('/categorieproduit/all', [CategorieproduitController::class, 'AllCategorieproduit'])->name('all.categorie');
Route::get('/add/categorieproduit', [CategorieproduitController::class, 'AddCategorie'])->name('add.categorieproduit');
Route::post('/store/categorie', [CategorieproduitController::class, 'StoreCategorie'])->name('store.categorie');
Route::get('/categorieproduit/edit/{id}', [CategorieproduitController::class, 'EditCategorie']);
Route::post('/categorieproduit/update/{id}', [CategorieproduitController::class, 'UpdateCategorie']);
Route::get('/categorieproduit/delete/{id}', [CategorieproduitController::class, 'DeleteCategorie']);
/// For service Route
Route::get('/service/all', [ServiceController::class, 'Allservice'])->name('all.service');
Route::post('/service/add', [ServiceController::class, 'Storeservice'])->name('store.service');
Route::get('/service/edit/{id}', [ServiceController::class, 'Edit']);
Route::post('/service/update/{id}', [ServiceController::class, 'Update']);
Route::get('/service/delete/{id}', [ServiceController::class, 'Delete']);


//  categorieservice All Route

Route::get('/categorieservice/all', [CategorieserviceController::class, 'AllCategorieservice'])->name('all.categorie');
Route::get('/add/categorieservice', [CategorieserviceController::class, 'AddCategorieservice'])->name('add.categorieservice');
Route::post('/store/categorie', [CategorieserviceController::class, 'StoreCategorie'])->name('store.categorieService');
Route::get('/categorieservice/edit/{id}', [CategorieserviceController::class, 'EditCategorie']);
Route::post('/categorieservice/update/{id}', [CategorieserviceController::class, 'UpdateCategorie']);
Route::get('/categorieservice/delete/{id}', [CategorieserviceController::class, 'DeleteCategorie']);

//Service front

Route::get('/servicesfront' , [ServicesFrontController::class , 'Service']);

// Route::get('/services', [ServicesFrontController::class, 'Service'])->name('service.home');

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name('store.image');

// Admin ALL Route
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');



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