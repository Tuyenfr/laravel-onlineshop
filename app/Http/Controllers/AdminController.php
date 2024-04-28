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
use App\Models\Size;
use App\Models\Color;
use App\Models\Country;
use App\Models\Service;
use App\Models\Shippingcost;
use Illuminate\Support\Facades\Storage;

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
        $sizes = Size::get();
        $increment = 1;
        return view('admin.size')->with('sizes', $sizes)->with('increment', $increment);
    }

    public function viewaddsizepage() {
        return view('admin.addsize');
    }

    public function viewcolorpage() {
        $colors = Color::get();
        $increment = 1;
        return view('admin.color')->with('colors', $colors)->with('increment', $increment);
    }

    public function viewaddcolorpage() {
        return view('admin.addcolor');
    }

    public function viewcountrypage() {
        $countries = Country::get();
        $increment = 1;
        return view('admin.country')->with('countries', $countries)->with('increment', $increment);
    }

    public function viewaddcountrypage() {
        return view('admin.addcountry');
    }

    public function viewshippingcostpage() {
        $countries = Country::get();
        $shippingcosts = Shippingcost::get();
        $rows = Shippingcost::where('country_id', 'Rest of the world')->get();
        return view('admin.shippingcost')->with('shippingcosts', $shippingcosts)->with('countries', $countries)->with('rows', $rows);
    }

    public function viewordermanagementpage() {
        return view('admin.ordermanagement');
    }

    public function viewservicespage() {
        $services = Service::get();
        $increment = 1;
        return view('admin.services')->with('services', $services)->with('increment', $increment);
    }

    public function viewaddservicespage() {
        return view('admin.addservices');
    }

    public function vieweditservicespage($id) {
        $service = Service::find($id);
        return view('admin.editservices')->with('service', $service);
    }

    public function saveservices(Request $request) {

        $service = new Service();

        $this->validate($request, [

            'title' => 'required|string',
            'content' => 'required|string',
            'photo' => 'required|image|nullable|max:1999',
        ]);

        $photoFileName = $request->file('photo')->getClientOriginalName();
        $photoPathName = pathinfo($photoFileName, PATHINFO_FILENAME);
        $photoFileExt = $request->file('photo')->getClientOriginalExtension();
        $photoFileToStore = $photoPathName.'-'.time().".".$photoFileExt;

        $path = $request->file('photo')->storeAs('public/serviceimages', $photoFileToStore);

        $service->photo = $photoFileToStore;
        $service->title = $request->input('title');
        $service->content = $request->input('content');

        $service->save();

        return back()->with('status', 'The Service has been saved with success!');
        
    }

    public function updateservices(Request $request, $id) {
        $service = Service::find($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        if($request->file('photo')) {

            $this->validate($request, [
                'photo' => 'image|nullable|max:1999'
            ]);

            $photoFileName = $request->file('photo')->getClientOriginalName();
            $photoPathName = pathinfo($photoFileName, PATHINFO_FILENAME);
            $photoFileExt = $request->file('photo')->getClientOriginalExtension();
            $photoFileToStore = $photoPathName.'-'.time().'.'.$photoFileExt;
            Storage::delete("public/serviceimages/$service->photo");
            $path = $request->file('photo')->storeAs('public/serviceimages', $photoFileToStore);

            $service->photo = $photoFileToStore;
        }

        $service->title = $request->input('title');
        $service->content = $request->input('content');

        $service->update();

        return back()->with('status', 'The service has been updated with success!');
    }

    public function deleteservices($id) {
        $service = Service::find($id);
        Storage::delete("public/serviceimages/$service->photo");

        $service->delete();

        return back()->with('status', 'The service has been deleted with success!');
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
