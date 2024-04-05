
@extends('admin_layout.master')

@section('title')

Add services

@endsection

@section('content')

           <!-- start content -->
           <div class="content-wrapper">
            <section class="content-header">
            <div class="content-header-left">
                <h1>Add Service</h1>
            </div>
            <div class="content-header-right">
                <a href="service.php" class="btn btn-primary btn-sm">View All</a>
            </div>
            </section>
            <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="box box-info">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" autocomplete="off" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Content <span>*</span></label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="content" style="height:200px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
                                <div class="col-sm-9" style="padding-top:5px">
                                    <input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            </section>
        </div>
        <!-- end content -->

@endsection