
@extends('admin_layout.master')

@section('title')

Colors

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Colors</h1>
         </div>
         <div class="content-header-right">
            <a href="{{ url('admin/addcolor')}}" class="btn btn-primary btn-sm">Add New</a>
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
                              <th>Color Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Red</td>
                              <td>
                                 <a href="color-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Black</td>
                              <td>
                                 <a href="color-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Blue</td>
                              <td>
                                 <a href="color-edit.php?id=3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Yellow</td>
                              <td>
                                 <a href="color-edit.php?id=4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>Green</td>
                              <td>
                                 <a href="color-edit.php?id=5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>White</td>
                              <td>
                                 <a href="color-edit.php?id=6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>Orange</td>
                              <td>
                                 <a href="color-edit.php?id=7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>8</td>
                              <td>Brown</td>
                              <td>
                                 <a href="color-edit.php?id=8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>9</td>
                              <td>Tan</td>
                              <td>
                                 <a href="color-edit.php?id=9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>10</td>
                              <td>Pink</td>
                              <td>
                                 <a href="color-edit.php?id=10" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=10" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>11</td>
                              <td>Mixed</td>
                              <td>
                                 <a href="color-edit.php?id=11" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=11" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>12</td>
                              <td>Lightblue</td>
                              <td>
                                 <a href="color-edit.php?id=12" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=12" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>13</td>
                              <td>Violet</td>
                              <td>
                                 <a href="color-edit.php?id=13" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=13" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>14</td>
                              <td>Light Purple</td>
                              <td>
                                 <a href="color-edit.php?id=14" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=14" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>15</td>
                              <td>Salmon</td>
                              <td>
                                 <a href="color-edit.php?id=15" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=15" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>16</td>
                              <td>Gold</td>
                              <td>
                                 <a href="color-edit.php?id=16" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=16" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>17</td>
                              <td>Gray</td>
                              <td>
                                 <a href="color-edit.php?id=17" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=17" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>18</td>
                              <td>Ash</td>
                              <td>
                                 <a href="color-edit.php?id=18" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=18" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>19</td>
                              <td>Maroon</td>
                              <td>
                                 <a href="color-edit.php?id=19" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=19" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>20</td>
                              <td>Silver</td>
                              <td>
                                 <a href="color-edit.php?id=20" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=20" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>21</td>
                              <td>Dark Clay</td>
                              <td>
                                 <a href="color-edit.php?id=21" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=21" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>22</td>
                              <td>Cognac</td>
                              <td>
                                 <a href="color-edit.php?id=22" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=22" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>23</td>
                              <td>Coffee</td>
                              <td>
                                 <a href="color-edit.php?id=23" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=23" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>24</td>
                              <td>Charcoal</td>
                              <td>
                                 <a href="color-edit.php?id=24" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=24" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>25</td>
                              <td>Navy</td>
                              <td>
                                 <a href="color-edit.php?id=25" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=25" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>26</td>
                              <td>Fuchsia</td>
                              <td>
                                 <a href="color-edit.php?id=26" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=26" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>27</td>
                              <td>Olive</td>
                              <td>
                                 <a href="color-edit.php?id=27" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=27" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>28</td>
                              <td>Burgundy</td>
                              <td>
                                 <a href="color-edit.php?id=28" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=28" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>29</td>
                              <td>Midnight Blue</td>
                              <td>
                                 <a href="color-edit.php?id=29" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="color-delete.php?id=29" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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