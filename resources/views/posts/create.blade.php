@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Articulo
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label>Titulo</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Titulo">Image</label>
                            <input type="file" name="file" require>
                        </div>
                        <div class="form-group mb-3">
                            <label>Contenido</label>
                            <textarea name="body" id="" rows="6" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Contenido embebido</label>
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
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