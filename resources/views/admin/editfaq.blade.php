@extends('admin_layout.master')

@section('title')
    Edit faq
@endsection

@section('content')
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="content-header-left">
                <h1>Edit FAQ</h1>
            </div>
            <div class="content-header-right">
                <a href="{{ url('admin/faq') }}" class="btn btn-primary btn-sm">View All</a>
            </div>
        </section>

        @if (Session::has('status'))
            <section class="content" style="min-height:auto;margin-bottom: -30px;">

                <div class="row">
                    <div class="col-md-12">
                        <div class="callout callout-success">
                            <p>{{ Session::get('status') }}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action="{{ url('admin/updatefaq', [$faq->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" name="faq_title"
                                            value="{{ $faq->faq_title }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Content <span>*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="faq_content" id="editor1" style="height:140px;" required>{{ $faq->faq_content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left"
                                            name="form1">Submit</button>
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
