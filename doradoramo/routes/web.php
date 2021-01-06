<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//category-----------------------------------------------------------------------------------------------------
Route::get('/insertCategory', function() {
    return view('insertCategory');
});

Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class,'store'])->name('addCategory');

Route::get('showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');
//---------------------------------------------------------------------------------------------------------


//product-----------------------------------------------------------------------------------------------------
Route::get('insertProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('insertProduct');

Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editProduct');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');

Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateProduct');

Route::post('/searchProduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'showProducts'])->name('products');

Route::get('/product_detail/{id}', [App\Http\Controllers\ProductController::class, 'showProductDetail'])->name('product.detail');
//---------------------------------------------------------------------------------------------------------


//cart-----------------------------------------------------------------------------------------------------
Route::post('/addToCart', [App\Http\Controllers\CartController::class, 'add'])->name('add.to.cart');

Route::get('/myCart', [App\Http\Controllers\CartController::class, 'show'])->name('my.cart');

Route::get('/showMyCart',[App\Http\Controllers\CartController::class, 'showMyCart'])->name('show.myCart');

Route::get('/deleteCart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('deleteCart');
//---------------------------------------------------------------------------------------------------------


//order-----------------------------------------------------------------------------------------------------
Route::post('/createOrder',[App\Http\Controllers\OrderController::class, 'add'])->name('create.order');

Route::get('/myOrder', [App\Http\Controllers\OrderController::class, 'show'])->name('my.order');
//---------------------------------------------------------------------------------------------------------


//payment-----------------------------------------------------------------------------------------------------
//route for processing payment
Route::post('/paypal', [App\Http\Controllers\PaymentController::class, 'payWithPaypal'])->name('paypal');

//route for checking the status of the payment
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

//---------------------------------------------------------------------------------------------------------


//payment-----------------------------------------------------------------------------------------------------
Route::get('/search',[App\Http\Controllers\ProductController::class, 'index'])->name('search');

Route::get('/autocomplete',[App\Http\Controllers\ProductController::class, 'autocomplete'])->name('autocomplete');

Route::get('/pdfReport', [App\Http\Controllers\PDFController::class, 'pdfReport'])->name('pdfReport');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//---------------------------------------------------------------------------------------------------------


