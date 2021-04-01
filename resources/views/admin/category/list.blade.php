@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        @include('admin.partials.flash')
        <div class="card card-plain">
        <div class="card-header card-header-primary">
            <button class="btn btn-info pull-right" data-toggle="modal" data-target="#categoryAdd">Add Category</button>
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
                            <a href="{{route('category.destroy',['category_id' => $category->id])}}" class="btn btn-delete">Delete</a>
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
<!-- Modal Start -->
<!-- Modal -->
<div class="modal fade" id="categoryAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <!-- Modal End -->
@endsection