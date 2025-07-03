<?php

namespace App\Http\Controllers;

use App\Models\Slidermanager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function viewmanagesliderspage() {
        $sliders = Slidermanager::get();
        $increment = 1;
        return view('admin.managesliders')->with('sliders', $sliders)->with('increment', $increment);
    }

    public function viewaddesliderspage() {
        return view('admin.addsliders');
    }

    public function vieweditesliderspage($id) {
        $slider = Slidermanager::find($id);

        return view('admin.editsliders')->with('slider', $slider);
    }

    public function saveslider(Request $request) {
        $slider = new Slidermanager();

        $photoFileName = $request->file('photo')->getClientOriginalName();
        $photoFilePath = pathinfo($photoFileName, PATHINFO_FILENAME);
        $photoFileExt = $request->file('photo')->getClientOriginalExtension();
        $photoFileNameToStore = $photoFilePath.'-'.time().$photoFileExt;
        $path = $request->file('photo')->storeAs('public/sliders', $photoFileNameToStore);

        $slider->photo = $photoFileNameToStore;
        $slider->heading = $request->input('heading');
        $slider->content = $request->input('content');
        $slider->button_text = $request->input('button_text');
        $slider->button_url = $request->input('button_url');
        $slider->position = $request->input('position');

        $slider->save();

        return back()->with('status', 'The slider has been saved with success!');
    }

    public function updateslider(Request $request, $id) 
    {
        $this->validate($request, [
            'heading' => 'string|required',
            'content' => 'string|required',
            'button_text' => 'string|required',
            'button_url' => 'string|required',
            'position' => 'string|required',

        ]);

        $slider = Slidermanager::find($id);

        if (!$request->file('photo')->isValid()) {
            return back()->with('error', 'Le fichier n\'est pas valide.');
        } else {
            $this->validate($request, [
                'photo' => 'image|nullable|max:1999',
                ]
            );

            $photoFileName = $request->file('photo')->getClientOriginalName();
            $photoFilePath = pathinfo($photoFileName, PATHINFO_FILENAME);
            $photoFileExt = $request->file('photo')->getClientOriginalExtension();
            $photoFileNameToStore = $photoFilePath.'-'.time() . '.'. $photoFileExt;
            Storage::delete("public/sliders/$slider->photo");
            $path = $request->file('photo')->storeAs('public/sliders', $photoFileNameToStore);

            $slider->photo = $photoFileNameToStore;

        }
        
        $slider->heading = $request->input('heading');
        $slider->content = $request->input('content');
        $slider->button_text = $request->input('button_text');
        $slider->button_url = $request->input('button_url');
        $slider->position = $request->input('position');

        $slider->update();

        return back()->with('status', 'The slider has been updated with success!');

    }

    public function deleteslider($id) {
        $slider = Slidermanager::find($id);
        Storage::delete("public/sliders/$slider->photo");
        $slider->delete();

        return back()->with('status', 'The slider has been deleted with success!');
    }

}
