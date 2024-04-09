<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Logo;
use App\Models\Favicon;

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
}
