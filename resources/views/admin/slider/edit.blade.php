@extends('admin.master')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <a href="{{route('slider.list')}}" class="btn btn-info pull-right">All Slider</a>
            <h4 class="card-category">Edit Slider</h4>
        </div>
        <div class="card-body">
        <form action="{{route('slider.update',['slider_id' => $slider->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                <img src="{{asset('uploads/slider/'.$slider->slider_image)}}" width="100" alt="">
                    <div class="form-group">
                        <label class="bmd-label-floating">Select Image</label>
                        <input type="file" class="form-control" name="slider_image">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
            <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
