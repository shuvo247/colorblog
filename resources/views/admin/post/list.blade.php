@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials.flash')
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <a href="{{route('post.add')}}" class="btn btn-info pull-right">Add Post</a>
                    <h4 class="card-category">Post List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="">
                            <th>
                                S.I.
                            </th>
                            <td>
                                Post Title
                            </td>
                            <th>
                                Post Category
                            </th>
                            <td>
                                Post Thumbnail
                            </td>
                            <th>
                                Action
                            </th>
                            </thead>
                            <tbody>
                            @foreach($allPost as $post)
                                <tr>
                                    <td>
                                        {{$loop->index+1}}
                                    </td>
                                    <td>
                                        {{$post->post_title}}
                                    </td>
                                    <td>
                                        {{$post->category->category_name}}
                                    </td>
                                    <td>
                                        <img src="{{asset('uploads/post/'.$post->post_thumbnail)}}" width="100" height="60" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('post.edit',['post_id' => $post->id])}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('post.destroy',['post_id' => $post->id])}}" class="btn btn-danger">Delete</a>
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
