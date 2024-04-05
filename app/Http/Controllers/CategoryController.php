<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewtoplevelcategorypage() {
        return view('admin.toplevelcategory');
    }

    public function viewaddtoplevelcategorypage() {
        return view('admin.addtoplevelcategory');
    }

    public function viewedittoplevelcategorypage() {
        return view('admin.edittoplevelcategory');
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
