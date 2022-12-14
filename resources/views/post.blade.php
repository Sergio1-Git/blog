@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-4">
                @if($post->image)
                    <img class="card-img-top" src="{{ $post->get_image }}" alt="">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    @if($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                    @endif
                    <p class="card-text">
                        {{ $post->get_excerpt }}
                    </p>
                    <p class="tex-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
