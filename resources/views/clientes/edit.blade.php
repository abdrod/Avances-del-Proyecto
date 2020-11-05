@extends('layouts.internal')
@section('content')

<a href="{{ route('clientes.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('clientes.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


 <div class="form-group col-md-4">
        {{ Form::label('edad', 'Edad') }}
        {{ Form::text('edad', Request::old('edad'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>


<div class="form-group col-md-4">
        {{ Form::label('fechaingreso', 'Fecha de Ingreso') }}
        {{ Form::text('fechaingreso', Request::old('fechaingreso'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>


     <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Request::old('telefono'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>
    
    <div class="form-group col-md-4">
        {{ Form::label('regimen', 'Regimen') }}
        {{ Form::text('regimen', Request::old('regimen'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>
    

     <div class="form-group col-md-4">
        {{ Form::label('correo', 'Correo') }}
        {{ Form::text('correo', Request::old('correo'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>
    
   

</div>


    {{ Form::submit('Actualizar  Informacion Cliente', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection