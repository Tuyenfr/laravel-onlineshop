
@extends('admin_layout.master')

@section('title')

End level category

@endsection

@section('content')

  <!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>View End Level Categories</h1>
       </div>
       <div class="content-header-right">
          <a href="{{ url('admin/addendlevelcategory')}}" class="btn btn-primary btn-sm">Add New</a>
       </div>
    </section>
    <section class="content">
       <div class="row">
          <div class="col-md-12">
             <div class="box box-info">
                <div class="box-body table-responsive">
                   <table id="example1" class="table table-bordered table-hover table-striped">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>End Level Category Name</th>
                            <th>Mid Level Category Name</th>
                            <th>Top Level Category Name</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Stationery and Gift Wrapping Supplies</td>
                            <td>Household</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=79" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=79" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Household Supplies</td>
                            <td>Household</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=78" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=78" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Baby and Child Care</td>
                            <td>Household</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=77" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=77" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>4</td>
                            <td>Vitamins and Dietary Supplements</td>
                            <td>Health</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=76" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=76" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>5</td>
                            <td>Vision Care</td>
                            <td>Health</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=75" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=75" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>6</td>
                            <td>Oral Care</td>
                            <td>Health</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=74" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=74" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>7</td>
                            <td>Medical Supplies and Equipment</td>
                            <td>Health</td>
                            <td>Health and Household</td>
                            <td>
                               <a href="end-category-edit.php?id=73" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=73" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>8</td>
                            <td>Networking Products</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=72" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=72" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>9</td>
                            <td>External Components</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=71" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=71" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>10</td>
                            <td>Printer and Monitors</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=70" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=70" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>11</td>
                            <td>Laptop Accessories</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=69" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=69" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>12</td>
                            <td>Computers and Tablets</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=68" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=68" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>13</td>
                            <td>Computer Components</td>
                            <td>Computers</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=67" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=67" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>14</td>
                            <td>Home Audio</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=66" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=66" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>15</td>
                            <td>GPS and Navigation</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=65" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=65" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>16</td>
                            <td>Television and Video</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=64" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=64" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>17</td>
                            <td>Security and Surveillance</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=63" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=63" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>18</td>
                            <td>Headphones</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=62" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=62" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>19</td>
                            <td>Cell Phone and Accessories</td>
                            <td>Electronic Items</td>
                            <td>Electronics</td>
                            <td>
                               <a href="end-category-edit.php?id=61" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=61" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>20</td>
                            <td>Bags</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=60" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=60" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>21</td>
                            <td>Other Accessories</td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=59" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=59" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>22</td>
                            <td>Multipacks</td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=58" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=58" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>23</td>
                            <td>Belts</td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=57" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=57" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>24</td>
                            <td>Formal Shoes</td>
                            <td>Men's Shoes</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=56" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=56" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>25</td>
                            <td>Slippers & Casual Shoes</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=55" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=55" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>26</td>
                            <td>Comfort Shoes</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=54" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=54" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>27</td>
                            <td>Boots</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=53" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=53" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>28</td>
                            <td>Sports Shoes</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=52" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=52" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>29</td>
                            <td>Sneakers</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=51" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=51" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>30</td>
                            <td>Pumps</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=50" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=50" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>31</td>
                            <td>Other Accessories</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=49" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=49" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>32</td>
                            <td>Multipacks</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=48" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=48" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>33</td>
                            <td>Scarves & Headwear</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=47" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=47" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>34</td>
                            <td>Gift Sets</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=46" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=46" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>35</td>
                            <td>Face Care</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=45" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=45" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>36</td>
                            <td>Lips</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=44" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=44" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>37</td>
                            <td>Eyes Care</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=43" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=43" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>38</td>
                            <td>Jewellery</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=42" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=42" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>39</td>
                            <td>Hair Care</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=41" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=41" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>40</td>
                            <td>Skincare</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=40" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=40" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>41</td>
                            <td>Fragrance</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=39" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=39" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>42</td>
                            <td>Socks & Hosiery</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=38" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=38" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>43</td>
                            <td>Plus Size Clothing</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=37" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=37" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>44</td>
                            <td>Sportswear</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=36" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=36" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>45</td>
                            <td>Pants & Leggings</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=35" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=35" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>46</td>
                            <td>T-Shirts & Vests</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=34" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=34" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>47</td>
                            <td>Tops</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=33" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=33" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>48</td>
                            <td>Dresses</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=32" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=32" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>49</td>
                            <td>Girls</td>
                            <td>Accessories</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=31" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=31" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>50</td>
                            <td>Boys</td>
                            <td>Accessories</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=30" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=30" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>51</td>
                            <td>Girls</td>
                            <td>Shoes</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=29" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=29" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>52</td>
                            <td>Boys</td>
                            <td>Shoes</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=28" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=28" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>53</td>
                            <td>Girls</td>
                            <td>Clothing</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=27" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=27" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>54</td>
                            <td>Boys</td>
                            <td>Clothing</td>
                            <td>Kids</td>
                            <td>
                               <a href="end-category-edit.php?id=26" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=26" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>55</td>
                            <td>Casual Shoes</td>
                            <td>Men's Shoes</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=25" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=25" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>56</td>
                            <td>Vests</td>
                            <td>T-shirts & Shirts</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=24" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=24" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>57</td>
                            <td>Polo Shirts</td>
                            <td>T-shirts & Shirts</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=23" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=23" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>58</td>
                            <td>Formal Shirts</td>
                            <td>T-shirts & Shirts</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=22" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=22" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>59</td>
                            <td>Casual Shirts</td>
                            <td>T-shirts & Shirts</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=21" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=21" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>60</td>
                            <td>T-shirts</td>
                            <td>T-shirts & Shirts</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=20" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=20" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>61</td>
                            <td>Shorts</td>
                            <td>Bottoms</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=19" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=19" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>62</td>
                            <td>Joggers</td>
                            <td>Bottoms</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=18" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=18" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>63</td>
                            <td>Jeans</td>
                            <td>Bottoms</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=17" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=17" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>64</td>
                            <td>Pants</td>
                            <td>Bottoms</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=16" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=16" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>65</td>
                            <td>Coats & Jackets</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=15" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=15" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>66</td>
                            <td>Hoodies</td>
                            <td>Clothing</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=14" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=14" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>67</td>
                            <td>Flat Shoes</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=13" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=13" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>68</td>
                            <td>Sandals</td>
                            <td>Shoes</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=12" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=12" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>69</td>
                            <td>Sports Shoes</td>
                            <td>Men's Shoes</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=11" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=11" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>70</td>
                            <td>Sunglasses</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=9" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>71</td>
                            <td>Watches</td>
                            <td>Accessories</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=8" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>72</td>
                            <td>T-Shirt</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=7" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>73</td>
                            <td>Tops</td>
                            <td>Beauty Products</td>
                            <td>Women</td>
                            <td>
                               <a href="end-category-edit.php?id=6" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>74</td>
                            <td>Boots</td>
                            <td>Men's Shoes</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=5" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>75</td>
                            <td>Sandals</td>
                            <td>Men's Shoes</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=4" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>76</td>
                            <td>Watches</td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=3" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>77</td>
                            <td>Sunglasses</td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>78</td>
                            <td>Headwear </td>
                            <td>Men Accessories</td>
                            <td>Men</td>
                            <td>
                               <a href="end-category-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="end-category-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                      </tbody>
                   </table>
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
    <p style="color:red;">Be careful! All products under this end category will be deleted from all the tables like order table, payment table, size table, color table, rating table etc.</p>
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