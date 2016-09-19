@extends('admin.template.main')

@section('title')
    Editar tag
@endsection

@section('content')
    <h4>
        Editar tag
    </h4>
    {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', $tag->name, ['class' => 'validate', 'placeholder' => 'Nombre del tag', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Editar', ['class' => 'btn waves-effect deep-purple', 'name' => 'action']) !!}
                <a class="waves-effect deep-purple btn" href="{{ route('tags.index') }}">Listado</a>
            </div>
        </div>   
    {!! Form::close() !!}
@endsection

