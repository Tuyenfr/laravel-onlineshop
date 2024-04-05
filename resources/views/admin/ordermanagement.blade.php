
@extends('admin_layout.master')

@section('title')

Order Management

@endsection

@section('content')

  <!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>View Orders</h1>
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
                            <th>Customer</th>
                            <th>Product Details</th>
                            <th>
                               Payment Information
                            </th>
                            <th>Paid Amount</th>
                            <th>Payment Status</th>
                            <th>Shipping Status</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr class="bg-g">
                            <td>1</td>
                            <td>
                               <b>Id:</b> 10<br>
                               <b>Name:</b><br> Will Williams<br>
                               <b>Email:</b><br> williams@mail.com<br><br>
                               <a href="#" data-toggle="modal" data-target="#model-1"class="btn btn-warning btn-xs" style="width:100%;margin-bottom:4px;">Send Message</a>
                               <div id="model-1" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title" style="font-weight: bold;">Send Message</h4>
                                        </div>
                                        <div class="modal-body" style="font-size: 14px">
                                           <form action="" method="post">
                                              <input type="hidden" name="cust_id" value="10">
                                              <input type="hidden" name="payment_id" value="1647800902">
                                              <table class="table table-bordered">
                                                 <tr>
                                                    <td>Subject</td>
                                                    <td>
                                                       <input type="text" name="subject_text" class="form-control" style="width: 100%;">
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>Message</td>
                                                    <td>
                                                       <textarea name="message_text" class="form-control" cols="30" rows="10" style="width:100%;height: 200px;"></textarea>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td></td>
                                                    <td><input type="submit" value="Send Message" name="form1"></td>
                                                 </tr>
                                              </table>
                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </td>
                            <td>
                               <b>Product:</b> WD 5TB Elements Portable External Hard Drive HDD<br>(<b>Size:</b> 5T, <b>Color:</b> Black)<br>(<b>Quantity:</b> 1, <b>Unit Price:</b> 149)<br><br>                        
                            </td>
                            <td>
                               <b>Payment Method:</b> <span style="color:red;"><b>Bank Deposit</b></span><br>
                               <b>Payment Id:</b> 1647800902<br>
                               <b>Date:</b> 2022-03-20 11:28:22<br>
                               <b>Transaction Information:</b> <br>Transaction Id: CA01003177945009
                               Transaction Date: 3/20/2022 
                               Bank: WestView Bank, CA Branch 
                               Sender A/C: NQ1011050160WV<br>
                            </td>
                            <td>$149</td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               <a href="#" class="btn btn-danger btn-xs" data-href="order-delete.php?id=55" data-toggle="modal" data-target="#confirm-delete" style="width:100%;">Delete</a>
                            </td>
                         </tr>
                         <tr class="bg-g">
                            <td>2</td>
                            <td>
                               <b>Id:</b> 6<br>
                               <b>Name:</b><br> August F. Freels<br>
                               <b>Email:</b><br> august@mail.com<br><br>
                               <a href="#" data-toggle="modal" data-target="#model-2"class="btn btn-warning btn-xs" style="width:100%;margin-bottom:4px;">Send Message</a>
                               <div id="model-2" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title" style="font-weight: bold;">Send Message</h4>
                                        </div>
                                        <div class="modal-body" style="font-size: 14px">
                                           <form action="" method="post">
                                              <input type="hidden" name="cust_id" value="6">
                                              <input type="hidden" name="payment_id" value="1647799174">
                                              <table class="table table-bordered">
                                                 <tr>
                                                    <td>Subject</td>
                                                    <td>
                                                       <input type="text" name="subject_text" class="form-control" style="width: 100%;">
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>Message</td>
                                                    <td>
                                                       <textarea name="message_text" class="form-control" cols="30" rows="10" style="width:100%;height: 200px;"></textarea>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td></td>
                                                    <td><input type="submit" value="Send Message" name="form1"></td>
                                                 </tr>
                                              </table>
                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </td>
                            <td>
                               <b>Product:</b> Digital Infrared Thermometer for Adults and Kids<br>(<b>Size:</b> One Size for All, <b>Color:</b> White)<br>(<b>Quantity:</b> 1, <b>Unit Price:</b> 70)<br><br>                        
                            </td>
                            <td>
                               <b>Payment Method:</b> <span style="color:red;"><b>Bank Deposit</b></span><br>
                               <b>Payment Id:</b> 1647799174<br>
                               <b>Date:</b> 2022-03-20 10:59:34<br>
                               <b>Transaction Information:</b> <br>Transaction Id: CA01101198945600
                               Transaction Date: 3/20/2022 
                               Bank: WestView Bank, CA Branch 
                               Sender A/C: 1100047860WV<br>
                            </td>
                            <td>$70</td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               Pending                            <br><br>
                               <a href="shipping-change-status.php?id=54&task=Completed" class="btn btn-warning btn-xs" style="width:100%;margin-bottom:4px;">Mark Complete</a>
                            </td>
                            <td>
                               <a href="#" class="btn btn-danger btn-xs" data-href="order-delete.php?id=54" data-toggle="modal" data-target="#confirm-delete" style="width:100%;">Delete</a>
                            </td>
                         </tr>
                         <tr class="bg-g">
                            <td>3</td>
                            <td>
                               <b>Id:</b> 3<br>
                               <b>Name:</b><br> Jean Collins<br>
                               <b>Email:</b><br> jean@mail.com<br><br>
                               <a href="#" data-toggle="modal" data-target="#model-3"class="btn btn-warning btn-xs" style="width:100%;margin-bottom:4px;">Send Message</a>
                               <div id="model-3" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title" style="font-weight: bold;">Send Message</h4>
                                        </div>
                                        <div class="modal-body" style="font-size: 14px">
                                           <form action="" method="post">
                                              <input type="hidden" name="cust_id" value="3">
                                              <input type="hidden" name="payment_id" value="1647798593">
                                              <table class="table table-bordered">
                                                 <tr>
                                                    <td>Subject</td>
                                                    <td>
                                                       <input type="text" name="subject_text" class="form-control" style="width: 100%;">
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>Message</td>
                                                    <td>
                                                       <textarea name="message_text" class="form-control" cols="30" rows="10" style="width:100%;height: 200px;"></textarea>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td></td>
                                                    <td><input type="submit" value="Send Message" name="form1"></td>
                                                 </tr>
                                              </table>
                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </td>
                            <td>
                               <b>Product:</b> Travelpro Laptop Carry-on Travel Tote Bag<br>(<b>Size:</b> One Size for All, <b>Color:</b> Midnight Blue)<br>(<b>Quantity:</b> 1, <b>Unit Price:</b> 91)<br><br>                        
                            </td>
                            <td>
                               <b>Payment Method:</b> <span style="color:red;"><b>PayPal</b></span><br>
                               <b>Payment Id:</b> 1647798593<br>
                               <b>Date:</b> 2022-03-20 10:49:53<br>
                               <b>Transaction Id:</b> <br>
                            </td>
                            <td>$91</td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               <a href="#" class="btn btn-danger btn-xs" data-href="order-delete.php?id=52" data-toggle="modal" data-target="#confirm-delete" style="width:100%;">Delete</a>
                            </td>
                         </tr>
                         <tr class="bg-g">
                            <td>4</td>
                            <td>
                               <b>Id:</b> 2<br>
                               <b>Name:</b><br> Chad N. Carney<br>
                               <b>Email:</b><br> chad@mail.com<br><br>
                               <a href="#" data-toggle="modal" data-target="#model-4"class="btn btn-warning btn-xs" style="width:100%;margin-bottom:4px;">Send Message</a>
                               <div id="model-4" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title" style="font-weight: bold;">Send Message</h4>
                                        </div>
                                        <div class="modal-body" style="font-size: 14px">
                                           <form action="" method="post">
                                              <input type="hidden" name="cust_id" value="2">
                                              <input type="hidden" name="payment_id" value="1647629329">
                                              <table class="table table-bordered">
                                                 <tr>
                                                    <td>Subject</td>
                                                    <td>
                                                       <input type="text" name="subject_text" class="form-control" style="width: 100%;">
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>Message</td>
                                                    <td>
                                                       <textarea name="message_text" class="form-control" cols="30" rows="10" style="width:100%;height: 200px;"></textarea>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td></td>
                                                    <td><input type="submit" value="Send Message" name="form1"></td>
                                                 </tr>
                                              </table>
                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </td>
                            <td>
                               <b>Product:</b> Men's Ultra Cotton T-Shirt, Multipack<br>(<b>Size:</b> XL, <b>Color:</b> Gray)<br>(<b>Quantity:</b> 1, <b>Unit Price:</b> 19)<br><br>                        
                            </td>
                            <td>
                               <b>Payment Method:</b> <span style="color:red;"><b>Bank Deposit</b></span><br>
                               <b>Payment Id:</b> 1647629329<br>
                               <b>Date:</b> 2022-03-18 22:48:49<br>
                               <b>Transaction Information:</b> <br>Transaction Id: CA01010158967840
                               Transaction Date: 3/19/2022
                               Bank: WestView Bank, CA Branch
                               Sender A/C: 102458965WV<br>
                            </td>
                            <td>$19</td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               Completed                            <br><br>
                            </td>
                            <td>
                               <a href="#" class="btn btn-danger btn-xs" data-href="order-delete.php?id=51" data-toggle="modal" data-target="#confirm-delete" style="width:100%;">Delete</a>
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
    Sure you want to delete this item?
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