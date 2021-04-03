@extends('admin.master')
@section('content')
<div class="col-md-12">
    @include('admin.partials.flash')
    <div class="card">
        <div class="card-header card-header-primary">
            <a href="{{route('category.list')}}" class="btn btn-info pull-right">All Category</a>
            <h4 class="card-category">Add Category</h4>
        </div>
        <div class="card-body">
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Category Name</label>
                        <input type="text" class="form-control" name="category_name">
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
