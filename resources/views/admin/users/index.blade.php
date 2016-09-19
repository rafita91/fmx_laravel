@extends('admin.template.main')

@section('title')
    Listar usuarios
@endsection

@section('content')
    <h4>
        Listar usuarios
    </h4>
    <a class="waves-effect deep-purple btn" href="{{ route('users.create') }}">Nuevo usuario</a>
    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->type }} </td>
                        <td>  
                            <a href='{{ route('admin.users.edit', $user->id) }}'>editar</a>
                            <a href='{{ route('admin.users.destroy', $user->id) }}'>eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@endsection