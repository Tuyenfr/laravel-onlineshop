<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Country;
use App\Models\Shippingcost;
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

    public function savecountry(Request $request) {
        $country = new Country();
        $country->country_name = $request->input('country_name');

        $country->save();

        return back()->with("status", "The country has been saved with success !");
    }

    public function vieweditcountrypage($id) {
        $country = Country::find($id);
        return view('admin.editcountry')->with('country', $country);
    }

    public function updatecountry(Request $request, $id) {
        $country = Country::find($id);
        $country->country_name =$request->input('country_name');

        $country->update();

        return back()->with('status', 'The country has been updated with success!');
    }

    public function deletecountry($id) {
        $country = Country::find($id);

        $country->delete();

        return back()->with('status', 'The country has been deleted with success !');
    }

    public function saveshippingcost(Request $request) {
        
        $shippingcost = new Shippingcost();
        $shippingcost->country_id = $request->input('country_id');
        $shippingcost->amount = $request->input('amount');

        $shippingcost->save();

        return back()->with('status', 'The shipping cost of has been saved with success!');
    }

    public function vieweditshippingcostpage($id) {
            $shippingcost = Shippingcost::find($id);
            return view('admin.editshippingcost')->with('shippingcost', $shippingcost);
    }

    public function updateshippingcost(Request $request, $id) {
        $shippingcost = Shippingcost::find($id);
        $shippingcost->amount = $request->input('amount');

        $shippingcost->update();

        return back()->with('status', 'The shipping cost has been updated with success !');
        
    }

    public function deleteshippingcost(Request $request, $id) {

        $shippingcost = Shippingcost::find($id);

        $shippingcost->delete();

        return back()->with('status', 'The shipping cost has been deleted with success');
    }

}
