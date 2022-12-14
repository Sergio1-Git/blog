@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)

            <div class="card">
                <div class="card-body">

                    @if($post->image)
                    <!-- <img class="card-img-top" src="{{url('storage/'.$post->image)}}" alt=""> -->
                    <img class="card-img-top" src="{{ $post->get_image }}" alt="">
                    @elseif($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !! }
                    </div>
                    @endif
                    <h5 class="card-title">{{$post->title}}</h5>

                    <p class="card-text">
                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}">Leer más</a>
                    </p>
                    <p class="tex-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $posts->links("pagination::bootstrap-5") }}
        </div>
    </div>
</div>
@endsection
