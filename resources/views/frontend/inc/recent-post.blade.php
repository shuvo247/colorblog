@php
    $recentPost = \App\Models\Post::orderByDesc('id')->take(8)->get();
@endphp

@foreach($recentPost as $post)
    <a href="{{route('single.post',['post_slug' => $post->post_slug])}}" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="w-100 justify-content-between">
            <img src="{{asset('uploads/post/'.$post->post_thumbnail)}}" alt="" class="img-fluid float-left">
            <h5 class="mb-1">{{$post->post_title}}</h5>
            <small>{{$post->created_at->toFormattedDateString()}}</small>
        </div>
    </a>
@endforeach
