<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Favicon;
use App\Models\Featuredproduct;
use App\Models\Information;
use App\Models\Latestproduct;
use App\Models\Message;
use App\Models\Metasection;
use App\Models\Newsletter;
use App\Models\Onoffsection;
use App\Models\Popularproduct;
use App\Models\ProductSetting;
use App\Models\Banner;
use App\Models\Paymentsetting;

class AdminController extends Controller
{
    public function viewadmindashboard() {
        return view('admin.dashboard');
    }

    public function viewadminsettings() {
        
        $logo = Logo::first();
        $favicon = Favicon::first();
        $information = Information::first();
        $message = Message::first();
        $productsettings = ProductSetting::first();
        $onoffsection = Onoffsection::first();
        $metasection = Metasection::first();
        $featuredproduct = Featuredproduct::first();
        $latestproduct = Latestproduct::first();
        $popularproduct = Popularproduct::first();
        $newsletter = Newsletter::first();
        $banner = Banner::first();
        $paymentsettings = Paymentsetting::first();

        return view('admin.settings')
                ->with('logo', $logo)
                ->with('favicon', $favicon)
                ->with('information', $information)
                ->with('message', $message)
                ->with('productsettings', $productsettings)
                ->with('onoffsection', $onoffsection)
                ->with('metasection', $metasection)
                ->with('featuredproduct', $featuredproduct)
                ->with('latestproduct', $latestproduct)
                ->with('popularproduct', $popularproduct)
                ->with('newsletter', $newsletter)
                ->with('banner', $banner)
                ->with('paymentsettings', $paymentsettings);
    }

    public function viewsizepage() {
        return view('admin.size');
    }

    public function viewaddsizepage() {
        return view('admin.addsize');
    }

    public function vieweditsizepage() {
        return view('admin.editsize');
    }

    public function viewcolorpage() {
        return view('admin.color');
    }

    public function viewaddcolorpage() {
        return view('admin.addcolor');
    }

    public function vieweditcolorpage() {
        return view('admin.editcolor');
    }

    public function viewcountrypage() {
        return view('admin.country');
    }

    public function vieweditcountrypage() {
        return view('admin.editcountry');
    }

    public function viewshippingcostpage() {
        return view('admin.shippingcost');
    }

    public function vieweditshippingcostpage() {
        return view('admin.editshippingcost');
    }

    public function viewproductmanagementpage() {
        return view('admin.productmanagement');
    }

    public function viewordermanagementpage() {
        return view('admin.ordermanagement');
    }

    public function viewservicespage() {
        return view('admin.services');
    }

    public function viewaddservicespage() {
        return view('admin.addservices');
    }

    public function vieweditservicespage() {
        return view('admin.editservices');
    }

    public function viewfaqpage() {
        return view('admin.faq');
    }

    public function viewaddfaqpage() {
        return view('admin.addfaq');
    }

    public function vieweditfaqpage() {
        return view('admin.editfaq');
    }

    public function viewregisteredcustomer() {
        return view('admin.registeredcustomer');
    }

    public function viewadminpagesettings() {
        return view('admin.pagesettings');
    }

    public function viewsocialmediapage() {
        return view('admin.socialmedia');
    }

    public function viewsubscriberpage() {
        return view('admin.subscriber');
    }

    public function viewadminprofilepage() {
        return view('admin.adminprofile');
    }
}
