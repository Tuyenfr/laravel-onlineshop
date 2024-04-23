
@extends('admin_layout.master')

@section('title')

Product Management

@endsection

@section('content')

	<!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>View Products</h1>
       </div>
       <div class="content-header-right">
          <a href="{{url('admin/addproduct')}}" class="btn btn-primary btn-sm">Add Product</a>
       </div>
    </section>
    <section class="content">
       <div class="row">
          <div class="col-md-12">
             <div class="box box-info">
                <div class="box-body table-responsive">
                   <table id="example1" class="table table-bordered table-hover table-striped">
                      <thead class="thead-dark">
                         <tr>
                            <th width="10">#</th>
                            <th>Photo</th>
                            <th width="160">Product Name</th>
                            <th width="60">Old Price</th>
                            <th width="60">(C) Price</th>
                            <th width="60">Quantity</th>
                            <th>Featured?</th>
                            <th>Active?</th>
                            <th>Category</th>
                            <th width="80">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-102.jpg')}}" alt="Women's Plus-Size Shirt Dress with Gold Hardware" style="width:80px;"></td>
                            <td>Women's Plus-Size Shirt Dress with Gold Hardware</td>
                            <td>$190</td>
                            <td>$169</td>
                            <td>112</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Dresses</td>
                            <td>										
                               <a href="product-edit.php?id=102" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=102" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-101.jpg')}}" alt="Digital Infrared Thermometer for Adults and Kids" style="width:80px;"></td>
                            <td>Digital Infrared Thermometer for Adults and Kids</td>
                            <td>$79</td>
                            <td>$70</td>
                            <td>289</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Health and Household<br>Health<br>Medical Supplies and Equipment</td>
                            <td>										
                               <a href="product-edit.php?id=101" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=101" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-100.jpg')}}" alt="Men's Long Cuffed Jogger Yoga Sweat Pant" style="width:80px;"></td>
                            <td>Men's Long Cuffed Jogger Yoga Sweat Pant</td>
                            <td>$105</td>
                            <td>$95</td>
                            <td>78</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>Bottoms<br>Joggers</td>
                            <td>										
                               <a href="product-edit.php?id=100" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=100" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>4</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-99.jpg')}}" alt="Oculus Quest 2 - Advanced All-In-One Virtual Reality Headset" style="width:80px;"></td>
                            <td>Oculus Quest 2 - Advanced All-In-One Virtual Reality Headset</td>
                            <td>$512</td>
                            <td>$495</td>
                            <td>46</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Electronics<br>Electronic Items<br>Cell Phone and Accessories</td>
                            <td>										
                               <a href="product-edit.php?id=99" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=99" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>5</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-98.jpg')}}" alt="Women's Fuzzy Fleece Lapel Open Front Long Cardigan Coat" style="width:80px;"></td>
                            <td>Women's Fuzzy Fleece Lapel Open Front Long Cardigan Coat</td>
                            <td>$52</td>
                            <td>$43</td>
                            <td>41</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Coats & Jackets</td>
                            <td>										
                               <a href="product-edit.php?id=98" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=98" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>6</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-97.jpg')}}" alt="Women's Tea Length Dress with Rosette Detail (Petite & Regular)" style="width:80px;"></td>
                            <td>Women's Tea Length Dress with Rosette Detail (Petite & Regular)</td>
                            <td>$87</td>
                            <td>$67</td>
                            <td>53</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Dresses</td>
                            <td>										
                               <a href="product-edit.php?id=97" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=97" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>7</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-96.jpg')}}" alt="Men's Loose Fit Heavyweight Long-Sleeve Pocket T-Shirt" style="width:80px;"></td>
                            <td>Men's Loose Fit Heavyweight Long-Sleeve Pocket T-Shirt</td>
                            <td>$29</td>
                            <td>$23</td>
                            <td>102</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>T-shirts & Shirts<br>T-shirts</td>
                            <td>										
                               <a href="product-edit.php?id=96" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=96" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>8</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-95.jpg')}}" alt="Bose QuietComfort 45 Bluetooth Wireless Headphones" style="width:80px;"></td>
                            <td>Bose QuietComfort 45 Bluetooth Wireless Headphones</td>
                            <td>$329</td>
                            <td>$279</td>
                            <td>53</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Electronics<br>Electronic Items<br>Headphones</td>
                            <td>										
                               <a href="product-edit.php?id=95" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=95" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>9</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-94.jpg')}}" alt="WD 5TB Elements Portable External Hard Drive HDD" style="width:80px;"></td>
                            <td>WD 5TB Elements Portable External Hard Drive HDD</td>
                            <td>$160</td>
                            <td>$149</td>
                            <td>46</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Electronics<br>Computers<br>External Components</td>
                            <td>										
                               <a href="product-edit.php?id=94" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=94" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>10</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-93.jpg')}}" alt="Gold Plated Leopard Print Crystal Big Round Hoop Earrings" style="width:80px;"></td>
                            <td>Gold Plated Leopard Print Crystal Big Round Hoop Earrings</td>
                            <td>$32</td>
                            <td>$25</td>
                            <td>165</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Accessories<br>Jewellery</td>
                            <td>										
                               <a href="product-edit.php?id=93" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=93" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>11</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-92.jpg')}}" alt="Travelpro Laptop Carry-on Travel Tote Bag" style="width:80px;"></td>
                            <td>Travelpro Laptop Carry-on Travel Tote Bag</td>
                            <td>$110</td>
                            <td>$91</td>
                            <td>29</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Accessories<br>Bags</td>
                            <td>										
                               <a href="product-edit.php?id=92" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=92" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>12</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-91.jpg')}}" alt="Women's Oversized Fleece Hoodie" style="width:80px;"></td>
                            <td>Women's Oversized Fleece Hoodie</td>
                            <td>$68</td>
                            <td>$56</td>
                            <td>41</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Hoodies</td>
                            <td>										
                               <a href="product-edit.php?id=91" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=91" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>13</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-90.jpg')}}" alt="Women's Thin Cotton Zip Up Hoodie Jacket" style="width:80px;"></td>
                            <td>Women's Thin Cotton Zip Up Hoodie Jacket</td>
                            <td>$43</td>
                            <td>$32</td>
                            <td>64</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Hoodies</td>
                            <td>										
                               <a href="product-edit.php?id=90" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=90" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>14</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-89.jpg')}}" alt="Men's Fleece Jogger Pant" style="width:80px;"></td>
                            <td>Men's Fleece Jogger Pant</td>
                            <td>$58</td>
                            <td>$37</td>
                            <td>110</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>Bottoms<br>Joggers</td>
                            <td>										
                               <a href="product-edit.php?id=89" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=89" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>15</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-88.jpg')}}" alt="Under Armour Men's Sportstyle Left Chest Short Sleeve T-shirt" style="width:80px;"></td>
                            <td>Under Armour Men's Sportstyle Left Chest Short Sleeve T-shirt</td>
                            <td>$108</td>
                            <td>$83</td>
                            <td>59</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>T-shirts & Shirts<br>Casual Shirts</td>
                            <td>										
                               <a href="product-edit.php?id=88" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=88" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>16</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-87.jpg')}}" alt="Truck Boys Pajamas Toddler Sleepwear Clothes" style="width:80px;"></td>
                            <td>Truck Boys Pajamas Toddler Sleepwear Clothes</td>
                            <td>$59</td>
                            <td>$37</td>
                            <td>68</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Kids<br>Clothing<br>Boys</td>
                            <td>										
                               <a href="product-edit.php?id=87" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=87" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>17</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-86.jpg')}}" alt="Amazfit GTS 3 Smart Watch for Android iPhone" style="width:80px;"></td>
                            <td>Amazfit GTS 3 Smart Watch for Android iPhone</td>
                            <td>$199</td>
                            <td>$179</td>
                            <td>32</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>Men Accessories<br>Watches</td>
                            <td>										
                               <a href="product-edit.php?id=86" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=86" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>18</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-85.jpg')}}" alt="Men's Soft Classic Sneaker" style="width:80px;"></td>
                            <td>Men's Soft Classic Sneaker</td>
                            <td>$110</td>
                            <td>$91</td>
                            <td>32</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>Men's Shoes<br>Casual Shoes</td>
                            <td>										
                               <a href="product-edit.php?id=85" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=85" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>19</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-84.jpg')}}" alt="Loose-fit One-Shoulder Cutout Rib Knit Maxi Dress" style="width:80px;"></td>
                            <td>Loose-fit One-Shoulder Cutout Rib Knit Maxi Dress</td>
                            <td>$51</td>
                            <td>$39</td>
                            <td>26</td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Women<br>Clothing<br>Dresses</td>
                            <td>										
                               <a href="product-edit.php?id=84" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=84" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>20</td>
                            <td style="width:82px;"><img src="{{asset('backend/uploads/product-featured-83.jpg')}}" alt="Men's Ultra Cotton T-Shirt, Multipack" style="width:80px;"></td>
                            <td>Men's Ultra Cotton T-Shirt, Multipack</td>
                            <td>$26</td>
                            <td>$19</td>
                            <td>77</td>
                            <td>
                               <span class="badge badge-success" style="background-color:red;">No</span>									
                            </td>
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>									
                            </td>
                            <td>Men<br>T-shirts & Shirts<br>Casual Shirts</td>
                            <td>										
                               <a href="product-edit.php?id=83" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=83" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
             </div>
             <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
             </div>
          </div>
       </div>
    </div>
 </div>
<!-- end content -->

@endsection