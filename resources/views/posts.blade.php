@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <div class="form-group row">

                        <img class="col-6 offset-3" src="{{url('storage/'.$post->image)}}" alt="">
                        <input class="col-12 mt-4" type="file" name="file">
                    </div>
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