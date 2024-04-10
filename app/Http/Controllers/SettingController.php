<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Logo;
use App\Models\Favicon;
use App\Models\Featuredproduct;
use App\Models\Information;
use App\Models\Message;
use App\Models\Metasection;
use App\Models\Onoffsection;
use App\Models\ProductSetting;

class SettingController extends Controller
{
    public function savelogo(Request $request) {

        $this->validate($request, [
            'photo_logo' => 'image|nullable|max:1999|required']);

        // 1 : file name with extension

        $fileNameWithExt = $request->file('photo_logo')->getClientOriginalName();
        
        // print('<h1>'.$fileNameWithExt.'</h1>');

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $request->file('photo_logo')->getClientOriginalExtension();

        // print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        // print('<h1>'.$fileNameToStore.'</h1>');

        // 5 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $request->file('photo_logo')->storeAs('public/logo', $fileNameToStore);

        $logoimage = new Logo();

        $logoimage->photo_logo = $fileNameToStore;

        $logoimage->save();

        return back()->with('status', "The logo image has been successfully saved !");

    }

    public function updatelogo(Request $request, $id) {

        $this->validate($request, [
            'photo_logo' => 'image|nullable|max:1999|required']);

        // 1 : file name with extension

        $fileNameWithExt = $request->file('photo_logo')->getClientOriginalName();
        
        print('<h1>'.$fileNameWithExt.'</h1>');

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $request->file('photo_logo')->getClientOriginalExtension();

        print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        print('<h1>'.$fileNameToStore.'</h1>');

        // 5 : delete old image

        $logoimage = Logo::find($id);

        print($logoimage->photo_logo);

        Storage::delete("public/logo/$logoimage->photo_logo");

        // 6 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $request->file('photo_logo')->storeAs('public/logo', $fileNameToStore);
        
        $logoimage->photo_logo = $fileNameToStore;

        $logoimage->update();

        return back()->with('status', 'The logo image has been succesfully updated !');
        
    }

    public function savefavicon(Request $request) {

        $this->validate($request, [
            'photo_favicon' => 'image|nullable|max:1999|required']);

        // 1 : file name with extension

        $fileNameWithExt = $request->file('photo_favicon')->getClientOriginalName();
        
        // print('<h1>'.$fileNameWithExt.'</h1>');

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $request->file('photo_favicon')->getClientOriginalExtension();

        // print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        // print('<h1>'.$fileNameToStore.'</h1>');

        // 5 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $request->file('photo_favicon')->storeAs('public/favicon', $fileNameToStore);

        $faviconimage = new Favicon();

        $faviconimage->photo_favicon = $fileNameToStore;

        $faviconimage->save();

        return back()->with('status', "The favicon image has been successfully saved !");
    
    }

    public function updatefavicon(Request $request, $id) {

        $this->validate($request, [
            'photo_favicon' => 'image|nullable|max:1999|required']);

        // 1 : file name with extension

        $fileNameWithExt = $request->file('photo_favicon')->getClientOriginalName();
        
        print('<h1>'.$fileNameWithExt.'</h1>');

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $request->file('photo_favicon')->getClientOriginalExtension();

        print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        print('<h1>'.$fileNameToStore.'</h1>');

        // 5 : delete old image

        $faviconimage = Favicon::find($id);

        print($faviconimage->photo_favicon);

        Storage::delete("public/favicon/$faviconimage->photo_favicon");

        // 6 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $request->file('photo_favicon')->storeAs('public/favicon', $fileNameToStore);
        
        $faviconimage->photo_favicon = $fileNameToStore;

        $faviconimage->update();

        return back()->with('status', 'The favicon image has been succesfully updated !');
        
    }

