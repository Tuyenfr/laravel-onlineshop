@extends('admin_layout.master')

@section('title')
    Edit sliders
@endsection

@section('content')
    <!-- start content -->

    <div class="content-wrapper">
        <section class="content-header">
            <div class="content-header-left">
                <h1>Edit Slider</h1>
            </div>
            <div class="content-header-right">
                <a href="{{ url('admin/managesliders') }}" class="btn btn-primary btn-sm">View All</a>
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
                    <form class="form-horizontal" action="{{ url('admin/updateslider', [$slider->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="current_photo" value="{{ $slider->photo }}">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                    <div class="col-sm-9" style="padding-top:5px">
                                        <img src="{{ asset('storage/sliders/' . $slider->photo) }}" alt="Slider Photo"
                                            style="width:400px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Photo </label>
                                    <div class="col-sm-6" style="padding-top:5px">
                                        <input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" name="heading"
                                            value="{{ $slider->heading }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Content </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="content" style="height:140px;" required>{{ $slider->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Button Text </label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" name="button_text"
                                            value="{{ $slider->button_text }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Button URL </label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" name="button_url"
                                            value="{{ $slider->button_url }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Position </label>
                                    <div class="col-sm-6">
                                        <select name="position" class="form-control" required>
                                            @if ($slider->position == 'Left')
                                                <option value="{{ $slider->position }}" selected>{{ $slider->position }}
                                                </option>
                                                <option value="Center">Center</option>
                                                <option value="Right">Right</option>
                                            @elseif($slider->position == 'Center')
                                                <option value="{{ $slider->position }}" selected>{{ $slider->position }}
                                                </option>
                                                <option value="Left">Left</option>
                                                <option value="Right">Right</option>
                                            @else
                                                <option value="{{ $slider->position }}" selected>{{ $slider->position }}
                                                </option>
                                                <option value="Left">Left</option>
                                                <option value="Center">Center</option>
                                            @endif

                                        </select>
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
