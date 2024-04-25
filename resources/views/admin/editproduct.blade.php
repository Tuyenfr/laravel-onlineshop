@extends('admin_layout.master')

@section('title')

Edit product

@endsection

@section('content')

<!-- start content -->
<div class="content-wrapper">
  <section class="content-header">
     <div class="content-header-left">
        <h1>Edit Product</h1>
     </div>
     <div class="content-header-right">
        <a href="{{url('admin/productmanagement')}}" class="btn btn-primary btn-sm">View All</a>
     </div>
  </section>
  @if(Session::has('status'))
          
  <section class="content" style="min-height:auto;margin-bottom: -30px;">
 
     <div class="row">
        <div class="col-md-12">
           <div class="callout callout-success">
              <p>{{Session::get('status')}}</p>
           </div>
        </div>
     </div>
  </section>
  @endif
  <section class="content">
     <div class="row">
        <div class="col-md-12">
           <form class="form-horizontal" action="{{url('admin/updateproduct', [$product->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box box-info">
                 <div class="box-body">
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Top Level Category Name <span>*</span></label>
                       <div class="col-sm-4">
                          <select name="tcat_id" class="form-control select2 top-cat" required>
                             <option value="{{$product->tcat_id}}">{{$product->tcat_id}}</option>
                             @foreach ($toplevelcategories as $toplevelcategory)
                             <option value="{{$toplevelcategory->tcat_name}}" >{{$toplevelcategory->tcat_name}}</option>
                             @endforeach
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Mid Level Category Name <span>*</span></label>
                       <div class="col-sm-4">
                          <select name="mcat_id" class="form-control select2 mid-cat" required>
                           <option value="{{$product->mcat_id}}">{{$product->mcat_id}}</option>
                           @foreach ($midlevelcategories as $midlevelcategory)
                           <option value="{{$midlevelcategory->mcat_name}}" >{{$midlevelcategory->mcat_name}}</option>
                           @endforeach
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">End Level Category Name <span>*</span></label>
                       <div class="col-sm-4">
                          <select name="ecat_id" class="form-control select2 end-cat" required>
                           <option value="{{$product->ecat_id}}">{{$product->ecat_id}}</option>
                           @foreach ($endlevelcategories as $endlevelcategory)
                           <option value="{{$endlevelcategory->ecat_name}}" >{{$endlevelcategory->ecat_name}}</option>
                           @endforeach
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Product Name <span>*</span></label>
                       <div class="col-sm-4">
                          <input type="text" name="p_name" class="form-control" value="{{$product->p_name}}" required>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Old Price<br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
                       <div class="col-sm-4">
                          <input type="text" name="p_old_price" class="form-control" value="{{$product->p_old_price}}" required>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Current Price <span>*</span><br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
                       <div class="col-sm-4">
                          <input type="text" name="p_current_price" class="form-control" value="{{$product->p_current_price}}" required>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Quantity <span>*</span></label>
                       <div class="col-sm-4">
                          <input type="text" name="p_qty" class="form-control" value="{{$product->p_qty}}" required>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Select Size</label>
                       <div class="col-sm-4">
                          <select name="size[]" class="form-control select2" multiple="multiple" required>
                           @foreach($selectedsizes as $selectedsize)
                             <option value="{{$selectedsize}}" selected>{{$selectedsize}}</option>
                           @endforeach
                           @foreach($sizes as $size)
                             <option value="{{$size}}" >{{$size}}</option>
                           @endforeach
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Select Color</label>
                       <div class="col-sm-4">
                          <select name="color[]" class="form-control select2" multiple="multiple" required>
                           @foreach($selectedcolors as $selectedcolor)
                             <option value="{{$selectedcolor}}" selected>{{$selectedcolor}}</option>
                           @endforeach
                           @foreach($colors as $color)
                           <option value="{{$color}}">{{$color}}</option>
                           @endforeach
                     
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Existing Featured Photo</label>
                       <div class="col-sm-4" style="padding-top:4px;">
                          <img src="{{asset('storage/productimages/'.$product->p_featured_photo)}}" alt="" style="width:150px;">
                          <input type="hidden" name="current_photo" value="{{$product->p_featured_photo}}">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Change Featured Photo </label>
                       <div class="col-sm-4" style="padding-top:4px;">
                          <input type="file" name="p_featured_photo">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Other Photos</label>
                       <div class="col-sm-4" style="padding-top:4px;">
                          <table id="ProductTable" style="width:100%;">
                             <tbody>
                              @foreach($selectedphotos as $selectedphoto)
                                <tr>
                                 <td>
                                    <img src="{{asset('storage/productimages/'.$selectedphoto)}}" alt="" style="width:150px;margin-bottom:5px;">
                                 </td>
         
                                 <td style="width:28px;">
                                    <a href="{{url('admin/deletephoto', [$product->id, $selectedphoto])}}" class="btn btn-danger btn-xs">X</a>
                                 </td>
                                </tr>
                                @endforeach
                             </tbody>
                          </table>
                       </div>
                       <div class="col-sm-2">
                          <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Description</label>
                       <div class="col-sm-8">
                          <textarea name="p_description" class="form-control" cols="30" rows="10" id="editor1" required>{{$product->p_description}}</textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Short Description</label>
                       <div class="col-sm-8">
                          <textarea name="p_short_description" class="form-control" cols="30" rows="10" id="editor2" required>{{$product->p_short_description}}</textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Features</label>
                       <div class="col-sm-8">
                          <textarea name="p_feature" class="form-control" cols="30" rows="10" id="editor3" required>{{$product->p_feature}}</textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Conditions</label>
                       <div class="col-sm-8">
                          <textarea name="p_condition" class="form-control" cols="30" rows="10" id="editor4" required>{{$product->p_condition}}</textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Return Policy</label>
                       <div class="col-sm-8">
                          <textarea name="p_return_policy" class="form-control" cols="30" rows="10" id="editor5" required>{{$product->p_return_policy}}</textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Is Featured?</label>
                       <div class="col-sm-8">
                          <select name="p_is_featured" class="form-control" style="width:auto;" required>
                           @if($product->p_is_featured == 1)
                             <option value="0" >No</option>
                             <option value="1" selected>Yes</option>
                           @else
                              <option value="0" selected >No</option>
                             <option value="1">Yes</option>
                           @endif
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Is Active?</label>
                       <div class="col-sm-8">
                          <select name="p_is_active" class="form-control" style="width:auto;" required>
                           @if($product->p_is_active == 1)
                           <option value="0" >No</option>
                           <option value="1" selected>Yes</option>
                           @else
                            <option value="0" selected >No</option>
                           <option value="1">Yes</option>
                           @endif
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label"></label>
                       <div class="col-sm-6">
                          <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                       </div>
                    </div>
                 </div>
              </div>
           </form>
        </div>
     </div>
  </section>
</div>
<!-- end Content -->

@endsection