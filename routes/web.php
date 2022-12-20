<?php
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BlogController;
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


Route::group(['middleware' => ['auth','admin']], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('produit', [ProduitController::class, 'index']);
Route::get('add-produit', [ProduitController::class, 'create']);
Route::post('add-produit', [ProduitController::class, 'store']);
Route::get('edit-produit/{id}', [ProduitController::class, 'edit']);
Route::put('update-produit/{id}', [ProduitController::class, 'update']);
Route::delete('delete-produit/{id}', [ProduitController::class, 'destroy']);


Route::get('promo', [PromoController::class, 'index']);
Route::get('add-promo', [PromoController::class, 'create']);
Route::post('add-promo', [PromoController::class, 'store']);
Route::get('edit-promo/{id}', [PromoController::class, 'edit']);
Route::put('update-promo/{id}', [PromoController::class, 'update']);
Route::delete('delete-promo/{id}', [PromoController::class, 'destroy']);


Route::get('blog', [BlogController::class, 'index']);
Route::get('add-blog', [BlogController::class, 'create']);
Route::post('add-blog', [BlogController::class, 'store']);
Route::get('edit-blog/{id}', [BlogController::class, 'edit']);
Route::put('update-blog/{id}', [BlogController::class, 'update']);
Route::delete('delete-blog/{id}', [BlogController::class, 'destroy']);



});

Auth::routes();


Route::resource('prods', 'ProdController');

Route::get('categorie', [CategorieController::class, 'index']);
Route::get('add-categorie', [CategorieController::class, 'create']);
Route::post('add-categorie', [CategorieController::class, 'store']);
Route::get('edit-categorie/{id}', [CategorieController::class, 'edit']);
Route::put('update-categorie/{id}', [CategorieController::class, 'update']);
Route::delete('delete-categorie/{id}', [CategorieController::class, 'destroy']);

Route::get('add-letter', [LetterController::class, 'create']);
Route::post('add-letter', [LetterController::class, 'store']);

Route::get('/detail/{id}', 'FrontController@detail' );
Route::get('/search', [App\Http\Controllers\FrontController::class, 'search']);
Route::get('/ajouter_panier/{id}', 'FrontController@cart' );
Route::get('/panier', 'FrontController@panier' );


Route::get('/Boutique/Telephone', 'FrontController@telephone');
Route::get('/Boutique/Ordinateur', 'FrontController@ordinateur');
Route::get('/Boutique/Imprimante', 'FrontController@imprimante');
Route::get('/Boutique/Accessoire', 'FrontController@accessoire');
Route::get('/Contact', 'FrontController@contact');
Route::get('/Blog', 'FrontController@blog');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});