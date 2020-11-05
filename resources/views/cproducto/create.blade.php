
@extends('layouts.internal')
@section('content')


<a href="{{ URL::to('cproducto') }}">Regresar</a> <br> <br>

<h1> Creación de Categorias</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cproducto')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre de la Categoria') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    
<div class="form-group col-md-3">
        {{ Form::label('activo', 'Estatus ') }}
        {{ Form::checkbox('activo', Request::old('activo'), false,  
           array('class' => 'form-control')) }}
    </div>
   

    

</div>

    {{ Form::submit('Registrar Categoría', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}


@endsection
