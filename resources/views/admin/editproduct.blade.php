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
                             <option value="">{{$product->tcat_id}}</option>
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
                           <option value="">{{$product->mcat_id}}</option>
                           @foreach ($midlevelcategories as $midlevelcategory)
                           <option value="{{$midlevelcategory->tcat_name}}" >{{$midlevelcategory->tcat_name}}</option>
                           @endforeach
                          </select>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">End Level Category Name <span>*</span></label>
                       <div class="col-sm-4">
                          <select name="ecat_id" class="form-control select2 end-cat" required>
                           <option value="">{{$product->ecat_id}}</option>
                           @foreach ($endlevelcategories as $endlevelcategory)
                           <option value="{{$endlevelcategory->tcat_name}}" >{{$endlevelcategory->tcat_name}}</option>
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
                          <select name="size[]" class="form-control select2" multiple="multiple">
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
                          <select name="color[]" class="form-control select2" multiple="multiple">
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
                                <tr>
                                   <td>
                                    @foreach($selectedphotos as $selectedphoto)
                                      <img src="{{asset('storage/productimages/'.$selectedphoto)}}" alt="" style="width:150px;margin-bottom:5px;">
                                    @endforeach
                                    </td>
                                   <td style="width:28px;">
                                      <a onclick="return confirmDelete();" href="product-other-photo-delete.php?id=132&id1=102" class="btn btn-danger btn-xs">X</a>
                                   </td>
                                </tr>
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
                          <textarea name="p_description" class="form-control" cols="30" rows="10" id="editor1" required><p><span style="color: rgb(15, 17, 17); font-family: Arial, sans-serif; font-size: 14px;">{{$product->p_description}}</span><br></p></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Short Description</label>
                       <div class="col-sm-8">
                          <textarea name="p_short_description" class="form-control" cols="30" rows="10" id="editor2" required><p><span style="color: rgb(15, 17, 17); font-family: Arial, sans-serif; font-size: 14px;">{{$product->p_short_description}}</span><br></p></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Features</label>
                       <div class="col-sm-8">
                          <textarea name="p_feature" class="form-control" cols="30" rows="10" id="editor3" required><ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px; font-family:  Arial, sans-serif; font-size: 14px;"><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">{{$product->p_feature}}</span></li></ul></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Conditions</label>
                       <div class="col-sm-8">
                          <textarea name="p_condition" class="form-control" cols="30" rows="10" id="editor4" required><p><span style="color: rgb(51, 51, 51); font-size: 14px;">{{$product->p_condition}}</span><br></p></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Return Policy</label>
                       <div class="col-sm-8">
                          <textarea name="p_return_policy" class="form-control" cols="30" rows="10" id="editor5"><p><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;"></span><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;">{{$product->p_return_policy}}</span><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;"></span><br></p></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-3 control-label">Is Featured?</label>
                       <div class="col-sm-8">
                          <select name="p_is_featured" class="form-control" style="width:auto;">
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
                          <select name="p_is_active" class="form-control" style="width:auto;">
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