    public function saveinformation(Request $request) {

        $this->validate($request, [
            'newsletter_on_off' => 'required',
            'footer_copyright' => 'required',
            'contact_address' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_map_iframe' => 'required'
        ]);

        $information = new Information();
        $information->newsletter_on_off = $request->input('newsletter_on_off');
        $information->footer_copyright = $request->input('footer_copyright');
        $information->contact_address = $request->input('contact_address');
        $information->contact_email = $request->input('contact_email');
        $information->contact_phone = $request->input('contact_phone');
        $information->contact_map_iframe = $request->input('contact_map_iframe');

        $information->save();

        return back()->with("status", "The information has been saved successfully saved!");
    }

    public function updateinformation(Request $request, $id) {

        $this->validate($request, [
            'newsletter_on_off' => 'required',
            'footer_copyright' => 'required',
            'contact_address' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_map_iframe' => 'required'
        ]);

        $information = Information::find($id);
        $information->newsletter_on_off = $request->input('newsletter_on_off');
        $information->footer_copyright = $request->input('footer_copyright');
        $information->contact_address = $request->input('contact_address');
        $information->contact_email = $request->input('contact_email');
        $information->contact_phone = $request->input('contact_phone');
        $information->contact_map_iframe = $request->input('contact_map_iframe');

        $information->update();

        return back()->with("status", "The information has been updated successfully saved!");
    }

    public function savemessage(Request $request) {

        $this->validate($request, [
            'receive_email' => 'required',
            'receive_email_subject' => 'required',
            'receive_email_thank_you_message' => 'required',
            'forget_password_message' => 'required'
        ]);

        $message = new Message();
        $message->receive_email = $request->input('receive_email');
        $message->receive_email_subject = $request->input('receive_email_subject');
        $message->receive_email_thank_you_message = $request->input('receive_email_thank_you_message');
        $message->forget_password_message = $request->input('forget_password_message');

        $message->save();

        return back()->with('status', 'The message has been saved successfully !');
    }

    public function updatemessage(Request $request, $id) {

        $this->validate($request, [
            'receive_email' => 'required',
            'receive_email_subject' => 'required',
            'receive_email_thank_you_message' => 'required',
            'forget_password_message' => 'required'
        ]);

        $message = Message::find($id);
        $message->receive_email = $request->input('receive_email');
        $message->receive_email_subject = $request->input('receive_email_subject');
        $message->receive_email_thank_you_message = $request->input('receive_email_thank_you_message');
        $message->forget_password_message = $request->input('forget_password_message');

        $message->update();

        return back()->with('status', 'The message has been updated successfully !');
    }

    public function saveproductsettings(Request $request) {

        $this->validate($request, [
            'total_featured_product_home' => 'required',
            'total_latest_product_home'  => 'required',
            'total_popular_product_home'  => 'required'
        ]);

        $saveproductsettings = new ProductSetting();
        $saveproductsettings->total_featured_product_home = $request->input('total_featured_product_home');
        $saveproductsettings->total_latest_product_home = $request->input('total_latest_product_home');
        $saveproductsettings->total_popular_product_home = $request->input('total_popular_product_home');

        $saveproductsettings->save();

        return back()->with('status', 'The product settings have been saved successfully!');
    }

    public function updateproductsettings(Request $request, $id) {

        $this->validate($request, [
            'total_featured_product_home' => 'required',
            'total_latest_product_home' => 'required',
            'total_popular_product_home' => 'required'
        ]);

        $updateproductsettings = ProductSetting::find($id);
        $updateproductsettings->total_featured_product_home = $request->input('total_featured_product_home');
        $updateproductsettings->total_latest_product_home = $request->input('total_latest_product_home');
        $updateproductsettings->total_popular_product_home = $request->input('total_popular_product_home');

        $updateproductsettings->update();

        return back()->with('status', 'The product settings have been updated successfully!');
    }

