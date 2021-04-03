@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <a href="{{route('post.list')}}" class="btn btn-info pull-right">All Post</a>
                <h4 class="card-category">Edit Post</h4>
            </div>
            <div class="card-body">
                <form action="{{route('post.update',['post_id' => $post->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Post Title</label>
                                <input type="text" class="form-control" name="post_title" value="{{$post->post_title}}">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Select Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($allCategory as $category)
                                        <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <img src="{{asset('uploads/post/'.$post->post_thumbnail)}}" width="100" alt="">
                            <div class="form-group">
                                <label class="bmd-label-floating">Select Thumbnail</label>
                                <input type="file" class="form-control" name="post_thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea id="summernote" name="post_description">{!! $post->post_description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right mt-4">Save Changes</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom_scripts')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

