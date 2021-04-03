@extends('admin.master')
@section('content')
<div class="col-md-12">
    @include('admin.partials.flash')
    <div class="card">
        <div class="card-header card-header-primary">
            <a href="{{route('slider.list')}}" class="btn btn-info pull-right">All Slider</a>
            <h4 class="card-category">Add Slider</h4>
        </div>
        <div class="card-body">
        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
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
