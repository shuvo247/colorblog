@extends('admin.master')
@php
    $allCategory = \App\Models\Category::orderByDesc('id')->get();
    $categorySetting = \App\Models\CategorySetting::get();
@endphp
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials.flash')
        </div>
        <div class="col-md-6">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-category">Frontend Category List</h4>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    @foreach($categorySetting as $category_setting)
                                        <form action="{{route('setting.category.update',['category_setting_id' => $category_setting->id])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <select name="category_id" id="" class="form-control mt-3">
                                                @foreach($allCategory as $category)
                                                    <option value="{{$category->id}}" @if($category->id == $category_setting->category_id) selected @endif>{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary pull-right mt-4 mb-3">Update</button>
                                            <a href="{{route('setting.category.destroy',['category_setting_id' => $category_setting->id])}}" class="btn btn-danger  mt-4 mb-3">Delete</a>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-category">Select Category Frontend</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('setting.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($allCategory as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right mt-4">Save Changes</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