    public function saveonoffsection(Request $request) {

        $this->validate($request, [
            'home_service_on_off' => 'required',
            'home_welcome_on_off'=> 'required',
            'home_featured_product_on_off' => 'required',
            'home_latest_product_on_off' => 'required',
            'home_popular_product_on_off' => 'required'
        ]);

        $saveonoffsection = new Onoffsection();
        $saveonoffsection->home_service_on_off = $request->input('home_service_on_off');
        $saveonoffsection->home_welcome_on_off = $request->input('home_welcome_on_off');
        $saveonoffsection->home_featured_product_on_off = $request->input('home_featured_product_on_off');
        $saveonoffsection->home_latest_product_on_off = $request->input('home_latest_product_on_off');
        $saveonoffsection->home_popular_product_on_off = $request->input('home_popular_product_on_off');

        $saveonoffsection->save();

        return back()->with('status', 'The home sections settings have been saved successfully!');
    }

    public function updateonoffsection(Request $request, $id) {

        $this->validate($request, [
            'home_service_on_off' => 'required',
            'home_welcome_on_off'=> 'required',
            'home_featured_product_on_off' => 'required',
            'home_latest_product_on_off' => 'required',
            'home_popular_product_on_off' => 'required'
        ]);

        $updateonoffsection = Onoffsection::find($id);
        $updateonoffsection->home_service_on_off = $request->input('home_service_on_off');
        $updateonoffsection->home_welcome_on_off = $request->input('home_welcome_on_off');
        $updateonoffsection->home_featured_product_on_off = $request->input('home_featured_product_on_off');
        $updateonoffsection->home_latest_product_on_off = $request->input('home_latest_product_on_off');
        $updateonoffsection->home_popular_product_on_off = $request->input('home_popular_product_on_off');

        $updateonoffsection->update();

        return back()->with('status', "The home sections settings have been successfully updated!");
    }

    public function savemetasection(Request $request) {

        $this->validate($request, [
            'meta_title_home' => 'required',
            'meta_keyword_home' => 'required',
            'meta_description_home' => 'required'
        ]);

        $savemetasection = new Metasection();
        $savemetasection->meta_title_home = $request->input('meta_title_home');
        $savemetasection->meta_keyword_home = $request->input('meta_keyword_home');
        $savemetasection->meta_description_home = $request->input('meta_description_home');

        $savemetasection->save();

        return back()->with('status', "The meta section has been successfully saved !");
    }

    public function updatemetasection(Request $request, $id) {

        $this->validate($request, [
            'meta_title_home' => 'required',
            'meta_keyword_home' => 'required',
            'meta_description_home' => 'required'
        ]);

        $updatemetasection = Metasection::find($id);
        $updatemetasection->meta_title_home = $request->input('meta_title_home');
        $updatemetasection->meta_keyword_home = $request->input('meta_keyword_home');
        $updatemetasection->meta_description_home = $request->input('meta_description_home');

        $updatemetasection->update();

        return back()->with('status', "The meta section has been successfully updated !");
    }

    public function savefeaturedproduct(Request $request) {

        $this->validate($request, [
            'featured_product_title' => 'required',
            'featured_product_subtitle' => 'required'
        ]);

        $savefeaturedproduct = new Featuredproduct();
        $savefeaturedproduct->featured_product_title = $request->input('featured_product_title');
        $savefeaturedproduct->featured_product_subtitle = $request->input('featured_product_subtitle');

        $savefeaturedproduct->save();

        return back()->with('status', 'The featured product section has been saved successfully !');
    }

    public function updatefeaturedproduct(Request $request, $id) {

        $this->validate($request, [
            'featured_product_title' => 'required',
            'featured_product_subtitle' => 'required'
        ]);

        $updatefeaturedproduct = Featuredproduct::find($id);
        $updatefeaturedproduct->featured_product_title = $request->input('featured_product_title');
        $updatefeaturedproduct->featured_product_subtitle = $request->input('featured_product_subtitle');

        $updatefeaturedproduct->update();

        return back()->with('status', 'The featured product section has been successfully updated!');
    }

}
