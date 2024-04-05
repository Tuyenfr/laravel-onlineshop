<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;

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

//ClientController

Route::get('/', [ClientController::class, 'viewhomepage']);
Route::get('/about', [ClientController::class, 'viewaboutpage']);
Route::get('/faq', [ClientController::class, 'viewfaqpage']);
Route::get('/contact', [ClientController::class, 'viewcontactpage']);
Route::get('/login', [ClientController::class, 'viewloginpage']);
Route::get('/register', [ClientController::class, 'viewregisterpage']);
Route::get('/cart', [ClientController::class, 'viewcartpage']);
Route::get('/dashboard', [ClientController::class, 'viewdashboardpage']);
Route::get('/checkout', [ClientController::class, 'viewcheckoutpage']);
Route::get('/profile', [ClientController::class, 'viewprofilepage']);
Route::get('/billingdetails', [ClientController::class, 'viewbillingdetailspage']);
Route::get('/productbycategory', [ClientController::class, 'viewproductbycategorypage']);
Route::get('/password', [ClientController::class, 'viewpasswordpage']);
Route::get('/history', [ClientController::class, 'viewhistorypage']);
Route::get('/searchproduct', [ClientController::class, 'viewsearchproductpage']);
Route::get('/productdetails', [ClientController::class, 'viewproductdetails']);
Route::get('/category', [ClientController::class, 'viewcategorypage']);

//AdminController

Route::get('admin', [AdminController::class, 'viewadmindashboard']);
Route::get('admin/settings', [AdminController::class, 'viewadminsettings']);
Route::get('admin/size', [AdminController::class, 'viewsizepage']);
Route::get('admin/addsize', [AdminController::class, 'viewaddsizepage']);
Route::get('admin/editsize', [AdminController::class, 'vieweditsizepage']);
Route::get('admin/color', [AdminController::class, 'viewcolorpage']);
Route::get('admin/addcolor', [AdminController::class, 'viewaddcolorpage']);
Route::get('admin/editcolor', [AdminController::class, 'vieweditcolorpage']);
Route::get('admin/country', [AdminController::class, 'viewcountrypage']);
Route::get('admin/editcountry', [AdminController::class, 'vieweditcountrypage']);
Route::get('admin/shippingcost', [AdminController::class, 'viewshippingcostpage']);
Route::get('admin/editshippingcost', [AdminController::class, 'vieweditshippingcostpage']);
Route::get('admin/productmanagement', [AdminController::class, 'viewproductmanagementpage']);
Route::get('admin/ordermanagement', [AdminController::class, 'viewordermanagementpage']);
Route::get('admin/services', [AdminController::class, 'viewservicespage']);
Route::get('admin/addservices', [AdminController::class, 'viewaddservicespage']);
Route::get('admin/editservices', [AdminController::class, 'vieweditservicespage']);
Route::get('admin/faq', [AdminController::class, 'viewfaqpage']);
Route::get('admin/addfaq', [AdminController::class, 'viewaddfaqpage']);
Route::get('admin/editfaq', [AdminController::class, 'vieweditfaqpage']);
Route::get('admin/registeredcustomer', [AdminController::class, 'viewregisteredcustomer']);
Route::get('admin/socialmedia', [AdminController::class, 'viewsocialmediapage']);
Route::get('admin/subscriber', [AdminController::class, 'viewsubscriberpage']);
Route::get('admin/adminprofile', [AdminController::class, 'viewadminprofilepage']);

Route::get('admin/pagesettings', [AdminController::class, 'viewadminpagesettings']);


//CategoryController

Route::get('admin/toplevelcategory', [CategoryController::class, 'viewtoplevelcategorypage']);
Route::get('admin/addtoplevelcategory', [CategoryController::class, 'viewaddtoplevelcategorypage']);
Route::get('admin/edittoplevelcategory', [CategoryController::class, 'viewedittoplevelcategorypage']);

Route::get('admin/midlevelcategory', [CategoryController::class, 'viewmidlevelcategorypage']);
Route::get('admin/addmidlevelcategory', [CategoryController::class, 'viewaddmidlevelcategorypage']);
Route::get('admin/editmidlevelcategory', [CategoryController::class, 'vieweditmidlevelcategorypage']);

Route::get('admin/endlevelcategory', [CategoryController::class, 'viewendlevelcategorypage']);
Route::get('admin/addendlevelcategory', [CategoryController::class, 'viewaddendlevelcategorypage']);
Route::get('admin/editendlevelcategory', [CategoryController::class, 'vieweditendlevelcategorypage']);

//SliderController

Route::get('admin/managesliders', [SliderController::class, 'viewmanagesliderspage']);
Route::get('admin/addsliders', [SliderController::class, 'viewaddesliderspage']);
Route::get('admin/editsliders', [SliderController::class, 'vieweditesliderspage']);