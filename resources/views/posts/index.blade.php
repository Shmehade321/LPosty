@extends ("layouts.app")

@section("content")


           <div class="w-100 bg-light mt-5">
               <div class="card">
                   <div class="card-header"><h3>Posts</h3></div>
                   <div class="card-body">

                       <form method="post" action="{{route('posts')}}">
                           @csrf
                           <div class="form-group">
                               <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Write some post!!" id="body" name="body"></textarea>
                               @error('body')
                               <small class="form-text text-danger">{{$message}}</small>
                               @enderror
                           </div>
                           <button type="submit" class="btn btn-primary">Post</button>
                       </form>


                       <div class="row mt-4">
                           <div class="col">
                               @if($posts->count())
                                   @foreach($posts as $post)
                                       <x-post :post="$post" />
                                   @endforeach
                                   {{$posts->links()}}
                               @else
                                   <p>There are no post at this moment</p>
                               @endif
                           </div>

                       </div>

                   </div>
               </div>
           </div>


@endsection
