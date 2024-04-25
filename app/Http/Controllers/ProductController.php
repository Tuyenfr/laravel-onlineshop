<?php

namespace App\Http\Controllers;

use App\Models\Endlevelcategory;
use App\Models\Midlevelcategory;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;
use App\Models\Toplevelcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewproductmanagementpage() {
        $products = Product::all();
        $increment = 1;
        return view('admin.productmanagement')->with('products', $products)->with('increment', $increment);
    }

    public function viewaddproductpage() {
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        $sizes = Size::get();
        $colors = Color::get();
        return view('admin.addproduct')->with('toplevelcategories', $toplevelcategories)
                                        ->with('midlevelcategories', $midlevelcategories)
                                        ->with('endlevelcategories', $endlevelcategories)
                                        ->with('sizes', $sizes)
                                        ->with('colors', $colors);
    }

    public function vieweditproductpage($id) {
        $product = Product::find($id);
        $toplevelcategories = Toplevelcategory::where('tcat_name', '!=', $product->tcat_id)->get();
        $midlevelcategories = Midlevelcategory::where('mcat_name', '!=', $product->mcat_id)->get();
        $endlevelcategories = Endlevelcategory::where('ecat_name', '!=', $product->ecat_id)->get();

        $selectedsizes = explode("*", $product->size);
        array_pop($selectedsizes);
        $selectedcolors = explode("*", $product->color);
        array_pop($selectedcolors);
        $selectedphotos = explode("*", $product->photo);
        array_pop($selectedphotos);

        $sizes = array();
        $sizes1 = Size::get();

        foreach ($sizes1 as $size1) {
            if(!(in_array($size1->size_name, $selectedsizes))) {
                array_push($sizes, $size1->size_name);
            }
        }

        $colors = array();
        $colors1 = Color::get();

        foreach ($colors1 as $color1) {
            if(!(in_array($color1->color_name, $selectedcolors))) {
                array_push($colors, $color1->color_name);
            }
        }

        return view('admin.editproduct')->with('product', $product)
                                        ->with('toplevelcategories', $toplevelcategories)
                                        ->with('midlevelcategories', $midlevelcategories)
                                        ->with('endlevelcategories', $endlevelcategories)
                                        ->with('selectedsizes', $selectedsizes)
                                        ->with('selectedcolors', $selectedcolors)
                                        ->with('selectedphotos', $selectedphotos)
                                        ->with('sizes', $sizes)
                                        ->with('colors', $colors);
    }

    public function saveproduct(Request $request) {

        $this->validate($request, [
            'tcat_id' => 'required|string',
            'mcat_id' => 'required|string',
            'ecat_id' => 'required|string',
            'p_name' => 'required|string',
            'p_old_price' => 'required|integer',
            'p_current_price' => 'required|integer',
            'p_qty' => 'required|integer',
            'size' => 'required|array',
            'size.*' => 'required|string',
            'color' => 'required|array',
            'color.*' => 'required|string',
            'p_featured_photo' => 'required|image|nullable|max:1999',
            'photo' => 'array|nullable',
            'photo.*' => 'image|nullable|max:1999',
            'p_description' => 'required|string',
            'p_short_description' => 'required|string',
            'p_feature' => 'required|string',
            'p_condition' => 'required|string',
            'p_return_policy' => 'required|string',
            'p_is_featured' => 'required|integer',
            'p_is_active' => 'required|integer'
        ]);

        $imagedata = "";
        $sizes = $request->input('size');
        $colors = $request->input('color');
        $photos = $request->file('photo');
        $sizedata = "";
        $colordata = "";

        // Getting sizes
        foreach($sizes as $size) {
            $sizedata = $sizedata.$size."*";
        }

        // Getting colors
        foreach($colors as $color) {
        $colordata = $colordata.$color."*";
    }

        // Getting photo
        if($photos != null) {
        foreach($photos as $photo) {
            // 1 : file name with extension

        $fileNameWithExt = $photo->getClientOriginalName();
        
        // print('<h1>'.$fileNameWithExt.'</h1>')

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $photo->getClientOriginalExtension();

        // print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        // print('<h1>'.$fileNameToStore.'</h1>')

        $imagedata = $imagedata.$fileNameToStore."*";

        // 5 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $photo->storeAs('public/productimages', $fileNameToStore);

        }
    }
        

        // 1 : file name with extension

        $fileNameWithExt = $request->file('p_featured_photo')->getClientOriginalName();
        
        // print('<h1>'.$fileNameWithExt.'</h1>');

        // 2 : file name

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // print('<h1>'.$fileName.'</h1>');

        // 3 : file extension

        $ext = $request->file('p_featured_photo')->getClientOriginalExtension();

        // print('<h1>'.$ext.'</h1>');

        // 4 : file name to store

        $fileNameToStore = $fileName.'-'.time().'.'.$ext;

        // print('<h1>'.$fileNameToStore.'</h1>')

        // 5 : upload image dans le projet laravel sous storage/app/public et dans la bdd

        $path = $request->file('p_featured_photo')->storeAs('public/productimages', $fileNameToStore);


        $product = new Product();

        $product->tcat_id = $request->input('tcat_id');
        $product->mcat_id = $request->input('mcat_id');
        $product->ecat_id = $request->input('ecat_id');
        $product->p_name = $request->input('p_name');
        $product->p_old_price = $request->input('p_old_price');
        $product->p_current_price = $request->input('p_current_price');
        $product->p_qty = $request->input('p_qty');
        $product->size = $sizedata;
        $product->color = $colordata;
        $product->p_featured_photo = $fileNameToStore;
        $product->photo = $imagedata;
        $product->p_description = $request->input('p_description');
        $product->p_short_description = $request->input('p_short_description');
        $product->p_feature = $request->input('p_feature');
        $product->p_condition = $request->input('p_condition');
        $product->p_return_policy = $request->input('p_return_policy');
        $product->p_is_featured = $request->input('p_is_featured');
        $product->p_is_active = $request->input('p_is_active');

        $product->save();
        
        return back()->with('status', 'The product has been saved with success !');
    }
}
