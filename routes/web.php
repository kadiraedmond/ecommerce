<?php
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CartController;
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
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('welcome');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('produit', [ProduitController::class, 'index']);
Route::get('add-produit', [ProduitController::class, 'create']);
Route::post('add-produit', [ProduitController::class, 'store']);
Route::get('edit-produit/{id}', [ProduitController::class, 'edit']);
Route::put('update-produit/{id}', [ProduitController::class, 'update']);
Route::delete('delete-produit/{id}', [ProduitController::class, 'destroy']);
Route::resource('prods', 'ProdController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', 'FrontController@detail' );
Route::get('/search', [App\Http\Controllers\FrontController::class, 'search']);
Route::get('/ajouter_panier/{id}', 'FrontController@cart' );
Route::get('/panier', 'FrontController@panier' );


Route::get('/Boutique/Telephone', 'FrontController@telephone');
Route::get('/Boutique/Ordinateur', 'FrontController@ordinateur');
Route::get('/Boutique/Imprimante', 'FrontController@imprimante');
Route::get('/Boutique/Accessoire', 'FrontController@accessoire');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
