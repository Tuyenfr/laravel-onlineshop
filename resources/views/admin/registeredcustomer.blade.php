@extends('admin_layout.master')

@section('title')
    Registered customer
@endsection

@section('content')
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="content-header-left">
                <h1>View Customers</h1>
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
                                        <th width="10">#</th>
                                        <th width="180">Name</th>
                                        <th width="150">Email Address</th>
                                        <th width="180">Country, City, State</th>
                                        <th>Status</th>
                                        <th width="100">Change Status</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-r">
                                        <td>1</td>
                                        <td>Liam Moore</td>
                                        <td>liam@mail.com</td>
                                        <td>
                                            United States<br>
                                            Nashville<br>
                                            TN
                                        </td>
                                        <td>Inactive</td>
                                        <td>
                                            <a href="customer-change-status.php?id=1" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=1" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>2</td>
                                        <td>Chad N. Carney</td>
                                        <td>chad@mail.com</td>
                                        <td>
                                            United States<br>
                                            Charlotte<br>
                                            NC
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=2" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=2" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>3</td>
                                        <td>Jean Collins</td>
                                        <td>jean@mail.com</td>
                                        <td>
                                            United States<br>
                                            Owensboro<br>
                                            KY
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=3" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=3" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>4</td>
                                        <td>Annie Young</td>
                                        <td>annie@mail.com</td>
                                        <td>
                                            United States<br>
                                            Beaumont<br>
                                            TX
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=4" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=4" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>5</td>
                                        <td>Matthew Morales</td>
                                        <td>matthew@mail.com</td>
                                        <td>
                                            United States<br>
                                            Mira Loma<br>
                                            CA
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=5" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=5" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>6</td>
                                        <td>August F. Freels</td>
                                        <td>august@mail.com</td>
                                        <td>
                                            United States<br>
                                            Milwaukee<br>
                                            WI
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=6" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=6" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>7</td>
                                        <td>Carl M. Dineen</td>
                                        <td>carl@mail.com</td>
                                        <td>
                                            United States<br>
                                            Kutztown<br>
                                            PA
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=7" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=7" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>8</td>
                                        <td>Benjamin B. Louque</td>
                                        <td>benjamin@mail.com</td>
                                        <td>
                                            United States<br>
                                            Tulsa<br>
                                            OK
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=8" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=8" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>9</td>
                                        <td>Joe K. Richardson</td>
                                        <td>joe@mail.com</td>
                                        <td>
                                            United States<br>
                                            Youngstown<br>
                                            OH
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=9" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=9" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-g">
                                        <td>10</td>
                                        <td>Will Williams</td>
                                        <td>williams@mail.com</td>
                                        <td>
                                            United States<br>
                                            Anniston<br>
                                            AL
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="customer-change-status.php?id=10" class="btn btn-success btn-xs">Change
                                                Status</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="customer-delete.php?id=10" data-toggle="modal"
                                                data-target="#confirm-delete">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete this item?</p>
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
