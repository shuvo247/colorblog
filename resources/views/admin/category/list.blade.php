@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        @include('admin.partials.flash')
        <div class="card card-plain">
        <div class="card-header card-header-primary">
            <a href="{{route('category.add')}}" class="btn btn-info pull-right">Add Category</a>
            <h4 class="card-category">Category List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-hover">
                <thead class="">
                <th>
                    S.I.
                </th>
                <th>
                    Category Name
                </th>
                <th>
                    Views
                </th>
                <th>
                    Action
                </th>
                </thead>
                <tbody>
                @foreach($allCategory as $category)
                    <tr>
                        <td>
                        {{$loop->index+1}}
                        </td>
                        <td>
                        {{$category->category_name}}
                        </td>
                        <td>
                        {{$category->count_category_click}}
                        </td>
                        <td>
                            <a href="{{route('category.show',['category_id' => $category->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('category.destroy',['category_id' => $category->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection