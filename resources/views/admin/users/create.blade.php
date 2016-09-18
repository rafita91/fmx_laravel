@extends('admin.template.main')

@section('title')
    Crear usuario
@endsection

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'store', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Nombre completo', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('email', 'Correo electrónico') !!}
                {!! Form::email('email', null, ['class' => 'validate', 'placeholder' => 'example@gmail.com', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'validate', 'placeholder' => '*******', 'required']) !!} 
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('type', ['' => '--Seleccione un nivel--', 'member' => 'Miembro', 'admin' => 'Administrador']) !!}
                {!! Form::label('type', 'Tipo') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Registrar', ['class' => 'btn waves-effect waves-light', 'name' => 'action']) !!}
            </div>
        </div>   
    {!! Form::close() !!}
@endsection