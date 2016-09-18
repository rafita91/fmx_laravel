@extends('admin.template.main')

@section('title')
    Listar usuarios
@endsection

@section('content')
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
                        <a href='#'>1</a>
                        <a href='#'>2</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
</div>
@endsection