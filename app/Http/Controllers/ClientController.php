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

class ClientController extends Controller
{
    public function viewhomepage() {
    
        $sliders = Slidermanager::all();
        $services = Service::all();
        $countproduct = ProductSetting::first();
        $featuredproducts = Product::limit($countproduct->total_featured_product_home)->where('p_is_featured', 1)->get();
        $latestproducts = Product::limit($countproduct->total_latest_product_home)->where('p_is_active', 1)->get();
        $increment = 0;
        $increment1 = 0;

        return view('client.home')
        
            ->with('sliders', $sliders)
            ->with('services', $services)
            ->with('increment', $increment)
            ->with('increment1', $increment1)
            ->with('featuredproducts', $featuredproducts)
            ->with('latestproducts', $latestproducts);
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

    public function viewproductbycategorypage() {
        return view('client.viewproductbycategory');
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

    public function viewproductdetails() {
        return view('client.viewproductdetails');
    }

    public function viewcategorypage() {
        return view('client.category');
    }
}
