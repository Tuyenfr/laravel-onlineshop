<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;
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
Route::get('admin/color', [AdminController::class, 'viewcolorpage']);
Route::get('admin/addcolor', [AdminController::class, 'viewaddcolorpage']);
Route::get('admin/country', [AdminController::class, 'viewcountrypage']);
Route::get('admin/addcountry', [AdminController::class, 'viewaddcountrypage']);
Route::get('admin/shippingcost', [AdminController::class, 'viewshippingcostpage']);
Route::get('admin/ordermanagement', [AdminController::class, 'viewordermanagementpage']);
Route::get('admin/services', [AdminController::class, 'viewservicespage']);
Route::get('admin/addservices', [AdminController::class, 'viewaddservicespage']);
Route::get('admin/editservices/{id}', [AdminController::class, 'vieweditservicespage']);
Route::post('admin/saveservices', [AdminController::class, 'saveservices']);
Route::put('admin/updateservices/{id}', [AdminController::class, 'updateservices']);
Route::delete('admin/deleteservices/{id}', [AdminController::class, 'deleteservices']);
Route::get('admin/faq', [AdminController::class, 'viewfaqpage']);
Route::get('admin/addfaq', [AdminController::class, 'viewaddfaqpage']);
Route::get('admin/editfaq/{id}', [AdminController::class, 'vieweditfaqpage']);
Route::post('admin/savefaq', [AdminController::class, 'savefaq']);
Route::put('admin/updatefaq/{id}', [AdminController::class, 'updatefaq']);
Route::delete('admin/deletefaq/{id}', [AdminController::class, 'deletefaq']);
Route::get('admin/registeredcustomer', [AdminController::class, 'viewregisteredcustomer']);
Route::get('admin/socialmedia', [AdminController::class, 'viewsocialmediapage']);
Route::get('admin/subscriber', [AdminController::class, 'viewsubscriberpage']);
Route::get('admin/adminprofile', [AdminController::class, 'viewadminprofilepage']);

Route::get('admin/pagesettings', [AdminController::class, 'viewadminpagesettings']);


//CategoryController

Route::get('admin/toplevelcategory', [CategoryController::class, 'viewtoplevelcategorypage']);
Route::get('admin/addtoplevelcategory', [CategoryController::class, 'viewaddtoplevelcategorypage']);
Route::get('admin/edittoplevelcategory/{id}', [CategoryController::class, 'viewedittoplevelcategorypage']);
Route::post('admin/savetoplevelcategory', [CategoryController::class, 'savetoplevelcategory']);
Route::put('admin/updatetoplevelcategory/{id}', [CategoryController::class, 'updatetoplevelcategory']);
Route::delete('admin/deletetoplevelcategory/{id}', [CategoryController::class, 'deletetoplevelcategory']);

Route::get('admin/midlevelcategory', [CategoryController::class, 'viewmidlevelcategorypage']);
Route::get('admin/addmidlevelcategory', [CategoryController::class, 'viewaddmidlevelcategorypage']);
Route::get('admin/editmidlevelcategory/{id}', [CategoryController::class, 'vieweditmidlevelcategorypage']);
Route::post('admin/savemidlevelcategory', [CategoryController::class, 'savemidlevelcategory']);
Route::put('admin/updatemidlevelcategory/{id}', [CategoryController::class, 'updatemidlevelcategory']);
Route::delete('admin/deletemidlevelcategory/{id}', [CategoryController::class, 'deletetmidlevelcategory']);

Route::get('admin/endlevelcategory', [CategoryController::class, 'viewendlevelcategorypage']);
Route::get('admin/addendlevelcategory', [CategoryController::class, 'viewaddendlevelcategorypage']);
Route::get('admin/editendlevelcategory/{id}', [CategoryController::class, 'vieweditendlevelcategorypage']);
Route::post('admin/saveendlevelcategory', [CategoryController::class, 'saveendlevelcategory']);
Route::put('admin/updateendlevelcategory/{id}', [CategoryController::class, 'updateendlevelcategory']);
Route::delete('admin/deleteendlevelcategory/{id}', [CategoryController::class, 'deleteendlevelcategory']);



//SliderController

Route::get('admin/managesliders', [SliderController::class, 'viewmanagesliderspage']);
Route::get('admin/addsliders', [SliderController::class, 'viewaddesliderspage']);
Route::get('admin/editsliders/{id}', [SliderController::class, 'vieweditesliderspage']);
Route::post('admin/saveslider',  [SliderController::class, 'saveslider']);
Route::put('admin/updateslider/{id}', [SliderController::class, 'updateslider']);
Route::delete('admin/deleteslider/{id}', [SliderController::class, 'deleteslider']);

