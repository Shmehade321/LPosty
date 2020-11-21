@extends ("layouts.app")

@section("content")


    <div class="w-100 bg-light mt-5">
        <div class="card">
            <div class="card-header">
                <h3>{{$user->name}}</h3>
                <p>Posted {{$posts->count()}} {{\Illuminate\Support\Str::plural('post', $posts->count())}} and received {{$user->receivedLikes->count()}} likes</p>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col">
                        @if($posts->count())
                            @foreach($posts as $post)
                                <x-post :post="$post" />
                            @endforeach
                            {{$posts->links()}}
                        @else
                            <p>{{$user->name}} does not have any post.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
