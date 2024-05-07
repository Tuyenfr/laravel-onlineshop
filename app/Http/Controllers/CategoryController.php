<?php

namespace App\Http\Controllers;

use App\Models\Endlevelcategory;
use App\Models\Midlevelcategory;
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
        $midlevelcategories = Midlevelcategory::get();
        $increment = 1;
        return view('admin.midlevelcategory')->with('midlevelcategories', $midlevelcategories)->with('increment', $increment);
    }

    public function viewaddmidlevelcategorypage() {
        $toplevelcategories = Toplevelcategory::get();
        return view('admin.addmidlevelcategory')->with('toplevelcategories', $toplevelcategories);
    }

    public function vieweditmidlevelcategorypage($id) {
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategory = Midlevelcategory::find($id);
        return view('admin.editmidlevelcategory')->with('toplevelcategories', $toplevelcategories)->with('midlevelcategory', $midlevelcategory);
    }

    public function savemidlevelcategory(Request $request) {
        $midlevelcategory = new Midlevelcategory();
        $midlevelcategory->mcat_name = $request->input('mcat_name');
        $midlevelcategory->tcat_id = $request->input('tcat_id');

        $midlevelcategory->save();

        return back()->with('status', 'The mid level category has been added with success !');
    }

    public function updatemidlevelcategory(Request $request, $id) {
        $midlevelcategory = Midlevelcategory::find($id);
        $midlevelcategory->tcat_id = $request->input('tcat_id');
        $midlevelcategory->mcat_name = $request->input('mcat_name');

        $midlevelcategory->update();

        return back()->with('status', 'The mid level category has been updated with success !');
    }

    public function deletetmidlevelcategory(Request $request, $id) {
        $midlevelcategory = Midlevelcategory::find($id);
        $midlevelcategory->delete();

        return back()->with('status', 'The mid level category has been deleted with success !');
    }

    public function viewendlevelcategorypage() {
        $endlevelcategories = Endlevelcategory::get();
        $increment = 1;
        return view('admin.endlevelcategory')->with('endlevelcategories', $endlevelcategories)->with('increment', $increment);
    }

    public function viewaddendlevelcategorypage() {
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        return view('admin.addendlevelcategory')->with('toplevelcategories', $toplevelcategories)->with('midlevelcategories', $midlevelcategories);
    }

    public function vieweditendlevelcategorypage($id) {
        
        $endlevelcategory = Endlevelcategory::find($id);
        $toplevelcategories = Toplevelcategory::where("tcat_name", "!=", $endlevelcategory->tcat_id)->get();
        $midlevelcategories = Midlevelcategory::where("mcat_name", "!=", $endlevelcategory->mcat_id)->get();
        return view('admin.editendlevelcategory')->with('toplevelcategories', $toplevelcategories)->with('midlevelcategories', $midlevelcategories)->with('endlevelcategory', $endlevelcategory);
    }

    public function saveendlevelcategory(Request $request) {
        $endlevelcategory = new Endlevelcategory();
        $endlevelcategory->tcat_id = $request->input('tcat_id');
        $endlevelcategory->mcat_id = $request->input('mcat_id');
        $endlevelcategory->ecat_name = $request->input('ecat_name');

        $endlevelcategory->save();

        return back()->with('status', 'The end level category has been saved with success !');
    }

    public function updateendlevelcategory(Request $request, $id) {

        $this->validate($request, [
            'tcat_id' => 'required',
            'mcat_id' => 'required',
            'ecat_name' => 'required'
            ]
        );

        $endlevelcategory = Endlevelcategory::find($id);
        $endlevelcategory->tcat_id = $request->input('tcat_id');
        $endlevelcategory->mcat_id = $request->input('mcat_id');
        $endlevelcategory->ecat_name = $request->input('ecat_name');

        $endlevelcategory->update();
        //$endlevelcategory->update($request->all())

        return back()->with('status', 'The end level category has been updated with success !');
    }

    public function deleteendlevelcategory($id) {
        $endlevelcategory = Endlevelcategory::find($id);
        $endlevelcategory->delete();

        return back()->with('status', 'The end level category has been deleted with success !');
    }

}
