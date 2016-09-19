@extends('admin.template.main')

@section('title')
    Crear tag
@endsection

@section('content')
    <h4>
        Crear tag
    </h4>
    {!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Nombre del tag', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Registrar', ['class' => 'btn waves-effect deep-purple', 'name' => 'action']) !!}
                <a class="waves-effect deep-purple btn" href="{{ route('tags.index') }}">Listado</a>
            </div>
        </div>   
    {!! Form::close() !!}
@endsection

