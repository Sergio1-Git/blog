@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Artículo</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label>Título *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="file" id="formFile">
                        </div>
                        <div class="form-group mb-4">
                            <label>Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label>Contenido embebido</label>
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            @csrf
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
