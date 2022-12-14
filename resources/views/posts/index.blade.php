@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Artículos
                    <a href="{{ route('posts.create') }}" class="btn btn-primary float-end"><i class="bi bi-plus-lg"></i>&nbsp; Crear</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post) }}" class="edit btn btn-outline-primary">
                                        <i class="bi bi-pencil"></i> &nbsp; Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Desea eliminar..?')"><i class="bi bi-trash"></i> &nbsp; Eliminar</button>
                                        <!-- <input type="submit" value="Eliminar" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Desea eliminar..?')"> -->
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
