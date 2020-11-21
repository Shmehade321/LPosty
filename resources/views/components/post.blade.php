@props(['post' => $post])

<div class="col-md-12">
    <a href="{{route('users.posts', $post->user)}}" class="font-weight-bolder">{{$post->user->name}}</a> <span class="text-muted form-control-sm">{{$post->created_at->diffForHumans()}}</span>
    <p>{{$post->body}}</p>

    <div class="d-flex align-items-center mt-0">
        @auth
            @if(!$post->likedBy(auth()->user()))
                <form action="{{route('posts.likes', $post)}}" method="post" class="mr-2">
                    @csrf
                    <button type="submit" class="btn btn-link">Like</button>
                </form>
            @else
                <form action="{{route('posts.likes', $post)}}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link">Unlike</button>
                </form>
            @endif

            @can('delete', $post)
                <form action="{{route('posts.destroy', $post)}}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            @endcan

        @endauth
        <span>{{$post->likes->count()}} {{\Illuminate\Support\Str::plural('like', $post->likes->count())}}</span>
    </div>
</div>
