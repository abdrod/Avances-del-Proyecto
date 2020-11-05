@extends('layouts.internal')
@section('content')

<a href="{{ route('proveedores.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('proveedores.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


 <div class="form-group col-md-4">
        {{ Form::label('empresa', 'Empresa') }}
        {{ Form::text('empresa', Request::old('empresa'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>



     <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::number('telefono', Request::old('telefono'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>
   

</div>


    {{ Form::submit('Actualizar proveedores', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection