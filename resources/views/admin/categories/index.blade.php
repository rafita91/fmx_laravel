@extends('admin.template.main')

@section('title')
    Listar categorías
@endsection

@section('content')
<a class="waves-effect deep-purple btn" href="{{ route('categories.create') }}">Nueva categoría</a>
<div class='container'>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td> {{ $category->id }} </td>
                    <td> {{ $category->name }} </td>
                    <td>  
                        <a href='{{ route('admin.categories.edit', $category->id) }}'>editar</a>
                        <a href='{{ route('admin.categories.destroy', $category->id) }}'>eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categories->render() !!}
</div>
@endsection
