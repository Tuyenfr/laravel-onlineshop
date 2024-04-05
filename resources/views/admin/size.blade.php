
@extends('admin_layout.master')

@section('title')

Size

@endsection

@section('content')

	   <!-- start content -->
     <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Sizes</h1>
         </div>
         <div class="content-header-right">
            <a href="{{ url('admin/addsize')}}" class="btn btn-primary btn-sm">Add New</a>
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
                              <th>Size Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>XS</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>S</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>M</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>L</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>XL</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=5')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=5')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>XXL</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=6')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=6')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>3XL</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=7')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=7')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>8</td>
                              <td>31</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=8')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=8')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>9</td>
                              <td>32</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=9')}}" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=9')}}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>10</td>
                              <td>33</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}0" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}0" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>11</td>
                              <td>34</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>12</td>
                              <td>35</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>13</td>
                              <td>36</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>14</td>
                              <td>37</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>15</td>
                              <td>38</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>16</td>
                              <td>39</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>17</td>
                              <td>40</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>18</td>
                              <td>41</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>19</td>
                              <td>42</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=1')}}9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=1')}}9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>20</td>
                              <td>43</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}0" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}0" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>21</td>
                              <td>44</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>22</td>
                              <td>45</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>23</td>
                              <td>46</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>24</td>
                              <td>47</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>25</td>
                              <td>48</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>26</td>
                              <td>Free Size</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>27</td>
                              <td>One Size for All</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>28</td>
                              <td>10</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>29</td>
                              <td>12 Months</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=2')}}9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=2')}}9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>30</td>
                              <td>2T</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}0" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}0" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>31</td>
                              <td>3T</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>32</td>
                              <td>4T</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>33</td>
                              <td>5T</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>34</td>
                              <td>6 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>35</td>
                              <td>7 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>36</td>
                              <td>8 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>37</td>
                              <td>10 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>38</td>
                              <td>12 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>39</td>
                              <td>14 Years</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=3')}}9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=3')}}9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>40</td>
                              <td>256 GB</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}0" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}0" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>41</td>
                              <td>128 GB</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>42</td>
                              <td>14 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>43</td>
                              <td>16 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>44</td>
                              <td>18 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>45</td>
                              <td>20 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>46</td>
                              <td>22 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>47</td>
                              <td>24 Plus</td>
                              <td>
                                 <a href="{{ url('admin/editsize?id=4')}}7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="{{ url('admin/deletesize?id=4')}}7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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
               Are you sure want to delete this item?
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