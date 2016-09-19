@extends('admin.template.main')

@section('title', 'Editar categoría' . $category->name)
    
@section('content')
    <h4>
        Editar categoría
    </h4>
    {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT', 'class' => 'col s12']) !!} 
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', $category->name, ['class' => 'validate', 'placeholder' => 'Nombre de la categoría', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('Editar', ['class' => 'btn waves-effect deep-purple', 'name' => 'action']) !!}
                <a class="waves-effect deep-purple btn" href="{{ route('categories.index') }}">Listado</a>
            </div>
        </div>   
    {!! Form::close() !!}
@endsection
