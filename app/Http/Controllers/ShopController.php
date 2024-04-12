<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Models\Size;

class ShopController extends Controller
{
    public function savesize(Request $request) {
        $size = new Size();
        $size->size_name = $request->input('size_name');
        $size->save();

        return back()->with('status', 'The size has been successfully saved !');
    }

    public function vieweditsizepage($id) {
        $size = Size::find($id);
        return view('admin.editsize')->with('size', $size);
    }

    public function updatesize(Request $request, $id) {
        $size = Size::find($id);
        $size->size_name = $request->input('size_name');

        $size->update();

        return back()->with('status', 'The size has been successuflly updated !');
    }

    public function deletesize($id) {
        $size = Size::find($id);
    
        $size->delete();

        return back()->with('status', 'The size has been successuflly deleted !');
    }

    public function savecolor(Request $request) {

        $this->validate($request, [
            'color_name' => 'required'
        ]);

        $color = new Color();
        $color->color_name = $request->input('color_name');

        $color->save();

        return back()->with('status', 'The color has been successfully saved !');
    }

    
    public function vieweditcolorpage($id) {
        $color = Color::find($id);
        return view('admin.editcolor')->with('color', $color);
    }

    public function updatecolor(Request $request, $id) {
        $color = Color::find($id);
        $color->color_name = $request->input('color_name');

        $color->update();

        return back()->with('status', 'The color has been successfully udpated !');
    }

    public function deletecolor($id) {
        
        $color = Color::find($id);

        $color->delete();

        return back()->with('status', 'The color has been successfully deleted !');

    }
}
