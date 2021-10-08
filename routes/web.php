<?php

use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('pages.about-us');
Route::get('/blog-carousel', [PagesController::class, 'blogCarousel'])->name('pages.blog-carousel');
Route::get('/blog-grid-2', [PagesController::class, 'blogGrid2'])->name('pages.blog-grid-2');
Route::get('/blog-grid-without-sidebar', [PagesController::class, 'blogGridWithoutSidebar'])->name('pages.blog-grid-without-sidebar');
Route::get('/blog-grid', [PagesController::class, 'blogGrid'])->name('pages.blog-grid');
Route::get('/blog-post', [PagesController::class, 'blogPost'])->name('pages.blog-post');
Route::get('/cart', [PagesController::class, 'cart'])->name('pages.cart');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('pages.checkout');
Route::get('/classic-blog', [PagesController::class, 'classicBlog'])->name('pages.classic-blog');
Route::get('/coming-soon', [PagesController::class, 'comingSoon'])->name('pages.coming-soon');
Route::get('/classic-blog-without-sidebar', [PagesController::class, 'classicBlogWithoutSidebar'])->name('pages.classic-blog-without-sidebar');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('pages.contact-us');
Route::get('/donations', [PagesController::class, 'donations'])->name('pages.donations');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('pages.privacy-policy');
Route::get('/search-results', [PagesController::class, 'searchResults'])->name('pages.search-results');
Route::get('/sermon-categories', [PagesController::class, 'sermonCategories'])->name('pages.sermon-categories');
Route::get('/sermons', [PagesController::class, 'sermons'])->name('pages.sermons');
Route::get('/shop', [PagesController::class, 'shop'])->name('pages.shop');
Route::get('/single-donation', [PagesController::class, 'singleDonation'])->name('pages.single-donation');
Route::get('/single-product', [PagesController::class, 'singleProduct'])->name('pages.single-product');
Route::get('/single-sermon', [PagesController::class, 'singleSermon'])->name('pages.single-sermon');
Route::get('/team-member', [PagesController::class, 'teamMember'])->name('pages.team-member');
Route::get('/typography', [PagesController::class, 'typography'])->name('pages.typography');