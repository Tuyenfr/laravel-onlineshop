<?php

namespace App\Http\Controllers;

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
}
