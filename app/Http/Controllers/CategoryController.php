<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toplevelcategory;

class CategoryController extends Controller
{
    public function viewtoplevelcategorypage() {
        $toplevelcategories = Toplevelcategory::get();
        $increment = 1;
        return view('admin.toplevelcategory')->with('toplevelcategories', $toplevelcategories)->with('increment', $increment);
    }

    public function viewaddtoplevelcategorypage() {
        return view('admin.addtoplevelcategory');
    }

    public function viewedittoplevelcategorypage($id) {
        $toplevelcategory = Toplevelcategory::find($id);
        return view('admin.edittoplevelcategory')->with('toplevelcategory', $toplevelcategory);
    }

    public function savetoplevelcategory(Request $request) {
        $this->validate($request, [ 
        'tcat_name' => 'required',
        'show_on_menu' => 'required'
        ]);

        $toplevelcategory = new Toplevelcategory();
        $toplevelcategory->tcat_name = $request->input('tcat_name');
        $toplevelcategory->show_on_menu = $request->input('show_on_menu');

        $toplevelcategory->save();

        return back()->with('status', 'The top level category has been saved with success !');
    }

    public function updatetoplevelcategory(Request $request, $id) {
        $toplevelcategory = Toplevelcategory::find($id);
        $toplevelcategory->tcat_name = $request->input('tcat_name');
        $toplevelcategory->show_on_menu = $request->input('show_on_menu');

        $toplevelcategory->update();

        return back()->with('status', 'The category name has been updated with success !');
    }

    public function deletetoplevelcategory($id) {
        $toplevelcategory = Toplevelcategory::find($id);
        $toplevelcategory->delete();

        return back()->with('status', 'The category has been deleted with success !');
    }

    public function viewmidlevelcategorypage() {
        return view('admin.midlevelcategory');
    }

    public function viewaddmidlevelcategorypage() {
        return view('admin.addmidlevelcategory');
    }

    public function vieweditmidlevelcategorypage() {
        return view('admin.editmidlevelcategory');
    }

    public function viewendlevelcategorypage() {
        return view('admin.endlevelcategory');
    }

    public function viewaddendlevelcategorypage() {
        return view('admin.addendlevelcategory');
    }

    public function vieweditendlevelcategorypage() {
        return view('admin.editendlevelcategory');
    }

}
