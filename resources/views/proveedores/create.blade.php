
@extends('layouts.internal')
@section('content')


<a href="{{ URL::to('proveedores') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'proveedores')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del proveedor') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
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
        {{ Form::label('email', 'Correo') }}
        {{ Form::text('email', Request::old('email'), 
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>
    
    


    
    

</div>

    {{ Form::submit('Registrar proveedor', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}


@endsection
