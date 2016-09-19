@extends('admin.template.main')

@section('title', 'Editar usuario' . $user->name)
    
@section('content')
    <h4>
        Editar usuarios
    </h4>
    {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', $user->name, ['class' => 'validate', 'placeholder' => 'Nombre completo', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('email', 'Correo electrónico') !!}
                {!! Form::email('email', $user->email, ['class' => 'validate', 'placeholder' => 'example@gmail.com', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador']) !!}
                {!! Form::label('type', 'Tipo') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Editar', ['class' => 'btn waves-effect deep-purple', 'name' => 'action']) !!}
            </div>
        </div>   
    {!! Form::close() !!}
@endsection
