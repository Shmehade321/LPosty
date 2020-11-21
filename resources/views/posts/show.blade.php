@extends ("layouts.app")

@section("content")


    <div class="w-100 bg-light mt-5">
        <div class="card">
            <div class="card-header"><h3>Post</h3></div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col">
                        <x-post :post="$post" />
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
