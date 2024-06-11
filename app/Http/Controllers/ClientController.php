<?php

namespace App\Http\Controllers;

use App\Models\Billingaddress;
use App\Models\Cart;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Endlevelcategory;
use App\Models\Midlevelcategory;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSetting;
use App\Models\Service;
use App\Models\Shippingaddress;
use App\Models\Shippingcost;
use App\Models\Slidermanager;
use App\Models\Toplevelcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function viewhomepage()
    {

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

    public function viewaboutpage()
    {
        return view('client.about');
    }

    public function viewfaqpage()
    {
        return view('client.faq');
    }

    public function viewcontactpage()
    {
        return view('client.contact');
    }

    public function viewloginpage()
    {
        return view('client.login');
    }

    public function connect(Request $request)
    {

        $this->validate($request, [
            'cust_email' => 'required|email',
            'cust_password' => 'required',
        ]);

        $customer = Customer::where('cust_email', $request->input('cust_email'))->first();

        if (!$customer || !Hash::check($request->input('cust_password'), $customer->cust_password)) {

            return back()->with('error', 'Bad email or password');
        }

        Session::put('customer', $customer);

        return redirect('dashboard');
    }

    public function logout()
    {
        Session::forget('customer');

        return redirect('login');
    }

    public function viewregisterpage()
    {
        $countries = Country::get();
        return view('client.register')->with('countries', $countries);
    }

    public function registercustomer(Request $request)
    {

        $this->validate($request, [
            'cust_name' => 'required',
            'cust_cname' => 'required',
            'cust_email' => 'required|email|unique:customers,cust_email',
            'cust_phone' => 'required',
            'cust_address' => 'required',
            'cust_country' => 'required',
            'cust_city' => 'required',
            'cust_state' => 'required',
            'cust_zip' => 'required',
            'cust_password' => 'required|confirmed',
        ]);

        $customer = new Customer();

        $customer->cust_name = $request->input('cust_name');
        $customer->cust_cname = $request->input('cust_cname');
        $customer->cust_email = $request->input('cust_email');
        $customer->cust_phone = $request->input('cust_phone');
        $customer->cust_address = $request->input('cust_address');
        $customer->cust_country = $request->input('cust_country');
        $customer->cust_city = $request->input('cust_city');
        $customer->cust_state = $request->input('cust_state');
        $customer->cust_zip = $request->input('cust_zip');
        $customer->cust_password = bcrypt($request->input('cust_password'));

        $customer->save();

        Session::put('customer', $customer);

        return back()->with('status', 'Your account has been created with success !');
    }

    public function addproducttocart(Request $request, $id)
    {

        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $request->input('size_id'), $request->input('color_id'), $request->input('p_qty'));

        Session::put('cart', $cart);
        Session::put('topCart', $cart->items);

        return back();
    }

    public function updateproductqty(Request $request, $id)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $cart->updateQty($id, $request->quantity);

        Session::put('cart', $cart);
        Session::put('topCart', $cart->items);

        return back();
    }

    public function removeproduct($id)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        Session::put('cart', $cart);
        Session::put('topCart', $cart->items);

        if (count(Session::get('topCart')) == 0) {
            Session::forget('cart');
            Session::forget('topCart');
        }

        return back();
    }

    public function viewcartpage()
    {
        return view('client.cart');
    }

    public function viewdashboardpage()
    {
        return view('client.dashboard');
    }

    public function viewcheckoutpage()
    {
        $increment = 1;
        $shippingaddress = Shippingaddress::where('cust_s_email', Session::get('customer')->cust_email)->first();
        $billingaddress = Billingaddress::where('cust_b_email', Session::get('customer')->cust_email)->first();
        $shippingcost = Shippingcost::where('country_id', Session::get('customer')->cust_country)->first();

        return view('client.checkout')
            ->with('increment', $increment)
            ->with('shippingaddress', $shippingaddress)
            ->with('billingaddress', $billingaddress)
            ->with('shippingcost', $shippingcost);
    }

    public function paynow()
    {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $order = new Order();

        $order->cust_name = Session::get('customer')->cust_name;
        $order->cust_email = Session::get('customer')->cust_email;
        $order->cust_order = serialize($cart);
        $order->cust_transactionid = "tr_id_" . time();
        $order->cust_paidamount = Session::get('cart')->totalPrice;
        $order->cust_paymentmethod = "Paypal";
        $order->cust_paymentid = "cust_id_" . time();

        $order->save();

        Session::forget('cart');
        Session::forget('topCart');

        return redirect('/paymentsuccess')->with('status', 'Your payment has been processed with success !');
    }

    public function paymentsuccess()
    {
        return view('client.paymentsuccess');
    }

    public function viewprofilepage()
    {
        $customer = Customer::find(Session::get('customer')->id);
        $countries = Country::get();
        return view('client.profile')->with('customer', $customer)->with('countries', $countries);
    }

    public function updateprofile(Request $request, $id)
    {

        $this->validate($request, [
            'cust_name' => 'required',
            'cust_cname' => 'required',
            'cust_phone' => 'required',
            'cust_address' => 'required',
            'cust_country' => 'required',
            'cust_city' => 'required',
            'cust_state' => 'required',
            'cust_zip' => 'required',
        ]);

        $customer = Customer::find($id);

        $customer->cust_name = $request->input('cust_name');
        $customer->cust_cname = $request->input('cust_cname');
        $customer->cust_phone = $request->input('cust_phone');
        $customer->cust_address = $request->input('cust_address');
        $customer->cust_country = $request->input('cust_country');
        $customer->cust_city = $request->input('cust_city');
        $customer->cust_state = $request->input('cust_state');
        $customer->cust_zip = $request->input('cust_zip');

        $customer->update();

        Session::put('customer', $customer);

        return back()->with('status', 'Your account has been updated with success !');
    }

    public function viewbillingdetailspage()
    {

        $countries = Country::get();
        $customer = Customer::find(Session::get('customer')->id);

        $shippingaddress = Shippingaddress::where('cust_s_email', Session::get('customer')->cust_email)->first();

        if (!$shippingaddress) {

            $shippingDefaultAddress = new Shippingaddress();

            $shippingDefaultAddress->cust_s_name = $customer->cust_name;
            $shippingDefaultAddress->cust_s_cname = $customer->cust_cname;
            $shippingDefaultAddress->cust_s_phone = $customer->cust_phone;
            $shippingDefaultAddress->cust_s_email = $customer->cust_email;
            $shippingDefaultAddress->cust_s_address = $customer->cust_address;
            $shippingDefaultAddress->cust_s_country = $customer->cust_country;
            $shippingDefaultAddress->cust_s_city = $customer->cust_city;
            $shippingDefaultAddress->cust_s_state = $customer->cust_state;
            $shippingDefaultAddress->cust_s_zip = $customer->cust_zip;

            $shippingDefaultAddress->save();
        }

        $billingaddress = Billingaddress::where('cust_b_email', Session::get('customer')->cust_email)->first();

        if (!$billingaddress) {

            $billingDefaultAddress = new Billingaddress();

            $billingDefaultAddress->cust_b_name = $customer->cust_name;
            $billingDefaultAddress->cust_b_cname = $customer->cust_cname;
            $billingDefaultAddress->cust_b_phone = $customer->cust_phone;
            $billingDefaultAddress->cust_b_email = $customer->cust_email;
            $billingDefaultAddress->cust_b_address = $customer->cust_address;
            $billingDefaultAddress->cust_b_country = $customer->cust_country;
            $billingDefaultAddress->cust_b_city = $customer->cust_city;
            $billingDefaultAddress->cust_b_state = $customer->cust_state;
            $billingDefaultAddress->cust_b_zip = $customer->cust_zip;

            $billingDefaultAddress->save();
        }

        return view('client.billingdetails')->with('customer', $customer)->with('countries', $countries)->with('shippingaddress', $shippingaddress)->with('billingaddress', $billingaddress);
    }

    public function updateaddresses(Request $request, $id)
    {

        $billingaddress = Billingaddress::find($id);

        $billingaddress->cust_b_name = $request->input('cust_b_name');
        $billingaddress->cust_b_cname = $request->input('cust_b_cname');
        $billingaddress->cust_b_phone = $request->input('cust_b_phone');
        $billingaddress->cust_b_address = $request->input('cust_b_address');
        $billingaddress->cust_b_country = $request->input('cust_b_country');
        $billingaddress->cust_b_city = $request->input('cust_b_city');
        $billingaddress->cust_b_state = $request->input('cust_b_state');
        $billingaddress->cust_b_zip = $request->input('cust_b_zip');

        $billingaddress->update();

        $shippingaddress = Shippingaddress::find($id);

        $shippingaddress->cust_s_name = $request->input('cust_s_name');
        $shippingaddress->cust_s_cname = $request->input('cust_s_cname');
        $shippingaddress->cust_s_phone = $request->input('cust_s_phone');
        $shippingaddress->cust_s_address = $request->input('cust_s_address');
        $shippingaddress->cust_s_country = $request->input('cust_s_country');
        $shippingaddress->cust_s_city = $request->input('cust_s_city');
        $shippingaddress->cust_s_state = $request->input('cust_s_state');
        $shippingaddress->cust_s_zip = $request->input('cust_s_zip');

        $shippingaddress->update();

        return back()->with('status', 'The shipping and billing addresses have been updated with success !');
    }

    public function productbytopcategory($tcatid)
    {
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

    public function productbymidcategory($tcatid, $mcatid)
    {
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

    public function productbyendcategory($tcatid, $mcatid, $ecatid)
    {
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

    public function viewpasswordpage()
    {
        return view('client.password');
    }

    public function updatepassword(Request $request, $id)
    {

        $this->validate($request, [
            'cust_password' => 'required|confirmed',
        ]);

        $customer = Customer::find($id);

        $customer->cust_password = bcrypt($request->input('cust_password'));

        $customer->update();

        return back()->with('status', 'Your password has been updated with success !');
    }

    public function viewhistorypage()
    {
        $orders = Order::get();
        $increment = 1;
        $orders->transform(
            function ($order, $key) {
                $order->cust_order = unserialize($order->cust_order);
                return $order;
            }
        );

        return view('client.history')->with('orders', $orders)->with('increment', $increment);
    }

    public function viewsearchproductpage()
    {
        return view('client.searchproduct');
    }

    public function viewproductdetails($id)
    {
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

    public function viewcategorypage()
    {
        return view('client.category');
    }
}
