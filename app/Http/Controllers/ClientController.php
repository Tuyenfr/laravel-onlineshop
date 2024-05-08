<?php

namespace App\Http\Controllers;

use App\Models\Endlevelcategory;
use App\Models\Midlevelcategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Slidermanager;
use App\Models\Toplevelcategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSetting;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function viewhomepage() {
    
        $sliders = Slidermanager::all();
        $services = Service::all();
        $countproduct = ProductSetting::first();
        $featuredproducts = Product::limit($countproduct->total_featured_product_home)->where('p_is_featured', 1)->get();
        $latestproducts = Product::limit($countproduct->total_latest_product_home)->orderBy('created_at', 'desc')->get();
        $popularproducts = Product::limit($countproduct->total_popular_product_home)->orderBy('soldqty', 'desc')->get();
        $increment = 0;
        $increment1 = 0;

        return view('client.home')
        
            ->with('sliders', $sliders)
            ->with('services', $services)
            ->with('increment', $increment)
            ->with('increment1', $increment1)
            ->with('featuredproducts', $featuredproducts)
            ->with('latestproducts', $latestproducts)
            ->with('popularproducts', $popularproducts);
    }

    public function viewaboutpage() {
        return view('client.about');
    }

    public function viewfaqpage() {
        return view('client.faq');
    }

    public function viewcontactpage() {
        return view('client.contact');
    }

    public function viewloginpage() {
        return view('client.login');
    }

    public function viewregisterpage() {
        return view('client.register');
    }

    public function addproducttocart(Request $request, $id) {

        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $request->input('size_id'), $request->input('color_id'), $request->input('p_qty'));

        Session::put('cart', $cart);
        Session::put('topCart', $cart->items);
    
        //dd($cart)

        return back();
    }

    public function viewcartpage() {
        
        return view('client.cart');
    }

    public function viewdashboardpage() {
        return view('client.dashboard');
    }

    public function viewcheckoutpage() {
        return view('client.checkout');
    }

    public function viewprofilepage() {
        return view('client.profile');
    }

    public function viewbillingdetailspage() {
        return view('client.billingdetails');
    }

    public function productbytopcategory($tcatid) {
        $toplevelcategoryname = $tcatid;
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        $products = Product::where('tcat_id', $toplevelcategoryname)->get();

        return view('client.productbycategory')
            ->with('toplevelcategoryname', $toplevelcategoryname)
            ->with('toplevelcategories', $toplevelcategories)
            ->with('midlevelcategories', $midlevelcategories)
            ->with('endlevelcategories', $endlevelcategories)
            ->with('products', $products);
    }

    public function productbymidcategory($tcatid, $mcatid) {
        $toplevelcategoryname = $tcatid;
        $midlevelcategoryname = $mcatid;
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        $products = Product::where('tcat_id', $toplevelcategoryname)->where('mcat_id', $midlevelcategoryname)->get();

        return view('client.productbycategory')
            ->with('toplevelcategoryname', $toplevelcategoryname)
            ->with('midlevelcategoryname', $midlevelcategoryname)
            ->with('toplevelcategories', $toplevelcategories)
            ->with('midlevelcategories', $midlevelcategories)
            ->with('endlevelcategories', $endlevelcategories)
            ->with('products', $products);
    }

    public function productbyendcategory($tcatid, $mcatid, $ecatid) {
        $toplevelcategoryname = $tcatid;
        $midlevelcategoryname = $mcatid;
        $endlevelcategoryname = $ecatid;
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        $products = Product::where('tcat_id', $toplevelcategoryname)->where('mcat_id', $midlevelcategoryname)->where('ecat_id', $endlevelcategoryname)->get();

        return view('client.productbycategory')
            ->with('toplevelcategoryname', $toplevelcategoryname)
            ->with('midlevelcategoryname', $midlevelcategoryname)
            ->with('endlevelcategoryname', $endlevelcategoryname)
            ->with('toplevelcategories', $toplevelcategories)
            ->with('midlevelcategories', $midlevelcategories)
            ->with('endlevelcategories', $endlevelcategories)
            ->with('products', $products);
    }

    public function viewpasswordpage() {
        return view('client.password');
    }

    public function viewhistorypage() {
        return view('client.history');
    }

    public function viewsearchproductpage() {
        return view('client.searchproduct');
    }

    public function viewproductdetails($id) {
        $product = Product::find($id);
        $increment = 1;

        $selectedsizes = explode("*", $product->size);
        array_pop($selectedsizes);

        $selectedcolors = explode("*", $product->color);
        array_pop($selectedcolors);

        $selectedphotos = explode("*", $product->photo);
        array_pop($selectedphotos);

        return view('client.productdetails')
            ->with('product', $product)
            ->with('increment', $increment)
            ->with('selectedsizes', $selectedsizes)
            ->with('selectedcolors', $selectedcolors)
            ->with('selectedphotos', $selectedphotos);
    }

    public function viewcategorypage() {
        return view('client.category');
    }
}
