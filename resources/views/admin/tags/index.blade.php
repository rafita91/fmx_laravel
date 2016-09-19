@extends('admin.template.main')

@section('title')
    Listar tags
@endsection

@section('content')
    <h4>
        Listar TAgs
    </h4>
    <a class="waves-effect deep-purple btn" href="{{ route('tags.create') }}">Nuevo Tag</a>
    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td> {{ $tag->id }} </td>
                        <td> {{ $tag->name }} </td>
                        <td>  
                            <a href='{{ route('admin.tags.edit', $tag->id) }}'>editar</a>
                            <a href='{{ route('admin.tags.destroy', $tag->id) }}'>eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $tags->render() !!}
    </div>
@endsection
