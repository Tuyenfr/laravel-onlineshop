<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function viewmanagesliderspage() {
        return view('admin.managesliders');
    }

    public function viewaddesliderspage() {
        return view('admin.addsliders');
    }

    public function vieweditesliderspage() {
        return view('admin.editsliders');
    }

}
