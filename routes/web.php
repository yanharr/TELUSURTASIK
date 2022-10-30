<?php

use App\Http\Controllers\WisataController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\KelolaReviewController;
use App\Http\Controllers\AboutController;
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


// Route::get('/wisata', function () {
//     return view('customer.wisata.index');
// });


Route::get('/help', function () {
    return view('customer.help.index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});
// Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/wisata/{wisata}/show', [WisataController::class, 'UserLookDetailWisata'])->name('wisata.show');
Route::post('/wisata/add_review', [WisataController::class, 'AddReviewWisata'])->name('wisata.add_review');
Route::get('/wisata', [WisataController::class, 'UserLookWisata'])->name('wisata.index');
// kategori
Route::post('/kategoriWisata', [WisataController::class, 'showKategoriWisata']);

// Route::get('/wisata/{wisata}/review', [WisataController::class, 'UserReview'])->name('wisata.review');
// WISH LIST
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
// RECENTLY VISIT
Route::post('/wisata/recently-visit/add', [WisataController::class, 'addRecentlyVisit']);
Route::get('/wisata/recently-visit', [WisataController::class, 'showRecentlyVisit']);

#yanharr
Route::get('/DataUser', [UserController::class, 'showUserData'])->name('admin.home')->middleware('is_admin');
Route::get('/DataMitra', [UserController::class, 'showMitraData'])->middleware('is_admin');
Route::get('/DataWisataPending', [WisataController::class, 'showWisataDataPending'])->middleware('is_admin');
Route::get('/DataWisata', [WisataController::class, 'showWisataData'])->middleware('is_admin');
Route::get('/EditDataMitraUser/{id}', [UserController::class, 'UpdateUserData'])->middleware('is_admin');
Route::get('/EditDataWisata/{id}', [WisataController::class, 'UpdateWisataData'])->middleware('is_admin');
Route::post('/DataUserUpdate', [UserController::class, 'EditUserData'])->middleware('is_admin');
Route::post('/DataWisataUpdate', [WisataController::class, 'EditWisataData'])->middleware('is_admin');
Route::get('/DeleteDataUser/{id}', [UserController::class, 'DeleteDataUser'])->middleware('is_admin');
Route::get('/DeleteDataMitra/{id}', [UserController::class, 'DeleteDataMitra'])->middleware('is_admin');
Route::get('/DeleteDataWisata/{id}', [WisataController::class, 'DeleteWisataData'])->middleware('is_admin');

#cici help
Route::get('/Help', [HelpController::class, 'showHelpData'])->middleware('is_admin');
Route::get('/TambahBantuan', [HelpController::class, 'create'])->middleware('is_admin');
Route::post('/SimpanBantuan', [HelpController::class, 'store'])->middleware('is_admin');
Route::get('/EditBantuan/{id}', [HelpController::class, 'edit'])->middleware('is_admin');
Route::post('/UpdateBantuan/{id}', [HelpController::class, 'update'])->middleware('is_admin');
Route::get('/DeleteBantuan/{id}', [HelpController::class, 'delete'])->middleware('is_admin');
Route::get('/HelpUser', [MainController::class, 'showBantuanUser'])->name('help.user');
Route::get('/HelpMitra', [MainController::class, 'showBantuanMitra'])->name('help.mitra');
#yanharr sprint2
#user
Route::get('/showProfile/{id}',[UserController::class, 'showProfile']); #edit profile
Route::put('/ProfileUserUpdate/{id}', [UserController::class, 'EditProfileUser']); #edit profile
Route::get('/editPasswordUser',[UserController::class, 'showEditPasswordUser']);#show laman edit password
Route::put('/passwordsubmit', [UserController::class, 'EditPasswordUser']); #execute edit password user & Mitra
#mitra
Route::get('/showProfileMitra/{id}',[UserController::class, 'showProfileMitra']); #edit profile User
Route::put('/ProfileMitraUpdate/{id}', [UserController::class, 'EditProfileMitra']); #edit profile Mitra
Route::get('/editPasswordMitra/{id}',[UserController::class, 'showEditPasswordMitra']);#show laman edit password
#yanharr sprint3
Route::get('/about',[MainController::class, 'showAboutUs']);
Route::get('/edit-about-us', [AboutController::class, 'customAboutUs'])->middleware('is_admin'); 
Route::post('/edit-about-us/update/{id}', [AboutController::class, 'updateAboutUs'])->middleware('is_admin'); 

#cici landing page
Auth::routes();
Route::get('/', function () { return view('customer.home.index');});
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing.page');

#cici kelola ulasan
Route::get('/KelolaReview', [KelolaReviewController::class, 'showManageReviewData'])->middleware('is_admin');
Route::post('/KelolaReview/show/{id}', [KelolaReviewController::class, 'testimoniShow']);
Route::post('/KelolaReview/hide/{id}', [KelolaReviewController::class, 'testimoniHide']);
Route::get('/DeleteKelolaReview/{id}', [KelolaReviewController::class, 'delete'])->middleware('is_admin');

//rahma
Route::get('/Mitra', [DashboardPostsController::class, 'index'])->name('mitra.home')->middleware('is_mitra');
Route::get('/TambahWisata',[DashboardPostsController::class, 'create'])->middleware('is_mitra');
Route::post('/TambahWisata',[DashboardPostsController::class, 'store'])->middleware('is_mitra');
Route::get('/dashboard',[DashboardPostsController::class, 'dashboardMitra'])->middleware('is_mitra');
Route::get('/Detail/{id}',[DashboardPostsController::class, 'show'])->middleware('is_mitra');
Route::get('/EditWisata/{id}', [DashboardPostsController::class, 'edit'])->middleware('is_mitra');
Route::patch('/EditWisata', [DashboardPostsController::class, 'update'])->middleware('is_mitra');
Route::get('/Delete/{id}', [DashboardPostsController::class, 'delete'])->middleware('is_mitra');
Route::resource('wisatas', DashboardPostsController::class)->middleware('is_mitra');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/review', function () {
    return view('wisata.review');
});
