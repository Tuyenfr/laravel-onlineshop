<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewhomepage() {
        return view('client.home');
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
