
@extends('layouts.internal')
@section('content')


<a href="{{ URL::to('clientes') }}">Regresar</a> <br> <br>

<h1>Formulario de Agregacion de Clientes</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'clientes')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del Cliente') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    

    <div class="form-group col-md-4">
        {{ Form::label('edad', 'Edad') }}
        {{ Form::text('edad', Request::old('edad'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30 )) }}
    </div>



     <div class="form-group col-md-4">
        {{ Form::label('fechaingreso', 'Fecha de Ingreso') }}
        {{ Form::number('fechaingreso', Request::old('fechaingreso'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>


 <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Request::old('telefono'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

     <div class="form-group col-md-4">
        {{ Form::label('regimen', 'Regimen') }}
        {{ Form::text('regimen', Request::old('regimen'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>



     <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo') }}
        {{ Form::text('email', Request::old('email'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>
    
    


    
    

</div>

    {{ Form::submit('Registrar Cliente', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}


@endsection