//SettingController

Route::post('admin/savelogo', [SettingController::class, 'savelogo']);
Route::put('admin/updatelogo/{id}', [SettingController::class, 'updatelogo']);
Route::post('admin/savefavicon', [SettingController::class, 'savefavicon']);
Route::put('admin/updatefavicon/{id}', [SettingController::class, 'updatefavicon']);
Route::post('admin/saveinformation', [SettingController::class, 'saveinformation']);
Route::put('admin/updateinformation/{id}', [SettingController::class, 'updateinformation']);
Route::post('admin/savemessage', [SettingController::class, 'savemessage']);
Route::put('admin/updatemessage/{id}', [SettingController::class, 'updatemessage']);
Route::post('admin/saveproductsettings', [SettingController::class, 'saveproductsettings']);
Route::put('admin/updateproductsettings/{id}', [SettingController::class, 'updateproductsettings']);
Route::post('admin/saveonoffsection', [SettingController::class, 'saveonoffsection']);
Route::put('admin/updateonoffsection/{id}', [SettingController::class, 'updateonoffsection']);
Route::post('admin/savemetasection', [SettingController::class, 'savemetasection']);
Route::put('admin/updatemetasection/{id}', [SettingController::class, 'updatemetasection']);
Route::post('admin/savefeaturedproduct', [SettingController::class, 'savefeaturedproduct']);
Route::put('admin/updatefeaturedproduct/{id}', [SettingController::class, 'updatefeaturedproduct']);
Route::post('admin/savelatestproduct', [SettingController::class, 'savelatestproduct']);
Route::put('admin/updatelatestproduct/{id}', [SettingController::class, 'updatelatestproduct']);
Route::post('admin/savepopularproduct', [SettingController::class, 'savepopularproduct']);
Route::put('admin/updatepopularproduct/{id}', [SettingController::class, 'updatepopularproduct']);
Route::post('admin/savenewsletter', [SettingController::class, 'savenewsletter']);
Route::put('admin/updatenewsletter/{id}', [SettingController::class, 'updatenewsletter']);
Route::post('admin/savebanner', [SettingController::class, 'savebanner']);
Route::put('admin/updatebanner/{id}', [SettingController::class, 'updatebanner']);
Route::post('admin/savepaymentsettings', [SettingController::class, 'savepaymentsettings']);
Route::put('admin/updatepaymentsettings/{id}', [SettingController::class, 'updatepaymentsettings']);

//ShopController

Route::post('admin/savesize', [ShopController::class, 'savesize']);
Route::get('admin/editsize/{id}', [ShopController::class, 'vieweditsizepage']);
Route::put('admin/updatesize/{id}', [ShopController::class, 'updatesize']);
Route::delete('admin/deletesize/{id}', [ShopController::class, 'deletesize']);

Route::post('admin/savecolor', [ShopController::class, 'savecolor']);
Route::get('admin/editcolor/{id}', [ShopController::class, 'vieweditcolorpage']);
Route::put('admin/updatecolor/{id}', [ShopController::class, 'updatecolor']);
Route::delete('admin/deletecolor/{id}', [ShopController::class, 'deletecolor']);

Route::post('admin/savecountry', [ShopController::class, 'savecountry']);
Route::get('admin/editcountry/{id}', [ShopController::class, 'vieweditcountrypage']);
Route::put('admin/updatecountry/{id}', [ShopController::class, 'updatecountry']);
Route::delete('admin/deletecountry/{id}', [ShopController::class, 'deletecountry']);

Route::post('admin/saveshippingcost', [ShopController::class, 'saveshippingcost']);
Route::get('admin/editshippingcost/{id}', [ShopController::class, 'vieweditshippingcostpage']);
Route::put('admin/updateshippingcost/{id}', [ShopController::class, 'updateshippingcost']);
Route::delete('admin/deleteshippingcost/{id}', [ShopController::class, 'deleteshippingcost']);

//Product Controller

Route::get('admin/productmanagement', [ProductController::class, 'viewproductmanagementpage']);
Route::get('admin/addproduct', [ProductController::class, 'viewaddproductpage']);
Route::post('admin/saveproduct', [ProductController::class, 'saveproduct']);
Route::get('admin/editproduct/{id}', [ProductController::class, 'vieweditproductpage']);
Route::put('admin/updateproduct/{id}', [ProductController::class, 'updateproduct']);
Route::get('admin/deletephoto/{id}/{photo}', [ProductController::class, 'deletephoto']);
Route::delete('admin/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);

