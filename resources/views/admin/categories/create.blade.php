@extends('admin.template.main')

@section('title')
    Crear categoría
@endsection

@section('content')
    {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Nombre de la categoría', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Registrar', ['class' => 'btn waves-effect deep-purple', 'name' => 'action']) !!}
                <a class="waves-effect deep-purple btn" href="{{ route('categories.index') }}">Listado</a>
            </div>
        </div>   
    {!! Form::close() !!}
@endsection

